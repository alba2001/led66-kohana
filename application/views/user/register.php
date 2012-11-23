<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="modal_container">
    <h2 style="text-align: center">Регистрация пользователя</h2>
    <div class="highslide-body">
        <?php if(isset($errors)): ?>
        <div class="flash_error">Логин или пароль введены неверно.
            <ul>
            <?php foreach($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="content">
            <div class="login_form">
                <?php echo Form::open() ?>
                <p class="invite_entry" id="invite_entry">
            <?php echo Form::label('invite', 'Код регистрации') ?>
            <?php $at_invite['id'] = 'invite'?>
            <?php echo Form::input('invite', isset($invite) ? $invite : '', $at_invite) ?>
                </p>
                <p class="username_entry" id="username_entry">
            <?php echo Form::label('username', 'Имя пользователя') ?>
            <?php $at_username['id'] = 'username'?>
            <?php echo Form::input('username', isset($username) ? $username : '', $at_username) ?>
                </p>
                <p class="email_entry" id="email_entry">
            <?php echo Form::label('email', 'Email') ?>
            <?php $at_email['id'] = 'email'?>
            <?php echo Form::input('email', isset($email) ? $email : '', $at_email) ?>
                </p>
                <p class="password_entry" id="password_entry">
            <?php $pass_attr['type'] = 'password'?>
            <?php $pass_attr['id'] = 'password'?>
            <?php echo Form::label('password', 'Пароль')?>
            <?php echo Form::input('password', '', $pass_attr) ?>
                </p>
                <p class="password_confirm_entry" id="password_confirm_entry">
            <?php $password_confirm_attr['type'] = 'password'?>
            <?php $password_confirm_attr['id'] = 'password_confirm'?>
            <?php echo Form::label('password_confirm', 'Подтверждение пароля')?>
            <?php echo Form::input('password_confirm', '', $password_confirm_attr) ?>
                </p>
    <div class="checkbox_and_submit">
        <!--p><label><input id="remember_me" name="remember_me" type="checkbox" value="1" /> Remember me on this computer</label></p-->
      <p>
            <?php $attributes['class'] = 'button'?>
            <?php echo Form::submit('btnsubmit', 'Зарегистрироваться', $attributes) ?>
      </p>
            <?php echo Form::close() ?>
    </div>
  </div>
</div>
</div>
</div>
