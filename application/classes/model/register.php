<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register
{
    var $password_confirm='';

    public function reg()	
	{
//            $post['username'] = Arr::get($_POST, 'username', '');
//            $post['email']    = Arr::get($_POST, 'email', '');
//            $post['invite']   = Arr::get($_POST, 'invite', '');
//            $post['password'] = Arr::get($_POST, 'password', '');

            // Проверка регистрационного кода
            $userinvite = new Model_Orm_Userinvite();
            $invite = $userinvite->invite = Arr::get($_POST, 'invite', '');
            try
            {
                    $userinvite->check();
            }
            catch(ORM_Validation_Exception $e)
            {
                    $this->errors = $e->errors('models');
                    return FALSE;
            }
            // Создаем пользователя
            $newuser = new Model_Orm_User();
            $username = $newuser->username = Arr::get($_POST, 'username', '');
            $email    = $newuser->email    = Arr::get($_POST, 'email', '');
            $password = $newuser->password = Arr::get($_POST, 'password', '');

            //Генерируем пароль
            $auth = Auth::instance();
            $newuser->password = $auth->hash_password($password);

            // Пытаемся сохранить нового пользователя
            try		 
            {
                    $newuser->save();
            }
            catch(ORM_Validation_Exception $e)
            {
                    $this->errors = $e->errors('models');
                    return FALSE;
            }
            // Узнаем id созданного пользователя
            $usertemp = ORM::factory('orm_user', array('username'=>$username));
            $user_id = $usertemp->id;
//$a=$b();
            //Дeзактивация регистрационного кода
            $role_id = $userinvite->disactive_code($invite, $user_id);

            //Сохранение роли
            $addrole = new Model_Orm_Addrole();
            $addrole->user_id = $user_id;
            $addrole->role_id = $role_id;
            $addrole->save();
//
//
//            //Отправка эл. почты
//            $from = 'alba2001@meta.ua';
//            $subject = 'Регистрация системе регистрации заявок LED66';
//            $message = "Ваш логин: $email Ваш пароль: $genpass";
//            $useful->sendemail($email, $from, $subject, $message, FALSE);

            return TRUE;
	}

        public function hochuNoviyParol($email)
	{
            $usertemp = ORM::factory('newuser', array('username'=>$email));

            if(!$usertemp->loaded())
            {
                return FALSE;
            }

            $useful = new Model_Useful();
            $genpass = $useful->generatePassword(18);

            $usertemp->rempass = $genpass;
            $usertemp->save();

            //Отправка эл. почты
            $from = 'obrsistema1@mail.ru';
            $subject = 'Восстановление пароля';
            $message = "Перейдите по ссылке <a href='http://kohana/auth/checkcode/$genpass'>http://kohana1/auth/checkcode/$genpass</a>";
            $useful->sendemail($email, $from, $subject, $message, TRUE);

            return TRUE;
        }

         public function obnovlenieparolia($code)
	{
            $usertemp = ORM::factory('newuser', array('rempass'=>$code));

            if(!$usertemp->loaded())
            {
               return FALSE;
            }

            $useful = new Model_Useful();
            $genpass = $useful->generatePassword(8);

             //Хеширование пароля
             $auth = Auth::instance();
             $usertemp->password = $auth->hash_password($genpass);

             //Очистка кода восстановления
             $usertemp->rempass = NULL;

             $usertemp->save();

             //Отправка эл. почты
            $email = $usertemp->username;

            $from = 'obrsistema1@mail.ru';
            $subject = 'Авторизационные данные обновлены';
            $message = "Ваш логин: $email Ваш пароль: $genpass";
            $useful->sendemail($email, $from, $subject, $message, FALSE);

            return TRUE;

        }
}
