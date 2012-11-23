<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_Maile extends ORM 
{
    protected $_table_name = 'mailes';
    protected $_has_many = array('descs' => array('model' => 'orm_desc', 'foreign_key' => 'mailes_id'));
    
    public function getData($mailetapes_id)	
    {
        $result = DB::select('id', 'mlnum', 'mlregion', 'mlstatus')
            ->from($this->_table_name)
            ->where('mailetapes_id', ' = ', $mailetapes_id)
            ->order_by('mlnum', 'DESC')
            ->limit(20)
            ->execute($this->_db)
            ->as_array();
        return $result; 

    }

}
