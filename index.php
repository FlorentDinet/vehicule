<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php

include "src/App/Vehicule.php";
include "src/App/Voiture.php";
include "src/App/Moto.php";
include "src/App/Renault.php";

use App\Voiture;
use App\Moto;
use App\Vehicule;
use App\Renault;

$peugeot = new Renault("206", "Peugeot");
$peugeot->assemblagePneus(['Dunlop', 'Michelin', 'Pirelli', 'Kleber']);

$clio = new Renault("Clio 4", "Renault");
$moto = new Moto("YBR", "Yamaha");


$peugeot->reparerPneus($moto, ['pneus avant', 'pneus arriere']);

echo Vehicule::PAYS;


echo Moto::PAYS;

echo Voiture::getNb();


echo "<pre>";
var_dump($peugeot);
echo "</pre>";
