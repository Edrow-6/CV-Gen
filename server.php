<?php

/**
 * CV-Gen - Générateur de CV
 *
 * @package  CV-Gen
 * @author   Yaceki <projet@bts.sio>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

/* 
| Ce fichier nous permet d'émuler la fonctionnalité "mod_rewrite" d'Apache à 
| partir du serveur web PHP intégré. Cela permet de tester facilement 
| l'application sans avoir à installer un "vrai" logiciel de serveur web ici.
 */
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
