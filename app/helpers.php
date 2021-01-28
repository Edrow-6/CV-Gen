<?php
use eftec\bladeone\BladeOne;

function view($view_path, $vars = []) {

    // RENDU DU FRONTEND VIA BLADE.
    $views = __DIR__.'/../views';
    $cache = __DIR__.'/../cache';
    $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG permet de localiser les problèmes.

    $blade->addAssetDict('css/tailwind.css', 'assets/css/tailwind.css');

    return $blade->run($view_path, $vars);
}