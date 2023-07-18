<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entyti\Organization;


class Home extends page

{   //Método responsavel por retornar o conteudo da pagina generica
    public static function getHome()
    {
        $obOrganization = new Organization;

        //View  da Home
        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
            'size' => '1,8 metros',
            'yearsOld' => $obOrganization->yearsOld
        ]);

        //Retorna a View da Pagina 
        return parent::getPage('My First web site using MVC', $content);
    }
}
