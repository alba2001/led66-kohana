<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_User extends ORM 
{

	protected $_table_name = 'users';
        
        var $_user; 

	public function rules()
	{
            $auth = Auth::instance();
            $this->_user = $auth->get_user();
		$rules =  array(
			'username' => array(
				array('not_empty'),
				array('max_length', array(':value', 32)),
				array('regex', array(':value', '/^[a-zA-Z0-9\-_.]++$/iD')),
				array(array($this, 'unique'), array(':value', 'username')),
			),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 6)),
				array('regex', array(':value', '/^[a-zA-Z0-9\-_.]++$/iD')),
                                array (array($this, 'confirm'), array
                                            (
                                             Arr::get($_POST, 'password')
                                            ,Arr::get($_POST, 'password_confirm')
                                            )
                                        )
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'unique'), array(':value', 'email')),
			),
		);
                if ( $this->_user )
                {
                    $rules['first_name'] = array (array('not_empty'));
                    $rules['last_name'] = array (array('not_empty'));
                }
                return $rules;
 	}
	
	public function unique($value, $field)
	{
            /**Если сохраняются данные текущего пользователя, 
             * то не проверять на уникальность
            **/
            if ( $this->_user )
            {
//                echo 'NewUser field: '.$this->_user->$field.'<br/>';
//                echo 'OldUser field: '.$value.'<br/>';
                if ($this->_user->$field == $value)
                {
                    return $this->id;
                }
            }
            $result = ! (bool) DB::select(array('id', 'id'))
			->from($this->_table_name)
			->where($field, '=', $value)
			->execute($this->_db)
			->get('id');
                return $result; 
	}
	public function confirm ($value1, $value2)
        {
            return ($value1 == $value2);
        }
}
