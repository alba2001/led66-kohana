<?php defined('SYSPATH') or die('No direct script access.');?>
<div style="width: 400px">
<?php echo Form::open() ?>
  <table>
      <th><?php echo Form::label('signal_id_identity_first_name', 'Имя') ?></th>
      <td>
        <div class="validated_field">
            <?php $at_first_name['id'] = 'signal_id_identity_first_name'?>
            <?php $at_first_name['size'] = '30'?>
            <?php $at_first_name['tableindex'] = '1'?>
            <p class="field">
            <?php echo Form::input('first_name', isset($first_name) ? $first_name : '', $at_first_name) ?>
            </p>
          <p class="error"><?php if(isset($errors['first_name'])) print_r($errors['first_name'])?></p>
        </div>
      </td>
    </tr>

    <tr>
      <th><?php echo Form::label('signal_id_identity_last_name', 'Фамилия') ?></th>
      <td>
        <div class="validated_field">
            <?php $at_last_name['id'] = 'signal_id_identity_last_name'?>
            <?php $at_last_name['size'] = '30'?>
            <?php $at_last_name['tableindex'] = '2'?>
            <p class="field">
            <?php echo Form::input('last_name', isset($last_name) ? $last_name : '', $at_last_name) ?>
            </p>
          <p class="error"><?php if(isset($errors['last_name'])) print_r($errors['last_name'])?></p>
        </div>
      </td>
    </tr>
    <tr>
      <th><?php echo Form::label('signal_id_identity_email', 'Email') ?></th>
      <td>
        <div class="validated_field">
            <?php $at_email['id'] = 'signal_id_identity_email_address'?>
            <?php $at_email['size'] = '30'?>
            <?php $at_email['tableindex'] = '3'?>
            <p class="field">
            <?php echo Form::input('email', isset($email) ? $email : '', $at_email) ?>
            </p>
          <p class="error"><?php if(isset($errors['email'])) print_r($errors['email'])?></p>
        </div>

      </td>
    </tr>
      <tr class="username_password">
      <th><?php echo Form::label('signal_id_identity_username', 'Имя пользователя') ?></th>
        <td>
          <div class="validated_field">
            <?php $at_username['id'] = 'username'?>
            <?php $at_username['size'] = '30'?>
            <?php $at_username['tableindex'] = '4'?>
            <p class="field">
            <?php echo Form::input('username', isset($username) ? $username : '', $at_username) ?>
            </p>
            <p class="error"><?php if(isset($errors['username'])) print_r($errors['username'])?></p>
          </div>
        </td>
      </tr>
      <tr class="username_password">
        <th><?php echo Form::label('signal_id_identity_password', 'Пароль') ?></th>
        <td>
          <div class="validated_field">
            <?php $pass_attr['type'] = 'password'?>
            <?php $pass_attr['class'] = 'dummy'?>
            <?php $pass_attr['id'] = 'password'?>
            <?php $pass_attr['size'] = '30'?>
            <?php $pass_attr['tableindex'] = '5'?>
            <p class="field">
            <?php echo Form::input('password', '', $pass_attr) ?>
            </p>
            <p class="error"><?php if(isset($errors['password'])) print_r($errors['password'])?></p>
          </div>

        </td>
      </tr>
      <tr class="username_password confirm_password">
        <th><?php echo Form::label('signal_id_identity_password_confirmation', ' Подтвердите пароль') ?></th>
        <td>
          <div class="validated_field">
            <?php $password_confirm_attr['type'] = 'password'?>
            <?php $password_confirm_attr['class'] = 'dummy'?>
            <?php $password_confirm_attr['id'] = 'password_confirmation'?>
            <?php $password_confirm_attr['size'] = '30'?>
            <?php $password_confirm_attr['tableindex'] = '6'?>

            <p class="field">
            <?php echo Form::input('password_confirm', '', $password_confirm_attr) ?>
            </p>
            <p class="error"></p>
          </div>
        </td>
      </tr>
    <tr class="submit">
      
      <td colspan="2" style="padding-left: 150px">
            <?php $at_user_id['type'] = 'hidden'?>
            <?php echo Form::input('user_id', isset($user_id) ? $user_id : '', $at_user_id) ?>
            <?php $at_submit['id'] = 'signal_id_identity_submit'?>
            <?php $at_submit['class'] = 'button'?>
            <?php echo Form::submit('commit', 'Сохранить', $at_submit) ?>
        или <a href="<?php echo URL::site() ?>" class="admin">Отменить</a>
      </td>
    </tr>
  </table>
<?php echo Form::close() ?>
</div>