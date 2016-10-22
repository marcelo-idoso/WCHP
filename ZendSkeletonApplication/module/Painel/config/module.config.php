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
                'type' => 'literal',
                'options' => array(
                    'route' => '/painel',
                    'defaults' => array(
                        'controller' => 'Painel\Controller\Painel',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
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
