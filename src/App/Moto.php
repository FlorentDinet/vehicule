<?php
/**
 * Created by PhpStorm.
 * User: boyer
 * Date: 06/12/16
 * Time: 09:40
 */

namespace App;


use App\Interfaces\VendreInterface;

/**
 * Class Moto
 * @package App
 */
class Moto extends Vehicule implements VendreInterface
{

    protected $roues = 2;

    protected $guidon;


    public function faireUneLevee(){

    }

    function assemblagePneus(array $pneus)
    {
        if(count($pneus) != 2){
            throw new \Exception('Ma Moto doit comporter 2 pneus');
        }

        $this->pneus = $pneus;
        return "Pneus assemblés";
    }

    function montageMoteur($nomMoteur, $cylindree)
    {
        if ($cylindree > 2 || empty($nomMoteur)) {
            throw new \Exception('Ma Moteur doit avoir un moteur valide');
        }
        return "Moteur assemblé";
    }

    public function seVendre($prix, \DateTime $dateDispo)
    {
            if($prix < 3000){
                throw new \Exception('Trop peu chere...');
            }

             $now = new \DateTime('now');

            if($dateDispo > $now){
                throw new \Exception('Pas encore sortis');
            }

            return "vendu";
    }


}