<?php

class Banco
{

    public $numconta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = "falso";
    }

    public function getNumconta()
    {
        return $this->numconta;
    }

    public function setNumconta($n)
    {
        $this->numconta = $n;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($s)
    {
        $this->status = $s;
    }

    public function AbrirConta($t)
    {
        $this->setTipo($t);
        $this->setNumconta(0001);
        $this->setStatus("Verdadeiro");

        if ($t == "CC") {
            $this->saldo += 50;
        } elseif ($t == "CP") {
            $this->saldo += 150;
        }
    }

    public function FecharConta()
    {
        if ($this->saldo > 0) {
            echo ("Conta com saldo existente");
        } elseif ($this->saldo < 0) {
            echo ("Debito em conta");
        } elseif ($this->saldo == 0) {
            $this->setStatus("Falso");
            echo ("Sua conta foi fechada com sucesso.");
        }
    }
    function Depositar($v)
    {
        if ($this->status == "Verdadeiro") {
            $this->saldo += $v;
        } else
            echo ("Conta não está aberta.");
    }

    function Sacar($s)
    {
        if ($s >= $this->saldo) {
            $this->saldo = $this->saldo - $s;
        }
    }

    function Mensalidade()
    {
        $this->saldo = $this->saldo - 20;
    }
}
