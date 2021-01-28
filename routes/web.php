<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *  Ce fichier contient toutes les routes du projet
 */

$router->get('/', 'HomeController@index');

$router->get('/login', 'AuthController@login');
$router->get('/register', 'AuthController@register');