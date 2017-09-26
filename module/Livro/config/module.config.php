<?php
/**
 * Created by PhpStorm.
 * User: wagne
 * Date: 25/09/2017
 * Time: 21:31
 */

namespace Livro;

use Zend\ServiceManager\Factory\InvokableFactory;

return[

    'controllers' => [
        'factories' => [
            Controller\LivroController::class => InvokableFactory::class
        ]
    ],

    'router' => [
        'routes' => [
            'livro' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/books',
                    'defaults' => [
                        'controller' => Controller\LivroController::class,
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            'livro' => __DIR__ . "/../view"
        ]
    ]

];