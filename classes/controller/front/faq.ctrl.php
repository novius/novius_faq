<?php

namespace Novius\Faq;

use Nos\Controller_Front_Application;

use View;

class Controller_Front_Faq extends Controller_Front_Application
{
    public $page_from = false;

    public function action_main($args = array())
    {
        $this->page_from = $this->main_controller->getPage();

        $enhancer_url = $this->main_controller->getEnhancerUrl();

        if (!empty($enhancer_url)) {
            $segments = explode('/', $enhancer_url);

            if (!empty($segments[0])) {
                return $this->display_faq($segments[0]);
            }

            throw new \Nos\NotFoundException();
        }

        return $this->display_list_faq();
    }

    protected function display_list_faq()
    {
        $params = array(
            'where' => array(),
            'order_by' => array(
                'faq_id' => 'ASC'
            ),
            'limit' => 10
        );

        $params['where'][] = array('faq_context', '=', $this->page_from->page_context);
        $params['where'][] = array('published', true);

        $faq_list =  Model_Faq::find('all', $params);

        return \View::forge('front/faq_list', array(
            'faq_list' => $faq_list,
        ), false);
    }


    protected function display_faq($virtual_name)
    {
        $faq = Model_Faq::find('first', array(
            'where' => array(
                array('faq_virtual_name', '=', $virtual_name)
            )
        ));

        if (empty($faq)) {
            throw new \Nos\NotFoundException();
        }

        $this->main_controller->setTitle($faq->faq_title);
        //$this->main_controller->setMetaDescription($faq->faq_title);

        return \View::forge('front/faq_item', array(
            'faq' => $faq,
        ), false);
    }

    public static function getUrlEnhanced($params = array())
    {
        $item = \Arr::get($params, 'item', false);
        if ($item) {
            // url built according to $item'class
            switch (get_class($item)) {
                case 'Novius\FaqModel_Faq' :
                    return $item->virtual_name().'.html';
                    break;
            }
        }

        return false;
    }
}