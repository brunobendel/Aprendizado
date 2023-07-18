<?php

namespace App\Http;

class Request
{
    private $httpMethod;

    private $uri;

    private $queryParams = [];

    private $postVars = [];

    private $headers = [];

    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }
    //Método responsavel por retornar o método HTTP da requisição
    public function getHttpMethod(){
        return $this->httpMethod;
    }
    //Método responsavel por retornar a URI da requisição
    public function getUri(){
        return $this->uri;
    }
    //Método responsavel por retornar os headers da requisição
    public function geHeaders(){
        return $this->headers;
    }
    //Método responsavel por retornar os parametros da URL da requisição
    public function getQueryParams(){
        return $this->queryParams;
    }
    //Método responsavel por retornar as variaveis Post da requisição
    public function getPostVars(){
        return $this->postVars;
    }
    
}
