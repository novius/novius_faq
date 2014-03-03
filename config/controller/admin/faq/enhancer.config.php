<?php
$options = \Arr::assoc_to_keyval(\Novius\Faq\Model_Faq::find('all'), 'faq_id', 'faq_title');
$config = array(
    'fields' => array(
        'faq_id' => array(
            'label' => __('Choose a FAQ to display'),
            'form' => array(
                'type' => 'select',
                'options' => $options
            ),
        ),
    ),
);
$front_config = \Config::load('novius_faq::config', true);
if (empty($front_config['ques_order'])) {
    $config['fields']['order_by'] = array(
        'label' => __('Order questions alphabetically ?'),
        'form' => array(
            'type' => 'checkbox',
            'value' => 1,
        ),
    );
}
return $config;