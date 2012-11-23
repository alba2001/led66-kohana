<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_Desctype extends ORM 
{
    protected $_table_name = 'desctypes';
    protected $_has_many = array('descs' => array('model' => 'orm_desc', 'foreign_key' => 'desctypes_id'));
}
