<?php
/* Questo sarà il nostro controller */

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, []);
$template = $twig->load('contacts.html.twig');
$houses = [];
// Estraggo i dati dal db e li metto in una variabile $houses
echo $template->render([
	// Array associativo:
	'menu' => [
		[ 'href'=> "index.php", "text"=>"Homepage", "active" => false ],
		[ 'href'=> "contacts.php", "text"=>"Contacts", "active" => true ],
		[ 'href'=> "about-us.php", "text"=>"About Us", "active" => false ]
	],
]);
?>