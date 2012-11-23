<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Main{

    var $_page = array();
    var $_title = 'Мои учетные данные';
    var $_header = 'Мои учетные данные';
    
	public function action_index()
	{
            $model = new Model_Userinfo();
            if(isset($_POST['commit']))
            {
                $user = $model->user_save();
                if (isset($user['ok']))
                {
                    $this->_page['start_bar'] = '<span style="color: green">Данные успешно сохранены!</span>';
                }
                else
                {
                    $this->_page['start_bar'] = '<span style="color: red">Была проблема при сохранении данных!</span>';
                }
            }
            else
            {
                $user = $model->user_info();
            }
            $this->_page['content'] =  View::factory('user/form_my_info', $user);
            $this->_page['page_header'] =  $this->_header;
            $this->template->title = $this->_title;
            $this->template->content =  View::factory('template/page', $this->_page);
	}
}
