<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_Main{
    
    var $_header = 'Пользователи';
    var $_title = 'Пользователи';

	public function action_index()
	{
            $data = array();
            $model = new Model_Orm_User();
            $page['users'] = DB::select()->from('users')->execute();
            $this->_page['content'] =  View::factory('admin/users', $page);
            $this->_page['page_header'] =  $this->_header;


            // Из конфига выбираем кнопки тулбара и выводим их на страницу
            $page_toolbar['buttons'] = Kohana::$config->load('buttons')->get('regions');
            $this->_page['page_toolbar'] =  View::factory('admin/regions/page_toolbar', $page_toolbar);

            // Вывод всплывающего окна для добавления нового региона
            $this->_page['modal_window_content'] =  View::factory('admin/regions/add_region');

            $this->template->title = $this->_title;
            $this->template->content =  View::factory('template/page', $this->_page);

            // Установка активного элемента сайдбара
            parent::set_sidebar_item_selected('users');
	}
}
