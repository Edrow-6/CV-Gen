<?php
namespace App\Controllers;

// Requis le fichier avec les fonctions "d'aides" utiles
require_once __DIR__.'/../helpers.php';

class AuthController {

    public function login() {

        // CONFIGURATION DE L'APPLICATION / RELAI VARIABLES .ENV
        // Requis le fichier de configuration 'app' | A déplacer dans helpers ?
        $app = include __DIR__.'/../../config/app.php';

        // Retourne la fonction d'affichage en désignant view($view_path, $vars)
        // Exemple : view('auth.login', ["app_name" => $app['name']])
        return view('auth.login');
    }

    public function register() {

        // CONFIGURATION DE L'APPLICATION / RELAI VARIABLES .ENV
        // Requis le fichier de configuration 'app' | A déplacer dans helpers ?
        $app = include __DIR__.'/../../config/app.php';
        
        // Retourne la fonction d'affichage en désignant view($view_path, $vars)
        return view('auth.register');
    }
}