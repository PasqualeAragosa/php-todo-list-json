<?php

$todo_list = [
    'HTML',
    'CSS',
    'Responsive Layout',
    'Javascript',
    'PHP',
    'Laravel'
];

// 'header()' funzione che specifica il tipo di dati(JSON in questo caso) che restituisce la chiamata al server
header('Content-Type: application/jason');

// 'json_encode' => trasforma gli l'array PHP in una stringa JSON
echo json_encode($todo_list);
