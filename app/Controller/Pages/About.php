<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\model\Entity\Organization;

class About extends Page
{

    /**
     * @return string
     */
    public static function getAbout()
    {

        $obOrganization = new Organization;


        $content = View::render('pages/about', [
            'name' => "$obOrganization->name",
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);

        return parent::getPage('SOBRE', $content);
    }
} 