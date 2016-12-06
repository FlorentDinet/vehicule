<?php
/**
 * Created by PhpStorm.
 * User: boyer
 * Date: 06/12/16
 * Time: 10:24
 */

namespace App;

/**
 * Class Renault
 * @package App
 */
final class Renault extends Voiture
{

    protected $prix;

    protected $garantie = 5;

    /**
     *
     */
    final function renouvellementGarantie(){
        // ...
    }

}