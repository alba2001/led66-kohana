<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

	public $template = 'login';
	
	public function action_index()
	{
            $auth = Auth::instance();
            $data = array();

            if($auth->logged_in())
            {
                    Request::initial()->redirect('');
            }
            else
            {
                    if(isset($_POST['btnsubmit']))
                    {
                            $login = Arr::get($_POST, 'login', '');
                            $password = Arr::get($_POST, 'password', '');

                            if($auth->login($login, $password))
                            {			
                                    Request::initial()->redirect('');
                            }
                            else
                            {
                                    $data["error"] = TRUE;
                            }
                    }
            }
            $this->template->content =  View::factory('user/login', $data);
	}
	
	public function action_reg()
	{
            $post = array();
            if(isset($_POST['btnsubmit']))
            {
                $post['username'] = Arr::get($_POST, 'username', '');
                $post['email']    = Arr::get($_POST, 'email', '');
                $post['invite']   = Arr::get($_POST, 'invite', '');
                $register = new Model_Register();
                if ( ! $register->reg() )
                {
                    $post['errors'] = $register->errors;
                    unset ($_POST);
                }
                else
                {
                    $post['regok'] = TRUE;
                    Request::initial()->redirect('');
                }
            }

            $this->template->content =  View::factory('user/register', $post);
	}
	
	public function action_hpass()
	{
		$auth = Auth::instance();
		$this->template->content = $auth->hash_password('11111111');
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		Request::initial()->redirect('');
	}

        public function action_hochuvspomnit()
	{
            $data = array();

            if(isset($_POST['btnsubmit']))
            {

                $email = Arr::get($_POST, 'email', '');

                $register = new Model_Register();

                if($register->hochuNoviyParol($email))
                {
                    $data["ok"] = "";
                }
                else
                {
                    $data["error"] = "";
                }
            }
            $this->template->content =  View::factory('rempassview', $data);
        }

        public function action_checkcode($code)
         {
            $data = array();

            $register = new Model_Register();

            if($register->obnovlenieparolia($code))
            {
                $data["ok"] = "";
            }
            else
            {
                $data["error"] = "";
            }
             $this->template->content =  View::factory('checkcodeview', $data);
         }

} // End Welcome
