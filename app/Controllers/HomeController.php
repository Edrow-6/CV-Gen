<?php
namespace App\Controllers;

class HomeController {

    public function index() {

        // CONFIGURATION DE L'APPLICATION / RELAI VARIABLES .ENV
        // Requis le fichier de configuration 'app' | A déplacer dans helpers ?
        $app = include __DIR__.'/../../config/app.php';

        // Requis le fichier avec les fonctions "d'aides" utiles
        require_once __DIR__.'/../helpers.php';

        // Retourn la fonction d'affichage en désignant view($view_path, $vars)
        return view('home', ["app_name" => $app['name']]);
    }
}