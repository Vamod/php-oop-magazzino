<?php
require_once 'classes/Libro.php';
require_once 'classes/Tascabile.php';
require_once 'classes/EdizioneLimitata.php';

$libro1 = new Libro('Harry Potter e la pietra filosofale', '1w2e3r4');
$libro1->setNumberOfCopy(998);
echo $libro1->getNumberOfCopy();

var_dump($libro1);


$libro2 = new Tascabile('Il vecchio e il mare', '2er4t4');
$libro2->prezzo = 30;
$prezzoScontato = $libro2->calcolaPrezzoScontato(9);
echo "Il prezzo scontato del libro è $prezzoScontato";
var_dump($libro2);



$libro3 = new EdizioneLimitata('Divina Commedia', '3refgrr','1a', '1901' , 'Illustrazioni Gustave Dorè');

$libro3->prezzo = 15000;
$libro3->setNumberOfCopy(1);
$libro3->setPosition('25B');
$posLibro3 = $libro3->getPosition();
echo "La posizione del libro è: $posLibro3".'<br>';
echo $libro3->getNumberOfCopy();
var_dump($libro3);
