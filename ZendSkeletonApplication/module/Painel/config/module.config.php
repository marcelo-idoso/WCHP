<?php
namespace Painel;

return array(
    'controllers' => array(
        'invokables' => array(
            'Painel\Controller\Painel'      => 'Painel\Controller\PainelController',
            'Painel\Controller\CadEmpresa'  => 'Painel\Controller\CadEmpresaController',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
    // Configuração das Rotas 
    'router' => array(
        'routes' => array(
            'cadempresa' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/cadempresa',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Painel\Controller',
                        'controller' => 'Painel\Controller\CadEmpresa',
                        'action'     => 'index',
                        'module'     => 'painel',
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
                )
            ),
            'painel' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/painel',
                    'defaults' => array(
                        'controller' => 'Painel\Controller\Painel',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),// Fim Configuração das Rotas
    'module_layout' => array(
        'Painel' => 'layout/layout_painel.phtml'
    ),
    'view_manager' => array( 
        'template_path_stack' => array(
             __DIR__ . '/../view',
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
    

    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'painel',
                'icon'  => 'fa fa-dashboard',
                'pages' => array(
                    array(
                        'label'     => 'Cadastro da Empresa',
                        'route'     => 'cadempresa',
                        'abstrac'   => 'TEste' ,
                        'pages'     => array(
                                array(
                                    'label'     => 'Editar',
                                    'route'     => 'cadempresa/editar2',
                                    'action'    => 'editar'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
        
);
