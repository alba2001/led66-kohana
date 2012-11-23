<?php defined('SYSPATH') or die('No direct script access.');?>
<p>
    Это страница заданий.
</p>
<div style="text-align: left">
    <?php foreach ($_POST['task'] as $key => $value) : ?>
    <?php echo $key.': '.$value.'<br/>'; ?>
    <?php endforeach; ?>
</div>
