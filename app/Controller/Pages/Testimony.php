<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Testimony extends Page
{

    /**
     * @return string
     */
    public static function getTestimonies()
    {
        $content = View::render('pages/Testimonies', [

        ]);

        return parent::getPage('DEPOIMENTOS', $content);
    }
}