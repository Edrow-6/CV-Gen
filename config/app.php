<?php

// Récupération des variables .env pour ensuite les traiter dans le chargeur de l'application.
return [
    'name' => $_ENV['APP_NAME'],

    'database' => [

        'driver' => $_ENV['DB_DRIVER'],
        'hostname' => $_ENV['DB_HOST'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'name' => $_ENV['DB_DATABASE'],

    ]
];