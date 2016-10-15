<?php

return array(
    'controllers' => array(//add module controllers
        'invokables' => array(
            'Site\Controller\Index' => 'Site\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'site' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/site',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Site\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                        'module'        => 'site'
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

    'module_layout' => array(
        'Site' => 'layout/layout_site.phtml'
    ),
    'view_manager' => array( 
        'template_path_stack' => array(
            'site' => __DIR__ . '/../view',
        ),
    ),
);
