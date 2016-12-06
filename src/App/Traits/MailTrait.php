<?php


namespace App\Traits;

/**
 * Class MailTrait
 * @package App
 */
trait MailTrait{


    /**
     * @param $destinataire
     * @param $sujet
     * @param $corps
     * @return string
     */
    public function sendMail($destinataire, $sujet,$corps){
        return "J'envois un email au sujet de {$sujet}";
    }


}



