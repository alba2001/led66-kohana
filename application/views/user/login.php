<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="modal_container">
    <div class="inner">
        <?php if(isset($error)): ?>
        <div class="flash_error">Логин или пароль введены неверно.</div>
        <?php endif; ?>
        <div class="content">
        <?php echo Form::open() ?>
            <div class="login_form">
            <p class="password_entry">
        <?php $log_attr['id'] = 'username'?>
        <?php $log_attr['class'] = 'user_name'?>
        <?php $log_attr['autocapitalize'] = 'off'?>
        <?php $log_attr['autocorrect'] = 'off'?>
        <?php echo Form::label('username', 'Пльзователь')?>
        <?php echo Form::input('login', isset($login) ? $login : '',$log_attr) ?>
           </p>

            <p class="password_entry">
        <?php $pass_attr['type'] = 'password'?>
        <?php $pass_attr['id'] = 'password'?>
        <?php echo Form::label('password', 'Пароль')?>
        <?php echo Form::input('password', '', $pass_attr) ?>
            </p>
    <div class="checkbox_and_submit">
        <!--p><label><input id="remember_me" name="remember_me" type="checkbox" value="1" /> Remember me on this computer</label></p-->
      <p>
            <?php $attributes['class'] = 'button'?>
            <?php echo Form::submit('btnsubmit', 'Войти', $attributes) ?>
      </p>
      <?php echo Form::close() ?>
    </div>
    <div class="extras" id="password_extras">
      <ul>
          <!--li><strong>Помощь:</strong> <a href="">Восстановить учетную запись и пароль</a></li-->
          <li><strong>Помощь:</strong> <a href="<?php echo URL::site()?>auth/reg">Регистрация</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
