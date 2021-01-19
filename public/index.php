<?php

/*
|--------------------------------------------------------------------------
| Enregistrer l'autoloader
|--------------------------------------------------------------------------
|
| Composer fournit un chargeur de classe pratique, généré automatiquement pour 
| cette application. Il suffit de l'utiliser ! Nous l'utiliserons simplement 
| dans le script ici pour ne pas avoir à charger manuellement nos classes.
|
*/
require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Exectuer l'application
|--------------------------------------------------------------------------
|
| Une fois que nous avons l'application, nous pouvons traiter la demande entrante
| en utilisant le noyau HTTP de l'application. Ensuite, nous renverrons la réponse
| au navigateur de ce client, lui permettant ainsi de profiter de notre application.
|
*/
require __DIR__.'/../bootstrap/app.php';

