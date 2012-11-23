<?php defined('SYSPATH') or die('No direct script access.');

 abstract class Maincontroller extends Controller_Template {

     	public $template = 'template/main_template';

        private function _init_vars()
        {
            $config_site = Kohana::$config->load('config_site');
            $vars['charset']     = $config_site->get('charset');
            $vars['title']       = $config_site->get('title');;
            $vars['keywords']    = $config_site->get('keywords');;
            $vars['description'] = $config_site->get('description');;
            return $vars;
        }

        public function before()	
	{
            parent::before();
            $init_vars = $this->_init_vars();
            foreach ($init_vars as $key => $value) 
            {
                $this->template->set($key, $value);
            }

            $auth = Auth::instance();
//		if( ! $auth->logged_in())
//                {
//                    $request = Request::factory('auth');
//                    Request::initial();
//                }
            if( ! $auth->logged_in())
            {
                Request::initial()->redirect('auth');
            }
//            return parent::before();
	}
}

