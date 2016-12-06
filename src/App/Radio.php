<?php

namespace App;


use App\Interfaces\VendreInterface;

/**
 * Class Radio
 * @package App
 */
class Radio  implements VendreInterface {


    public function seVendre($prix, \DateTime $dateDispo)
    {
        if($prix < 10){
            throw new \Exception('Trop peu chere...');
        }

        $now = new \DateTime('now');

        return "vendue";
    }


}