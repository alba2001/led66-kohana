<?php defined('SYSPATH') or die('No direct script access.');?>
<div id="tablelist">
<table class="tablelist">
    <thead>
        <tr>
            <th width="5%">№</th>
            <th width="24%">Логин</th>
            <th width="24%">Имя</th>
            <th width="24%">Фамилия</th>
            <th width="24%">Email</th>
        </tr>
    </thead>
    <tbody>
<?php $k = 0; ?>
<?php for ($i=0, $n=count( $users ); $i < $n; $i++) : ?>
    <?php $user = $users[$i];?>
    <tr class="<?php echo "row$k"; ?>">
        <td width="5%" ><?php echo $i+1; ?></td>
        <td width="24%" class="left"><?php echo $user['username']?></td>
        <td width="24%" class="left"><?php echo $user['first_name']?></td>
        <td width="24%" class="left"><?php echo $user['last_name']?></td>
        <td width="24%" class="left"><?php echo $user['email']?></td>
    </tr>
    <?php $k = 1 - $k; ?>
<?php endfor;?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>