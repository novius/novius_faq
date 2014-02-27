<?php
return array(
    'name'    => 'FAQ',
    'version' => '1',
    'provider' => array(
        'name' => 'Novius',
    ),
    'namespace' => "Novius\Faq",
    'permission' => array(
    ),
    'icons' => array( //@todo: to be defined
        64 => 'static/apps/novius_faq/img/64/icon.png',
        32 => 'static/apps/novius_faq/img/32/icon.png',
        16 => 'static/apps/novius_faq/img/16/icon.png',
    ),
    'launchers' => array(
        'FAQ::Faq' => array(
            'name'    => 'FAQ', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/novius_faq/faq/appdesk', // url to load
                ),
            ),
        ),
    ),
    // Enhancer configuration sample
    'enhancers' => array(
        'faq_faq' => array( // key must be defined
            'title' => 'FAQ',
            'desc'  => '',
            'urlEnhancer' => 'novius_faq/front/faq/main',
        ),
    ),
);
