<?php
namespace Site;

return array(
    'controllers' => array(//add module controllers
        'invokables' => array(
            'Site\Controller\Index' => 'Site\Controller\IndexController',
            'Site\Controller\Contato' => 'Site\Controller\ContatoController',
            'Site\Controller\Empresa' => 'Site\Controller\EmpresaController',
            'Site\Controller\Servico' => 'Site\Controller\ServicoController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'contato' => array(
                'type'      => 'Literal',
                'options'   => array(
                    'route' => '/contato',
                    'defaults' => array(                       
                        'controller'    => 'Site\Controller\Contato',
                        'action'        => 'contato',
                        'module'        => 'site'
                    ),
                ),
            ),
            'empresa' => array(
                'type'      => 'Literal',
                'options'   => array(
                    'route' => '/empresa',
                    'defaults' => array(                       
                        'controller'    => 'Site\Controller\Empresa',
                        'action'        => 'empresa',
                        'module'        => 'site'
                    ),
                ),
            ),
            'servico' => array(
                'type'      => 'Literal',
                'options'   => array(
                    'route' => '/servico',
                    'defaults' => array(                       
                        'controller'    => 'Site\Controller\Servico',
                        'action'        => 'servico',
                        'module'        => 'site'
                    ),
                ),
            ),
            'site' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(                       
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'index',
                        'module'        => 'site'
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'pt_BR',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),

    'module_layout' => array(
        'Site' => 'layout/layout_site.phtml'
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'error/404'                     => __DIR__ . '/../view/site/error/404.phtml',
            
            'error/index'                   => __DIR__ . '/../view/site/error/index.phtml',
        ), 
        'template_path_stack' => array(
             __DIR__ . '/../view/',
        ),
    ),
);