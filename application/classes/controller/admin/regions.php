<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Regions extends Controller_Admin_Main{
    
    var $_header = 'Регионы';
    var $_title = 'Регионы';
    var $_page = array();

	public function action_index()
	{
            // Выборка списка регионов из БД
            $regions = DB::select()->from('regions')->execute();

            // Вывод основного содержания таблицы
            $this->_page['content'] =  View::factory('admin/regions/page')
                    ->bind('regions', $regions);

            // Заголовок сайта и заголовок основной страницы
            $this->_page['page_header'] =  $this->_header;
            $this->template->title = $this->_title;

            // Из конфига выбираем кнопки тулбара и выводим их на страницу
            $buttons = Kohana::$config->load('buttons')->get('regions');
            $this->_page['page_toolbar'] =  View::factory('admin/regions/page_toolbar')
                    ->bind('buttons', $buttons);

            // Вывод всплывающего окна для добавления нового региона
            $this->_page['modal_window_content'] =  View::factory('admin/regions/add_region');

            // Вывод всего содержания страницы
            $this->template->content =  View::factory('template/page', $this->_page);

            // Установка активного элемента сайдбара
            parent::set_sidebar_item_selected('regions');

	}
	public function action_add()
        {
            $model = new Model_Admin_Region();
            $content = '<div class="left">';
            if ( ! $model->add_region())
            {
                $errors = $model->errors;
                foreach ($errors as $key => $value) {
                    $content .= '<span class="red font12">'.$value.'</span></br>';
                }
            }
            else
            {
                $content .= '<span class="green font12">Регион добавлен успешно</span>';
            }
                $content .= '</div>';
            $this->_page['start_bar'] = $content;
            $this->action_index();
        }
        public function action_delete()
        {
            $model = new Model_Admin_Region();
            $content = '<div class="left">';
            if ( ! $model->remove_regions())
            {
                $errors = $model->errors;
                foreach ($errors as $key => $value) {
                    $content .= '<span class="red font12">'.$value.'</span></br>';
                }
            }
            else
            {
                $content .= '<span class="green font12">Регионы удалены успешно</span>';
            }
                $content .= '</div>';
            $this->_page['start_bar'] = $content;
            $this->action_index();
        }
        public function action_edit()
        {
            $model = new Model_Admin_Region();
            $content = '<div class="left">';
            if ( ! $model->edit_region())
            {
                $errors = $model->errors;
                foreach ($errors as $key => $value) {
                    $content .= '<span class="red font12">'.$value.'</span></br>';
                }
            }
            else
            {
                $content .= '<span class="green font12">Регион обновлен успешно</span>';
            }
                $content .= '</div>';
            $this->_page['start_bar'] = $content;
            $this->action_index();
        }
}