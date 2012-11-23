<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Region
{
    public function add_region()	
    {
        // Создаем новый регион
        $newregion = new Model_Orm_Region();
        $newregion->region_num = Arr::get($_POST, 'region_num', '');
        $newregion->region_nm = Arr::get($_POST, 'region_nm', '');

        // Пытаемся сохранить новый регион
        try		 
        {
                $newregion->save();
        }
        catch(ORM_Validation_Exception $e)
        {
                $this->errors = $e->errors('models');
                return FALSE;
        }

        return TRUE;
    }
    
    public function edit_region()	
    {
        $id = Arr::get($_POST, 'id', '');
        // Находим регион
        $region = ORM::factory('orm_region', $id);
        // Подставляем новые знячения
        $region->region_num = Arr::get($_POST, 'region_num', '');
        $region->region_nm = Arr::get($_POST, 'region_nm', '');

        // Пытаемся обновить регион
        try		 
        {
               $region->update();
        }
        catch(ORM_Validation_Exception $e)
        {
                $this->errors = $e->errors('models');
                return FALSE;
        }

        return TRUE;
    }
    
    public function remove_regions()	
    {
        $cids = Arr::get($_POST, 'cid', array());
        foreach ($cids as $id) {
            $region = ORM::factory('orm_region', $id);
            // Пытаемся удалить регион
            try		 
            {
                    $region->delete();
            }
            catch(ORM_Validation_Exception $e)
            {
                    $this->errors = $e->errors('models');
                    return FALSE;
            }
        }

            return TRUE;
    }
    public function get_region($id)
    {
        $region = ORM::factory('orm_region', $id);
        return $region;
    }
}
