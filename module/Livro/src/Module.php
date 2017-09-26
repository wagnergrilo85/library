<?php
/**
 * Created by PhpStorm.
 * User: wagne
 * Date: 25/09/2017
 * Time: 21:35
 */

namespace Livro;


class Module
{

    public function getConfig()
    {
        return include __DIR__ . "/../config/module.config.php";
    }

}