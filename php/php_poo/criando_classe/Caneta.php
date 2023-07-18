<?php

class Caneta
{

    public $modelo;
    private $ponta;
    private $cor;
    public $tampada;

    function tampar()
    {
        $this->tampada = true;
    }

    public function __construct() //pode colocar o mesmo nome da class.
    {
        $this->cor = "vermelha";
        $this->tampar();
    }


    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($p)
    {
        $this->ponta = $p;
    }

    // public function rabiscar()
    // {
    //     if ($this->tampada == true) {
    //         echo "Erro, caneta tampada";
    //     } else {
    //         echo "Rabiscando";
    //     }
    // }


    // function destampar()
    // {
    //     $this->tampada = false;
    // }


}
