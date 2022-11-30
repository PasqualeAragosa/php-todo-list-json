const { createApp } = Vue;

createApp({
    data() {
        return {
            todoElements: [],
            apiUrl: 'server.php',
        }
    },
    methods: {
        readTodoElements(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.todoElements = response.data;
                })
                .catch(err => {
                    console.error(err.message);
                });
        },
    },
    mounted() {
        this.readTodoElements(this.apiUrl);
    }
}).mount("#app");