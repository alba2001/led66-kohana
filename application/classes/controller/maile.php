<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Maile extends Controller_Main{

    var $_mailetapes_id = 1;
    var $_page = array();
    var $_title = 'Заявки на расчет';
    var $_header = 'Заявки на расчет';
    var $_sidebar_item_selected = 'zajavki';
    
	public function action_index()
	{
            $data = array();
            $model = new Model_Orm_Maile();
            $data['mailes'] = $model->getData($this->_mailetapes_id);
            $this->_page['content'] =  View::factory('maile/mailes', $data);
            $this->_page['page_header'] =  $this->_header;
            $this->template->title = $this->_title;
            $this->template->content =  View::factory('template/page', $this->_page);
            // Установка активного элемента сайдбара
            parent::set_sidebar_item_selected($this->_sidebar_item_selected);

	}

        //Выводим заявки
        public function action_zajavki()
        {
            $this->_title = $this->_header = 'Заявки на расчет';
            $this->_sidebar_item_selected = 'zajavki';
            $this->_mailetapes_id = 1;
            $this->action_index();
        }
        //Выводим заказы
        public function action_zakazi()
        {
            $this->_title = $this->_header = 'Заказы из корзины';
            $this->_sidebar_item_selected = 'zakazi';
            $this->_mailetapes_id = 2;
            $this->action_index();
        }

        //Выводим детали письма
        public function action_desc()
        {
            $id = $this->request->param('id');
            $model = new Model_Maile();
            $maile = $model->get_maile($id);
            $page['page_header'] = 'Письмо № '.$maile->mlnum;
            $mlbody = $model->get_maile_descs( &$maile);
            $page['content'] = View::factory('maile/desc')
                    ->bind('mlbody',$mlbody);
            $this->template->title = $page['page_header'];
            $this->template->content =  View::factory('template/page', $page);
            switch ($maile->mailetapes_id)
            {
                case 1 :
                    $this->_sidebar_item_selected = 'zajavki';
                    break;
                case 2 :
                    $this->_sidebar_item_selected = 'zakazi';
                    break;
            }
        }
}
