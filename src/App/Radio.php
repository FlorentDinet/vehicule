<?php

namespace App;


use App\Interfaces\VendreInterface;
use App\Interfaces\VisibleInterface;
use App\Traits\MailTrait;

/**
 * Class Radio
 * @package App
 */
class Radio  implements VendreInterface, VisibleInterface {


    /**
     *
     */
    use MailTrait;


    public function seVendre($prix, \DateTime $dateDispo)
    {
        if($prix < 10){
            throw new \Exception('Trop peu chere...');
        }

        $now = new \DateTime('now');

        return "vendue";
    }


    public function modifyVisibility($bool)
    {
        if($bool == true){
            return "Radio à vendre";
        }else{
            return "Radio indisponible";
        }
    }

}