<?php defined('SYSPATH') or die('No direct access allowed.');
return array(
	'regions' => array ( 
                              'add' => array(
                                                'td' => array(
                                                                'class' => 'button',
                                                                'id' => 'toolbar-new',
                                                              ),
                                                'a' => array(
                                                                'href' => '#',
                                                                'onclick'
=> 'return hs.htmlExpand(this, { contentId: \'add_region\', outlineType: \'rounded-white\', wrapperClassName: \'draggable-header\', headingText: \'Новый регион\' } )',
                                                                'class' => 'highslide',
                                                              ),
                                                'span' => array(
                                                                'class' => 'icon-32-new',
                                                                'title' => 'Создать',
                                                              ),
                                                ),
                              'delete' => array(
                                                'td' => array(
                                                                'class' => 'button',
                                                                'id' => 'toolbar-delete',
                                                              ),
                                                'a' => array(
                                                                'href' => '#',
                                                                'onclick' => 'document.getElementById(\'admin_form_id\').submit()',
                                                                'class' => 'toolbar',
                                                              ),
                                                'span' => array(
                                                                'class' => 'icon-32-delete',
                                                                'title' => 'Удалить',
                                                              ),
                                                ),
                                    ),
);

