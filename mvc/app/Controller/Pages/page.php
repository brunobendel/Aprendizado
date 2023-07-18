<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class page
{

    private static function getHeader()
    {
        return View::render('pages/header');
    }

    //Método responsavel por retornar o conteudo da pagina generica
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter(),
        ]);
    }

    private static function getFooter()
    {
        return View::render('pages/footer');
    }
}
