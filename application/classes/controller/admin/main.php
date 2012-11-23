<?php defined('SYSPATH') or die('No direct script access.');

 abstract class Controller_Admin_Main extends Maincontroller {
     
     var $_sidebar_item_selected;     

        public function before()
        {
            parent::before();

            // Установка глобальных переменных
            View::bind_global('styles', $template_styles); // Таблицы стилей
            View::bind_global('scripts', $template_scripts); // Таблицы стилей
            View::bind_global('text_scripts', $text_scripts); // Таблицы стилей
            $template_styles = $template_scripts = $text_scripts = array();

            //Загрузка верхнего меню
            $header['page_actions'] = View::factory('admin/template/page_actions');
            $this->template->header = View::factory('admin/template/header', $header);

            //Загрузка левого меню (sidebar)
            $config_site = Kohana::$config->load('admin_sidebar');
            $sidebar['navs'] = $config_site->get('navs');
            $this->template->sidebar =  View::factory('template/sidebar', $sidebar)
                    ->bind('sidebar_item_selected', $this->_sidebar_item_selected);

            // Загрузка таблиц стилей
            $template_styles = array( 'all', 'colors/blue', 'add', 'highslide/highslide'); 

            // Загрузка скриптов
            $this->template->scripts = array('highslide/highslide-with-html.min'); 

            // Загрузка скриптов типа text
            $this->template->text_scripts = Kohana::$config->load('script_texts');
            
        }
        
        function set_sidebar_item_selected($sidebar_item_selected)
        {
            $this->_sidebar_item_selected = $sidebar_item_selected;
        }
}
