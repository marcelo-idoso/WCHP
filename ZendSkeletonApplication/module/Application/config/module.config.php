<?php

namespace Application;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/home',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                        'module'     => 'application',
                    ),
                ),
            ),

            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        'controller'    => 'Index',
                        'action'        => 'index',
                        '__NAMESPACE__' => 'Application\Controller',
                        'module'     => 'application'
                    ),
                    
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                        'child_routes' => array( //permite mandar dados pela url 
                            'wildcard' => array(
                                'type' => 'Wildcard'
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator'    => 'Zend\I18n\Translator\TranslatorServiceFactory',
            
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController'
        ),
    ),
    'module_layouts' => array(
        'Application' => 'layout/layout.phtml',
    ),
    'view_manager' => array(
        'not_found_template'       => 'error/404',
        'template_map' => array(
            
            'error/404'         => __DIR__ . '/../view/application/error/40.phtml',
        ),
        
           'template_path_stack' => array(
           'application' => __DIR__ . '/../view',
        ),
    ),
    
    
    'navigation' => array(
        'default'   => array(
            array(
                'label'     => 'Painel',
                'router'    => 'painel'
            )
        ),
    ),
    
);
