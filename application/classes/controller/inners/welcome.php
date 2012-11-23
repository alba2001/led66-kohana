<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Inners_Welcome extends Controller{
    

	public function action_index()
	{
            $content = View::factory('admin/regions/edit_region');
            $this->response->body($content);
	}

} // End Welcome
