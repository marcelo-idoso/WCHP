<?php
namespace Painel;

return array(
    'controllers' => array(
        'invokables' => array(
            'Painel\Controller\Painel' => 'Painel\Controller\PainelController',
        ),
    ),
    // Configuração das Rotas 
    'router' => array(
        'routes' => array(
            'painel' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/painel[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Painel\Controller\Painel',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),// Fim Configuração das Rotas
    'view_manager' => array(
        'template_path_stack' => array(
            'painel' => __DIR__ . '/../view',
        ),
    ),
    /* configuração do doctrine */
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ),
            ),
        ),
    ),/* Fim configuração do doctrine */
);
