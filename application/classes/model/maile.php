<?php defined('SYSPATH') or die('No direct script access.');

class Model_Maile
{

    public function get_maile_descs(&$maile)
    {
        $descs = $maile->descs->find_all();
        $desctype_id = 0;
        $data = array();
        foreach ($descs as $desc) 
        {
            if ( ! ($desc->desctypes_id == $desctype_id) )
            {
                $desctype_id = $desc->desctypes_id;
                $mailedesctype = $desc->desctype;
                $data[$desctype_id]['desctype_nm'] = $mailedesctype->desctype_nm;
            }
            $data[$desctype_id]['desc'][] = $desc->desk;
            
        }
        return $data;
    }
    public function get_maile($id)
    {
        $maile = new Model_Orm_Maile($id);
        return $maile;
    }
}
