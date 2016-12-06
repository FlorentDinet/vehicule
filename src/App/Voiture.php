<?php
/**
 * Created by PhpStorm.
 * User: boyer
 * Date: 06/12/16
 * Time: 09:38
 */

namespace App;

/**
 * Class Voiture
 * @package App
 */
class Voiture extends Vehicule
{
    protected $sieges = [];

    protected $roues = 4;

    /**
     * Vehicule constructor.
     * @param $modele
     * @param $marque
     */
    public function __construct($modele, $marque)
    {
        parent::__construct($modele, $marque);

        self::$nb++;
    }


    public function faireUnDrift(){

    }

    /**
     * @param Vehicule $velicule
     */
    public function reparerPneus(Vehicule $velicule,array $pneus){
        $velicule->assemblagePneus($pneus);

        return "vehicule réparé";
    }

    /**
     * @param array $pneus
     * @return string
     * @throws \Exception
     */
    function assemblagePneus(array $pneus)
    {
        if(count($pneus) < 4){
            throw new \Exception('Ma Voiture doit comporter 4 pneus');
        }

        $this->pneus = $pneus;
        return "Pneus assemblés";
    }

    /**
     * @param $nomMoteur
     * @param $cylindree
     * @return string
     * @throws \Exception
     */
    function montageMoteur($nomMoteur, $cylindree)
    {
        if ($cylindree > 4 || empty($nomMoteur)) {
            throw new \Exception('Ma Voiture doit avoir un moteur valide');
        }
        return "Moteur assemblé";
    }
}