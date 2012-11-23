<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Inners_Region extends Controller {

	public function action_edit()
	{
            $id = $this->request->param('id');
            $model = new Model_Admin_Region();
            $region = $model->get_region($id);
            $content = View::factory('admin/regions/edit_region')
                    ->bind('region',$region);
            $this->response->body($content);
        }

} // End Welcome
