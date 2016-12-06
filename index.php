<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php

/**
 * Chargement Automatique de Classe en PHP par Composer
 */
include "vendor/autoload.php";

use App\Voiture;
use App\Moto;
use App\Vehicule;
use App\Renault;

$peugeot = new Renault("206", "Peugeot");
$moto = new Moto("YBR", "Yamaha");

$tab = [
        'one' => ['kjdh','iusDHIS','qosdifjsq'],
        'two' => [
            $moto,
            $peugeot
        ]
];

echo beautiful($peugeot->getModele());

$peugeot->setRoues(['one','two','three','four']);
dump($peugeot, $moto, $tab);


//$peugeot->assemblagePneus(['Dunlop', 'Michelin', 'Pirelli', 'Kleber']);
//
//
//$peugeot->sendMail("toto@gmail.com","Jolie Email", "Blablabla..");
//
//$clio = new Renault("Clio 4", "Renault");
//$moto = new Moto("YBR", "Yamaha");
//
//
//$peugeot->reparerPneus($moto, ['pneus avant', 'pneus arriere']);
//
//echo Vehicule::PAYS;
//
//
//echo Moto::PAYS;
//
//echo Voiture::getNb();
//
//
//echo "<pre>";
//var_dump($peugeot);
//echo "</pre>";


// capture personnaliser d'Exception
//  try{
//
//  } catch(VisibleException $e) {
//
//  } catch(Exception $e){
//
//  }



