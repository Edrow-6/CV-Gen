<?php
use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');
echo $blade->render('test', ['name' => 'Générateur de CV']);
?>