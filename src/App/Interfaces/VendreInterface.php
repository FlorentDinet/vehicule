<?php


namespace App\Interfaces;


/**
 * Interface VendreInterface
 * @package App\Interfaces
 */
interface VendreInterface{

    /**
     * @param $prix
     * @param $dateDispo
     * @return mixed
     */
    public function seVendre($prix,\DateTime $dateDispo);



}