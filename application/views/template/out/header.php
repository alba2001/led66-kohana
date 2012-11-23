<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="background"></div>
<div class="boundary">



    <div id="inner_header_wrapper">
        <a href="/" id="app_logo"><img alt="Logo-topleft" src="<?php echo URL::site() ?>media/images/logo-topleft.png" style="padding-top: 8px;" /></a>
        <?php if (isset($page_actions)) : ?>
                    <?php echo $page_actions?>
        <?php endif; ?>
        <div id="global_links_container">

            <a href="<?php echo URL::site() ?>user" behavior="return_to" class="">Мои данные</a>
            <a href="<?php echo URL::site() ?>auth/logout" behavior="return_to" class="">Выход</a>
        </div>
    </div>
</div>
