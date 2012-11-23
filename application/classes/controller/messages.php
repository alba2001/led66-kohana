<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Messages extends Controller {
   public function action_index()
   {      
      URL::redirect(); 
   }
   public function action_get_messages() 
   {
       $messages = array(
         'This is test message one',
         'This is test message two',
         'This is test message three'
      );
      
      $this->request->response = View::factory('profile/messages')
         ->set('messages', $messages);
   }
}