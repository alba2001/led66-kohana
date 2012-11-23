<?php defined('SYSPATH') or die('No direct script access.');?>
<div id="recordings" class="recording" style="text-align: left">
    <?php foreach($mlbody as $item) : ?>
    <h3><?php echo $item['desctype_nm'];?></h3>
        <ul>
        <?php foreach($item['desc'] as $desc) : ?>
            <li><?php echo $desc; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endforeach;?>
    <hr/>
</div>