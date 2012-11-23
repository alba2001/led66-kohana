<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_Desc extends ORM 
{
    protected $_table_name = 'descs';
    protected $_belongs_to = array('desctype' => array('model' => 'orm_desctype'
//            , 'key' => 'desctypes_id'
            , 'foreign_key' => 'desctypes_id'));
    
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
