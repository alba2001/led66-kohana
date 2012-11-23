<?php defined('SYSPATH') or die('No direct script access.');

class Controller_People extends Controller_Main{

    var $_page = array();
    var $_title = 'Заявки на расчет';
    var $_header = 'Заявки на расчет';
    
	public function action_index()
	{
            $this->_page['page_header'] =  $this->_header;
            $this->template->title = $this->_title;
            $this->template->content =  View::factory('template/page', $this->_page);

	}

        //Форма добавить контакт
        public function action_contacts()
        {
            $new = array();
            $this->_page['content'] =  View::factory('people/contacts', $new);
            $this->_title = $this->_header = 'Мои контакты';
            $this->action_index();
        }
        //Форма добавить задачу
        public function action_tasks()
        {
            $tasks = array();
            $this->_page['content'] =  View::factory('people/tasks', $tasks);
            $this->_title = $this->_header = 'Мои задания';
            $this->action_index();
        }
}
