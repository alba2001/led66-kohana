<?php defined('SYSPATH') or die('No direct script access.');?>
<div id="tablelist">
<table>
    <thead>
        <tr>
            <th>Номер</th>
            <th>Регион</th>
            <th>Статус</th>
        </tr>
    </thead>
<?php foreach ($mailes as $maile) : ?>
    <tr>
        <td><a href="<?php echo URL::site().'maile/desc/'.$maile['id']?>"><?php echo $maile['mlnum']?></a></td>
        <td><?php echo $maile['mlregion']?></td>
        <td><?php echo $maile['mlstatus']?></td>
    </tr>
<?php endforeach;?>
</table>
</div>