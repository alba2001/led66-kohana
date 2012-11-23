<?php defined('SYSPATH') or die('No direct script access.');

class Model_Userinfo
{

        public function user_info()
        {
            $auth = Auth::instance();
            $this_user = $auth->get_user();
            $user['id'] = $this_user->id;
            $user['first_name'] = $this_user->first_name;
            $user['last_name'] = $this_user->last_name;
            $user['email'] = $this_user->email;
            $user['username'] = $this_user->username;
            return $user;
        }
        public function user_save()
        {
            //Создаем объект user
            $auth = Auth::instance();
            $new_user = $auth->get_user();
            $user['id']         = Arr::get($_POST, 'user_id', '');
            /** Находим текущего пользователя и присваиваем объекту user 
             * свойства текущего пользователя 
            **/ 
            // В массив user заносим переменные массива _POST
            $user['first_name'] = Arr::get($_POST, 'first_name', '');
            $user['last_name']  = Arr::get($_POST, 'last_name', '');
            $user['email']      = Arr::get($_POST, 'email', '');
            $user['username']   = Arr::get($_POST, 'username', '');
            $user['password']   = Arr::get($_POST, 'password', '');
            /** Сравниваем объект юсер и массив юсер, если были изменения,
             * то присваиваем их объекту юсер
             **/
            if ( ! ($new_user->first_name == $user['first_name']) )
            {
                $new_user->first_name = $user['first_name'];
            }
            if ( ! ($new_user->last_name == $user['last_name']) )
            {
                $new_user->last_name = $user['last_name'];
            }
            if ( ! ($new_user->email == $user['email']) )
            {
                $new_user->email = $user['email'];
            }
            if ( ! ($new_user->username == $user['username']) )
            {
                $new_user->username = $user['username'];
            }
            if ( $user['password'] )
            {
                $new_user->password = $user['password'];
            }
            try		 
            {
                $new_user->save();
                $user['ok'] = TRUE;
            }
            catch(ORM_Validation_Exception $e)
            {
                $user['errors'] = $e->errors('models');
            }
            return $user;
        }
}
