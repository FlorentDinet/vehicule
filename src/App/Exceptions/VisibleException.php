<?php


namespace App\Exception;


use Exception;

class VisibleException extends \Exception {

    /**
     * VisibleException constructor.
     */
    public function __construct()
    {
        $message = "L'objet est pas visible";
        $code = 500;
        parent::__construct($message, $code);
    }


}







