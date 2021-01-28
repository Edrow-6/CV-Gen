<?php

use eftec\PdoOne;

// RELAI VARIABLES .ENV
$app = include __DIR__.'/../config/app.php';

// Enclenche la temporisation de sortie (seul les "Header" sont envoyé au navigateur)
ob_start();

// Initialisation de la session
if(!isset($_SESSION)) {
    session_start();
}

$driver = $app['database.driver'];
$hostname = $app['database.hostname'];
$username = $app['database.username'];
$database = $app['database.password'];
$dbname = $app['database.name'];

$connection = new PdoOne($driver, $hostname, $username, $database, $dbname);
$connection->connect();