<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from todo_mobile_entry_smart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'todo_mobile_entry_smart.html', 3, false),array('modifier', 'timezone_date', 'todo_mobile_entry_smart.html', 27, false),array('modifier', 'sprintf', 'todo_mobile_entry_smart.html', 68, false),)), $this); ?>
<?php echo '';  echo '<form method="post" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['todo_priority'];  echo '<div class="ui-grid-a"><div class="ui-block-a"><select name="priority"><option value="';  echo ((is_array($_tmp=@TODO_PRIORITY_HIGH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['priority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PRIORITY_HIGH )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['todo_priority_high'];  echo '</option><option value="';  echo ((is_array($_tmp=@TODO_PRIORITY_MIDDLE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['priority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PRIORITY_MIDDLE )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['todo_priority_middle'];  echo '</option><option value="';  echo ((is_array($_tmp=@TODO_PRIORITY_LOW)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['priority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PRIORITY_LOW )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['todo_priority_low'];  echo '</option></select></div><div class="ui-block-b" style="padding-top:0.4em;"><input type="checkbox" id="state" name="state" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo '><label for="state">';  echo $this->_tpl_vars['lang']['todo_state'];  echo '</label></div></div>';  echo $this->_tpl_vars['lang']['todo_period'];  echo '<fieldset data-role="controlgroup" data-type="horizontal">';  $this->assign('current_year', ((is_array($_tmp="`null`")) ? $this->_run_mod_handler('timezone_date', true, $_tmp, false, 'Y') : timezone_date($_tmp, false, 'Y')));  echo '';  $this->assign('start_year', ((is_array($_tmp=$this->_tpl_vars['current_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  if (! empty ( $this->_tpl_vars['action']['task']['year'] ) && ((is_array($_tmp=$this->_tpl_vars['action']['task']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > ((is_array($_tmp=$this->_tpl_vars['current_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $this->assign('end_year', ((is_array($_tmp=$this->_tpl_vars['action']['task']['year']+1+10)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  else:  echo '';  $this->assign('end_year', ((is_array($_tmp=$this->_tpl_vars['current_year']+10)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  endif;  echo '<select name="year"><option value="">';  echo $this->_tpl_vars['lang']['_mobile_year_label'];  echo '</option>';  unset($this->_sections['year_loop']);
$this->_sections['year_loop']['name'] = 'year_loop';
$this->_sections['year_loop']['start'] = (int)((is_array($_tmp=$this->_tpl_vars['start_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));
$this->_sections['year_loop']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['end_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['year_loop']['show'] = true;
$this->_sections['year_loop']['max'] = $this->_sections['year_loop']['loop'];
$this->_sections['year_loop']['step'] = 1;
if ($this->_sections['year_loop']['start'] < 0)
    $this->_sections['year_loop']['start'] = max($this->_sections['year_loop']['step'] > 0 ? 0 : -1, $this->_sections['year_loop']['loop'] + $this->_sections['year_loop']['start']);
else
    $this->_sections['year_loop']['start'] = min($this->_sections['year_loop']['start'], $this->_sections['year_loop']['step'] > 0 ? $this->_sections['year_loop']['loop'] : $this->_sections['year_loop']['loop']-1);
if ($this->_sections['year_loop']['show']) {
    $this->_sections['year_loop']['total'] = min(ceil(($this->_sections['year_loop']['step'] > 0 ? $this->_sections['year_loop']['loop'] - $this->_sections['year_loop']['start'] : $this->_sections['year_loop']['start']+1)/abs($this->_sections['year_loop']['step'])), $this->_sections['year_loop']['max']);
    if ($this->_sections['year_loop']['total'] == 0)
        $this->_sections['year_loop']['show'] = false;
} else
    $this->_sections['year_loop']['total'] = 0;
if ($this->_sections['year_loop']['show']):

            for ($this->_sections['year_loop']['index'] = $this->_sections['year_loop']['start'], $this->_sections['year_loop']['iteration'] = 1;
                 $this->_sections['year_loop']['iteration'] <= $this->_sections['year_loop']['total'];
                 $this->_sections['year_loop']['index'] += $this->_sections['year_loop']['step'], $this->_sections['year_loop']['iteration']++):
$this->_sections['year_loop']['rownum'] = $this->_sections['year_loop']['iteration'];
$this->_sections['year_loop']['index_prev'] = $this->_sections['year_loop']['index'] - $this->_sections['year_loop']['step'];
$this->_sections['year_loop']['index_next'] = $this->_sections['year_loop']['index'] + $this->_sections['year_loop']['step'];
$this->_sections['year_loop']['first']      = ($this->_sections['year_loop']['iteration'] == 1);
$this->_sections['year_loop']['last']       = ($this->_sections['year_loop']['iteration'] == $this->_sections['year_loop']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['year_loop']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_sections['year_loop']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['action']['task']['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['year_loop']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select><select id="month" name="month"><option value="">';  echo $this->_tpl_vars['lang']['_mobile_month_label'];  echo '</option>';  unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['start'] = (int)1;
$this->_sections['month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
if ($this->_sections['month']['start'] < 0)
    $this->_sections['month']['start'] = max($this->_sections['month']['step'] > 0 ? 0 : -1, $this->_sections['month']['loop'] + $this->_sections['month']['start']);
else
    $this->_sections['month']['start'] = min($this->_sections['month']['start'], $this->_sections['month']['step'] > 0 ? $this->_sections['month']['loop'] : $this->_sections['month']['loop']-1);
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = min(ceil(($this->_sections['month']['step'] > 0 ? $this->_sections['month']['loop'] - $this->_sections['month']['start'] : $this->_sections['month']['start']+1)/abs($this->_sections['month']['step'])), $this->_sections['month']['max']);
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['task']['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select><select id="day" name="day"><option value="">';  echo $this->_tpl_vars['lang']['_mobile_day_label'];  echo '</option>';  unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['start'] = (int)1;
$this->_sections['day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
if ($this->_sections['day']['start'] < 0)
    $this->_sections['day']['start'] = max($this->_sections['day']['step'] > 0 ? 0 : -1, $this->_sections['day']['loop'] + $this->_sections['day']['start']);
else
    $this->_sections['day']['start'] = min($this->_sections['day']['start'], $this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] : $this->_sections['day']['loop']-1);
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = min(ceil(($this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] - $this->_sections['day']['start'] : $this->_sections['day']['start']+1)/abs($this->_sections['day']['step'])), $this->_sections['day']['max']);
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['task']['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select></fieldset><input type="checkbox" id="calendar" name="calendar" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['calendar_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo ' checked="checked"';  endif;  echo '><label for="calendar">';  echo $this->_tpl_vars['lang']['todo_calendar'];  echo '</label><label for="progress">';  echo $this->_tpl_vars['lang']['todo_progress'];  echo '</label><select id="progress" name="progress">';  unset($this->_sections['progress']);
$this->_sections['progress']['name'] = 'progress';
$this->_sections['progress']['loop'] = is_array($_loop=101) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['progress']['start'] = (int)0;
$this->_sections['progress']['step'] = ((int)((is_array($_tmp=@TODO_PROGRESS_INTERVAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) == 0 ? 1 : (int)((is_array($_tmp=@TODO_PROGRESS_INTERVAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));
$this->_sections['progress']['show'] = true;
$this->_sections['progress']['max'] = $this->_sections['progress']['loop'];
if ($this->_sections['progress']['start'] < 0)
    $this->_sections['progress']['start'] = max($this->_sections['progress']['step'] > 0 ? 0 : -1, $this->_sections['progress']['loop'] + $this->_sections['progress']['start']);
else
    $this->_sections['progress']['start'] = min($this->_sections['progress']['start'], $this->_sections['progress']['step'] > 0 ? $this->_sections['progress']['loop'] : $this->_sections['progress']['loop']-1);
if ($this->_sections['progress']['show']) {
    $this->_sections['progress']['total'] = min(ceil(($this->_sections['progress']['step'] > 0 ? $this->_sections['progress']['loop'] - $this->_sections['progress']['start'] : $this->_sections['progress']['start']+1)/abs($this->_sections['progress']['step'])), $this->_sections['progress']['max']);
    if ($this->_sections['progress']['total'] == 0)
        $this->_sections['progress']['show'] = false;
} else
    $this->_sections['progress']['total'] = 0;
if ($this->_sections['progress']['show']):

            for ($this->_sections['progress']['index'] = $this->_sections['progress']['start'], $this->_sections['progress']['iteration'] = 1;
                 $this->_sections['progress']['iteration'] <= $this->_sections['progress']['total'];
                 $this->_sections['progress']['index'] += $this->_sections['progress']['step'], $this->_sections['progress']['iteration']++):
$this->_sections['progress']['rownum'] = $this->_sections['progress']['iteration'];
$this->_sections['progress']['index_prev'] = $this->_sections['progress']['index'] - $this->_sections['progress']['step'];
$this->_sections['progress']['index_next'] = $this->_sections['progress']['index'] + $this->_sections['progress']['step'];
$this->_sections['progress']['first']      = ($this->_sections['progress']['iteration'] == 1);
$this->_sections['progress']['last']       = ($this->_sections['progress']['iteration'] == $this->_sections['progress']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['progress'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_percent'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['todo']['used_category'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '<label for="todo_category">';  echo $this->_tpl_vars['lang']['todo_category_name'];  echo '</label><select id="todo_category" name="category_id">';  $_from = $this->_tpl_vars['action']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category']):
        $this->_foreach['category']['iteration']++;
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['category']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['category']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['action']['task']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  if (( ((is_array($_tmp=$this->_tpl_vars['category']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0 )):  echo '';  echo $this->_tpl_vars['lang']['todo_nocategory'];  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['category']['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '</option>';  endforeach; endif; unset($_from);  echo '</select>';  endif;  echo '';  echo $this->_tpl_vars['lang']['todo_task_value'];  echo '<br /><textarea name="task_value" rowspan=2>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['task']['task_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</textarea><input type="hidden" name="action" value="todo_action_main_entry"><input type="hidden" name="block_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="task_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="target_state" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['target_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['token_form'];  echo '';  echo $this->_tpl_vars['session_form'];  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '<input data-inline="true" type="submit" name="regist" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '">';  else:  echo '<input type="hidden" name="task_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input data-inline="true" type="submit" name="regist" value="';  echo $this->_tpl_vars['lang']['todo_add_task'];  echo '">';  endif;  echo '<a data-rel="back" data-role="button" data-inline="true" >';  echo $this->_tpl_vars['lang']['_cancel'];  echo '</a></form>'; ?>