<?php defined('SYSPATH') or die('No direct script access.');

class Model_Maile
{

        public function get_zajavka($id)
        {
            $maile = ORM::factory('orm_maile', $id);
            $data['mlnum'] = $maile->mlnum;
            $descs = $maile->descs->find_all();
            $desctype_id = 0;
            foreach ($descs as $desc) 
            {
                if ($desctype_id != $desc->desctypes_id)
                {
                    $desctype_id = $desc->desctypes_id;
                    $desctype = $desc->desctype;
                    $data['mlbody'][$desctype_id]['desctype_nm'] = $desctype->desctype_nm;
                }
                $data['mlbody'][$desctype_id]['desc'][] = $desc->desk;
            }
            return $data;
        }
}
