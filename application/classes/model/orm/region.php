<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_Region extends ORM 
{

	protected $_table_name = 'regions';
        protected $_primary_key = 'id';
        
        var $_region; 

	public function rules()
	{
            $rules =  array(
                    'region_num' => array(
                            array('not_empty'),
                            array('regex', array(':value', '/^[0-9\-_.]++$/iD')),
                            array(array($this, 'unique'), array(':value', 'region_num')),
                    ),
                    'region_nm' => array(
                            array('not_empty'),
                            array(array($this, 'unique'), array(':value', 'region_nm')),
                    ),
		);
                if ( $this->_region )
                {
                    $rules['first_name'] = array (array('not_empty'));
                    $rules['last_name'] = array (array('not_empty'));
                }
                return $rules;
 	}
	
	public function unique($value, $field)
	{
            $result = ! (bool) DB::select(array('id', 'id'))
			->from($this->_table_name)
			->where($field, '=', $value)
			->execute($this->_db)
			->get('id');
                return $result; 
	}
}
