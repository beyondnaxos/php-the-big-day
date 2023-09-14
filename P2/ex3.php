<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach ($recipe as $property => $propertyValue) {
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}

// php scrip to get datas from random api 

// Path: P2/ex4.php

<?php
$curl = curl_init('https://jsonplaceholder.typicode.com/users');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($curl);
if ($data === false) {
    var_dump(curl_error($curl));
} else {
    $data = json_decode($data, true);
    foreach ($data as $user) {
        echo $user['name'] . PHP_EOL;
    }
}

// php script to get datas from random api and save it in a file
