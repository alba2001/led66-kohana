<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="new_task">
    <form action="<?php echo URL::site() ?>people/tasks" 
          class="new_task" id="form_task" method="post" >
   <div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="QL/nXe8nnhce2GqeGlMZWy/caL9keZmog4DPrmOAV+s=" /></div>
    <input id="blank_slate" name="blank_slate" type="hidden" value="true" />
    

    <div id="form_body_task" class="task_form">

  <input id="from" name="from" type="hidden" value="users" />
<input id="user_id" name="user_id" type="hidden" value="574741" />

  <div class="new_task">
    <h3>Add a new task</h3>
  
    <p class="task_body">
      <input class="autofocus" id="body_task" name="task[body]" size="30" type="text" />
    </p>

    <div id="controls_task" class="controls">
      <h5>When's it due?</h5>
      <p>
        <select name="task[frame]" onchange="Tasks.changeFrame(this)"><option params="{&quot;task[due_at][am_pm]&quot;:&quot;pm&quot;,&quot;task[due_at][date]&quot;:&quot;2011-09-25&quot;,&quot;task[due_at][minute]&quot;:&quot;00&quot;,&quot;task[due_at][hour]&quot;:&quot;3&quot;}" selected="selected" value="today">Today</option><option params="{&quot;task[due_at][am_pm]&quot;:&quot;am&quot;,&quot;task[due_at][date]&quot;:&quot;2011-09-26&quot;,&quot;task[due_at][minute]&quot;:&quot;00&quot;,&quot;task[due_at][hour]&quot;:&quot;9&quot;}" value="tomorrow">Tomorrow</option><option params="{&quot;task[due_at][am_pm]&quot;:&quot;am&quot;,&quot;task[due_at][date]&quot;:&quot;2011-09-26&quot;,&quot;task[due_at][minute]&quot;:&quot;00&quot;,&quot;task[due_at][hour]&quot;:&quot;9&quot;}" value="this_week">This week</option><option params="{&quot;task[due_at][am_pm]&quot;:&quot;am&quot;,&quot;task[due_at][date]&quot;:&quot;2011-09-26&quot;,&quot;task[due_at][minute]&quot;:&quot;00&quot;,&quot;task[due_at][hour]&quot;:&quot;9&quot;}" value="next_week">Next week</option><option params="{&quot;task[due_at][am_pm]&quot;:&quot;am&quot;,&quot;task[due_at][date]&quot;:&quot;2011-09-26&quot;,&quot;task[due_at][minute]&quot;:&quot;00&quot;,&quot;task[due_at][hour]&quot;:&quot;9&quot;}" value="later">Later</option><option params="{&quot;task[due_at][am_pm]&quot;:&quot;am&quot;,&quot;task[due_at][date]&quot;:&quot;2011-09-26&quot;,&quot;task[due_at][minute]&quot;:&quot;00&quot;,&quot;task[due_at][hour]&quot;:&quot;9&quot;}" value="specific">Specific date/time&hellip;</option></select>
        <span class="link_to_set_day_and_time">or <a href="#" onclick="Tasks.changeFrame($(this).up(0).previous('select'), 'specific'); return false;">Set date/time</a></span>
      </p>

      <div class="set_day_and_time">
        <div class="inner">
          <input id="calendar_task" name="task[due_at][date]" type="hidden" value="2011-09-25" /><script type="text/javascript">
//<![CDATA[
async("new CalendarDateSelect(\"calendar_task\", {\"id\":\"calendar_task\"});")
//]]>
</script>
          <div class="set_task_time">
            at <select id="task_due_at_hour" name="task[due_at][hour]"><option value="1">1</option>
<option value="2">2</option>
<option value="3" selected="selected">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option></select>:<select id="task_due_at_minute" name="task[due_at][minute]"><option value="00" selected="selected">00</option>
<option value="15">15</option>
<option value="30">30</option>
<option value="45">45</option></select><select id="task_due_at_am_pm" name="task[due_at][am_pm]"><option value="am">am</option>
<option value="pm" selected="selected">pm</option></select>
          </div>
        </div>
      </div>

      
      <h5>Who's responsible?</h5>
      <p><select id="task_owner_id" name="task[owner_id]"><option value="574741" selected="selected">Me</option>
<option value="574722">Станислав Михалев</option></select></p>
      

      <h5>Choose a category</h5>
      <p>
        <select id="category_task" name="task[category_id]" onchange="Tasks.changeCategory(this)"><option value="" selected="selected">None</option>
<option value="3134835">Call</option>
<option value="3134836">Demo</option>
<option value="3134837">Email</option>
<option value="3134838">Fax</option>
<option value="3134839">Follow-up</option>
<option value="3134840">Lunch</option>
<option value="3134841">Meeting</option>
<option value="3134842">Ship</option>
<option value="3134843">Thank-you</option>
<option value="new">New category...</option></select>
        <a href="/task_categories" behavior="return_to" class="edit_categories">Edit categories</a>
      </p>
    
      <p>
        <input name="task[public]" type="hidden" value="0" /><input class="checkbox" id="public_checkbox_task" name="task[public]" type="checkbox" value="1" /> 
        <label for="public_checkbox_task">Let everyone see this task</label>
      </p>
    
    </div>
  </div>
</div>
    <div class="submit">
      <p>
        <input name="commit" type="submit" value="Добавиь это задание" />
        <span>or</span>
        <a href="#" class="menu_target admin">Cancel</a>
      </p>
    </div>
  </form>
</div>