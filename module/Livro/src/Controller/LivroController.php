<?php
/**
 * Created by PhpStorm.
 * User: wagne
 * Date: 25/09/2017
 * Time: 21:36
 */

namespace Livro\Controller;


use Zend\Mvc\Console\View\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class LivroController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

}