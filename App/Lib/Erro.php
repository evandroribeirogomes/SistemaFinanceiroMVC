<?php

namespace App\Lib;

use Exception;

class Erro
{
    private $message;
    private $code;

    public function __construct(Exception $objetoException = Exception::class)
    {
        $this->code     = $objetoException->getCode();
        $this->message  = $objetoException->getMessage();
    }

    public function render()
    {
        $varMessage = $this->message;

        require_once PATH . '/App/Views/layouts/header.php';

        if(file_exists(PATH . "/App/Views/error/".$this->code.".php")){
            require_once PATH . "/App/Views/error/".$this->code.".php";
        }else{
            require_once PATH . "/App/Views/error/500.php";
        }
        
        require_once PATH . '/App/Views/layouts/footer.php';
        exit;
    }
}