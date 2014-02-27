<?php
return array(
    'controller_url'  => 'admin/novius_faq/faq/crud',
    'model' => 'Novius\Faq\Model_Faq',
    'layout' => array(
        'large' => true,
        'title' => 'faq_title',
        'content' => array(
            'faq' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('FAQ'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                                'wysiwygs->introduction->wysiwyg_text'
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'menu' => array(
            __('URL') => array('faq_virtual_name'),
        ),
    ),
    'fields' => array(
        'faq__id' => array (
            'label' => 'ID: ',
            'form' => array(
                'type' => 'hidden',
            ),
            'dont_save' => true,
        ),
        'faq_title' => array(
            'label' => __('Title'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'wysiwygs->introduction->wysiwyg_text' => array(
            'label' => __('Introduction'),
            'renderer' => 'Nos\Renderer_Wysiwyg',
            'template' => '{field}',
            'form' => array(
                'style' => 'width: 100%; height: 500px;',
            ),
        ),
        'faq_virtual_name' => array(
            'label' => __('URL: '),
            'renderer' => 'Nos\Renderer_Virtualname',
            'validation' => array(
                'required',
                'min_length' => array(2),
            ),
        ),
    )
);
