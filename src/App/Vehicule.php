<?php

namespace App;


use App\Exception\VisibleException;
use App\Interfaces\VendreInterface;
use App\Interfaces\VisibleInterface;
use App\Traits\MailTrait;
use \DateTime;

/**
 * Class Vehicule
 * @package App
 */
abstract class Vehicule implements VisibleInterface {

    /**
     *
     */
    use MailTrait;


    /**
     * @var
     */
    protected $modele;

    /**
     * @var
     */
    protected $marque;


    /**
     * @var
     */
    protected $dateCreated;


    /**
     * @var
     */
    protected $enVente;

    /**
     * @var
     */
    protected $roues;


    /**
     * @var
     */
    protected static $nb = 0;

    /**
     *
     */
    const PAYS = "France";


    /**
     * Vehicule constructor.
     * @param $modele
     * @param $marque
     */
    public function __construct($modele, $marque)
    {

        dump($modele);
        $this->modele = $modele;
        $this->marque = $marque;
        $this->dateCreated = new DateTime('now');
        $this-> enVente = true;

        self::$nb++;
    }



    /**
     * @param array $pneus
     * @return mixed
     */
    abstract function assemblagePneus(array $pneus);


    /**
     * @param $nomMoteur
     * @param $cylindree
     * @return mixed
     */
    abstract function montageMoteur($nomMoteur, $cylindree);


    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return mixed
     */
    public function getEnVente()
    {
        return $this->enVente;
    }

    /**
     * @param mixed $enVente
     */
    public function setEnVente($enVente)
    {
        $this->enVente = $enVente;
    }

    /**
     * @return mixed
     */
    public function getRoues()
    {
        return $this->roues;
    }

    /**
     * @param mixed $roues
     */
    public function setRoues($roues)
    {
        $this->roues = $roues;
    }

    /**
     * @return mixed
     */
    public static function getNb()
    {
        return self::$nb;
    }

    /**
     * @param mixed $nb
     */
    public static function setNb($nb)
    {
        self::$nb = $nb;
    }

    /**
     * @param $taux
     * @param VendreInterface $obj
     */
    public static function promotion($taux, VendreInterface $obj){
        if(false){
            throw new VisibleException();
        }
        $obj->seVendre(10 * $taux, new DateTime('now'));

    }

    public function modifyVisibility($bool){
        // modify visibility...
    }


}

