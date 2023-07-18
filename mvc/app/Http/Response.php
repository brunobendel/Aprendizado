<?php

namespace App\Http;

class Response{

    /*Codigo do Status Http
    */
    private $httpCode = 200;

    //Cabeçalho do Response
    private $headers = [];

    //Tipo de conteudo que está sendo retornado.
    private $contentType = 'text/html';
    
    //Conteudo do response
    private $content;

    //Método responsavel por iniciar as classes e definir os valores.
    public function __construct($httpCode,$content,$contentType = 'text/html'){
        $this->$httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
        
    }
}