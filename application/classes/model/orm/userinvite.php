<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_Userinvite extends ORM 
{

	protected $_table_name = 'user_invites';
	public function rules()
	{
		return array(
			'invite' => array(
				array('not_empty'),
                                array(array($this, 'find_field')),
			),
		);
	}
	public function find_field($value)
    {
            return (bool) DB::select(array('COUNT("*")', 'total_count'))
                ->from($this->_table_name)
                ->where('invite', '=', $value)
                ->and_where('expdate', '>=', date('Y-m-d'))
                ->and_where('user_id', '=', 0)
                ->execute($this->_db)
                ->get('total_count');
    }

    public function disactive_code($invite, $user_id)
    {

         $invitetemp = ORM::factory('orm_userinvite', array('invite'=>$invite));
         $invitetemp->user_id = $user_id;
         if ( ! $invitetemp->save())
         {
            return FALSE;
         }
         return $invitetemp->roles_id;
    }


}
