<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="liner">
<?php if (isset($navs)) : ?>
<div id="global_nav">
  <ul>
    <?php foreach ($navs as $key => $value) : ?>
      <li class="<?php echo $key ?>">
          <a href="<?php echo URL::site().$value['uri'] ?>" 
             id="<?php echo $value['id']?>"
             class ="<?php echo ($value['id'] == $sidebar_item_selected) ?
                        'selected' : ''?>"
             >
              <?php echo $value['name']?>
          </a>
      </li>
    <?php endforeach; ?>
  </ul>

</div>
<div id="recent_items"></div>
<?php endif; ?>
        </div>

