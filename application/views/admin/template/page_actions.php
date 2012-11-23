<?php defined('SYSPATH') or die('No direct script access.'); ?>
<table id="page_actions">
    <tr>
        <td class="tiny">
            <div class="menu_container">

                <span class="action"><a href="<?php echo URL::site() ?>people/contacts" behavior="return_to"><span>Добавить пользователя</span></a></span>

            </div>
        </td>
        <td class="long">
            <div id="search_wrapper">
                <div class="quick_find">
                    <div class="field" style="position:relative;">
                        <input type="text" id="sidebar_live_search" name="term"
                               class="live_search autofocus overlayable"
                               title="Jump to a contact, case, deal, or tag..."
                               source="/subjects/search.json"
                               autocomplete="off" autocorrect="off" autocapitalize="off"
                               data-focus-priority="0" />
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>
