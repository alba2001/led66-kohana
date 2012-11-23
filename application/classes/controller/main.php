<?php defined('SYSPATH') or die('No direct script access.');

 abstract class Controller_Main extends Maincontroller {
     
     var $_sidebar_item_selected;  

        public function before()
        {
            parent::before();
            // Установка глобальных переменных
            View::bind_global('template_styles', $template_styles);
            View::bind_global('scripts', $template_scripts); // Скрипты
            View::bind_global('text_scripts', $text_scripts); // Тексты скриптов
                    
            //Загрузка верхнего меню
            $page_actions['balloon_content'] = View::factory('people/balloon_content');
            $header['page_actions'] = View::factory('template/page_actions', $page_actions);
            $this->template->header = View::factory('template/header', $header);

            //Загрузка левого меню (sidebar)
            $config_site = Kohana::$config->load('sidebar');
            $sidebar['navs'] = $config_site->get('navs');
            $this->template->sidebar =  View::factory('template/sidebar', $sidebar)
                    ->bind('sidebar_item_selected', $this->_sidebar_item_selected);

            // Загрузка таблиц стилей
            $template_styles = array( 'all', 'colors/blue', 'highslide/highslide'); 
            $this->template->styles = $template_styles; 

            // Загрузка скриптов
            $this->template->scripts = array('highslide/highslide-with-html.min'); 

            // Загрузка скриптов типа text
            $this->template->text_scripts = Kohana::$config->load('script_texts');
            
            // Установка активного элемента сайдбара
            $sidebar_item_selected = 'zajavki';
        }
        //Установка активного пункта меню в сайтбаре
        function set_sidebar_item_selected($sidebar_item_selected)
        {
            $this->_sidebar_item_selected = $sidebar_item_selected;
        }

}
