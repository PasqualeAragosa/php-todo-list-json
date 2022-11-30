<!DOCTYPE html>
<html lang="en">

<head>
    <title>ToDo List PHP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>

    <div id='app'>
        <div class="wrapper w-75 m-auto mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <h1>TODO LIST</h1>
                        <ul class="list-group mt-4">
                            <li v-for="todo in todoElements" class="list-group-item">{{todo}}</li>
                        </ul>
                    </div>
                    <!-- /.col-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>

</body>

</html>