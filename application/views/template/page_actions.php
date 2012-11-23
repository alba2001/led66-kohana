<?php defined('SYSPATH') or die('No direct script access.');?>
<table id="page_actions">
				<tr>
					<td class="tiny">
						<div class="menu_container">
							
								<span class="action"><a href="<?php echo URL::site() ?>people/contacts" behavior="return_to"><span>Добавить контакт</span></a></span>
	            	
						</div>
					</td>
					<td class="tiny">
						<div class="menu_container">
							<span class="action"><a href="#" behavior="new_task_button" class="menu_target"><span>Новое задание</span></a></span>
							<div id="balloon_new_task" class="balloon left menu_content task_form_balloon">
  <!-- balloon pointer -->
  <div class="balloon_pointer">
    <div class="balloon_arrow menu_target"></div>
    <div class="balloon_arrow_border"></div>
  </div>
  
  <!-- balloon content -->
  <div class="balloon_wrapper">
    
    
<?php if (isset($balloon_content)) : ?>
<div class="balloon_content">
    <?php echo $balloon_content; ?>
</div>
<?php endif; ?>

    </div>
  </div>
</div>


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
