<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\model\Entity\Organization;

class Home extends Page
{

    /**
     * @return string
     */
    public static function getHome()
    {

        $obOrganization = new Organization;


        $content = View::render('pages/home', [
            'name' => "$obOrganization->name",
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);

        return parent::getPage('WEV - Canal - Home ', $content);
    }
} 