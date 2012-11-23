<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="toolbar" id="page_toolbar">
    <table class="toolbar"><tr>
            <?php foreach ($buttons as $button) : ?>
            <td class="<?php echo $button['td']['class']?>" 
                id="<?php echo $button['td']['id']?>">
                <a href="<?php echo isset($button['a']['href']) ? $button['a']['href'] : ''?>" 
                   onclick="<?php echo $button['a']['onclick']?>" 
                   class="<?php echo $button['a']['class']?>">
                    <span class="<?php echo $button['span']['class']?>" 
                          title="<?php echo $button['span']['title']?>">
                    </span>
                    <?php echo $button['span']['title']?>
                </a>
            </td>
            <?php endforeach; ?> 
        </tr></table>
</div>
