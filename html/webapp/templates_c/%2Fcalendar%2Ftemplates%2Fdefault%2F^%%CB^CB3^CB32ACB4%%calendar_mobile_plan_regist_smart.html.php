<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from calendar_mobile_plan_regist_smart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_mobile_plan_regist_smart.html', 3, false),array('modifier', 'substr', 'calendar_mobile_plan_regist_smart.html', 4, false),array('modifier', 'string_format', 'calendar_mobile_plan_regist_smart.html', 69, false),array('modifier', 'html_to_text', 'calendar_mobile_plan_regist_smart.html', 191, false),)), $this); ?>
<?php echo '';  $this->assign('date', ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['start_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('s_year', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4)));  echo '';  $this->assign('s_month', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 4, 2) : substr($_tmp, 4, 2)));  echo '';  $this->assign('s_day', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 6, 2) : substr($_tmp, 6, 2)));  echo '';  $this->assign('date', ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['end_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('e_year', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4)));  echo '';  $this->assign('e_month', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 4, 2) : substr($_tmp, 4, 2)));  echo '';  $this->assign('e_day', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 6, 2) : substr($_tmp, 6, 2)));  echo '';  $this->assign('current_year', ((is_array($_tmp=((is_array($_tmp=$_SESSION['calendar_mobile']['current_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4)));  echo '';  $this->assign('current_month', ((is_array($_tmp=((is_array($_tmp=$_SESSION['calendar_mobile']['current_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 4, 2) : substr($_tmp, 4, 2)));  echo '';  $this->assign('current_day', ((is_array($_tmp=((is_array($_tmp=$_SESSION['calendar_mobile']['current_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 6, 2) : substr($_tmp, 6, 2)));  echo '';  $this->assign('s_time', ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['start_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('s_hour', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['s_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 2) : substr($_tmp, 0, 2)));  echo '';  $this->assign('s_min', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['s_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 2, 2) : substr($_tmp, 2, 2)));  echo '';  $this->assign('e_time', ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['end_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('e_hour', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['e_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 2) : substr($_tmp, 0, 2)));  echo '';  $this->assign('e_min', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['e_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 2, 2) : substr($_tmp, 2, 2)));  echo '<form method="post" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><div data-role="fieldcontain" class="ui-hide-label"><label for="title">';  echo $this->_tpl_vars['lang']['calendar_mobile_plan_title'];  echo '</label><input type="text" id="title" name="title" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" placeholder="';  echo $this->_tpl_vars['lang']['calendar_mobile_plan_title'];  echo '"></div><fieldset data-role="fieldcontain"><label for="p_r_id">';  echo $this->_tpl_vars['lang']['calendar_mobile_plan_flag'];  echo '</label>';  $this->assign('next_thread_num', 0);  echo '';  $this->assign('next_parent_id', 0);  echo '';  $this->assign('room_list', ((is_array($_tmp=$this->_tpl_vars['action']['room_arr'][$this->_tpl_vars['next_thread_num']][$this->_tpl_vars['next_parent_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '<select id="p_r_id" name="p_r_id" >';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./calendar_view_recursive_room.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</select></fieldset><label>';  echo $this->_tpl_vars['lang']['calendar_mobile_plan_time'];  echo '</label>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['details_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF )):  echo '<fieldset data-role="controlgroup" data-type="horizontal"><select name="s_year">';  unset($this->_sections['s_year_loop']);
$this->_sections['s_year_loop']['name'] = 's_year_loop';
$this->_sections['s_year_loop']['start'] = (int)((is_array($_tmp=$this->_tpl_vars['s_year']-5)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));
$this->_sections['s_year_loop']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['s_year']+5)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_year_loop']['show'] = true;
$this->_sections['s_year_loop']['max'] = $this->_sections['s_year_loop']['loop'];
$this->_sections['s_year_loop']['step'] = 1;
if ($this->_sections['s_year_loop']['start'] < 0)
    $this->_sections['s_year_loop']['start'] = max($this->_sections['s_year_loop']['step'] > 0 ? 0 : -1, $this->_sections['s_year_loop']['loop'] + $this->_sections['s_year_loop']['start']);
else
    $this->_sections['s_year_loop']['start'] = min($this->_sections['s_year_loop']['start'], $this->_sections['s_year_loop']['step'] > 0 ? $this->_sections['s_year_loop']['loop'] : $this->_sections['s_year_loop']['loop']-1);
if ($this->_sections['s_year_loop']['show']) {
    $this->_sections['s_year_loop']['total'] = min(ceil(($this->_sections['s_year_loop']['step'] > 0 ? $this->_sections['s_year_loop']['loop'] - $this->_sections['s_year_loop']['start'] : $this->_sections['s_year_loop']['start']+1)/abs($this->_sections['s_year_loop']['step'])), $this->_sections['s_year_loop']['max']);
    if ($this->_sections['s_year_loop']['total'] == 0)
        $this->_sections['s_year_loop']['show'] = false;
} else
    $this->_sections['s_year_loop']['total'] = 0;
if ($this->_sections['s_year_loop']['show']):

            for ($this->_sections['s_year_loop']['index'] = $this->_sections['s_year_loop']['start'], $this->_sections['s_year_loop']['iteration'] = 1;
                 $this->_sections['s_year_loop']['iteration'] <= $this->_sections['s_year_loop']['total'];
                 $this->_sections['s_year_loop']['index'] += $this->_sections['s_year_loop']['step'], $this->_sections['s_year_loop']['iteration']++):
$this->_sections['s_year_loop']['rownum'] = $this->_sections['s_year_loop']['iteration'];
$this->_sections['s_year_loop']['index_prev'] = $this->_sections['s_year_loop']['index'] - $this->_sections['s_year_loop']['step'];
$this->_sections['s_year_loop']['index_next'] = $this->_sections['s_year_loop']['index'] + $this->_sections['s_year_loop']['step'];
$this->_sections['s_year_loop']['first']      = ($this->_sections['s_year_loop']['iteration'] == 1);
$this->_sections['s_year_loop']['last']       = ($this->_sections['s_year_loop']['iteration'] == $this->_sections['s_year_loop']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['s_year_loop']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_sections['s_year_loop']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['s_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['s_year_loop']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select><select id="s_month" name="s_month">';  unset($this->_sections['s_month']);
$this->_sections['s_month']['name'] = 's_month';
$this->_sections['s_month']['start'] = (int)1;
$this->_sections['s_month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_month']['show'] = true;
$this->_sections['s_month']['max'] = $this->_sections['s_month']['loop'];
$this->_sections['s_month']['step'] = 1;
if ($this->_sections['s_month']['start'] < 0)
    $this->_sections['s_month']['start'] = max($this->_sections['s_month']['step'] > 0 ? 0 : -1, $this->_sections['s_month']['loop'] + $this->_sections['s_month']['start']);
else
    $this->_sections['s_month']['start'] = min($this->_sections['s_month']['start'], $this->_sections['s_month']['step'] > 0 ? $this->_sections['s_month']['loop'] : $this->_sections['s_month']['loop']-1);
if ($this->_sections['s_month']['show']) {
    $this->_sections['s_month']['total'] = min(ceil(($this->_sections['s_month']['step'] > 0 ? $this->_sections['s_month']['loop'] - $this->_sections['s_month']['start'] : $this->_sections['s_month']['start']+1)/abs($this->_sections['s_month']['step'])), $this->_sections['s_month']['max']);
    if ($this->_sections['s_month']['total'] == 0)
        $this->_sections['s_month']['show'] = false;
} else
    $this->_sections['s_month']['total'] = 0;
if ($this->_sections['s_month']['show']):

            for ($this->_sections['s_month']['index'] = $this->_sections['s_month']['start'], $this->_sections['s_month']['iteration'] = 1;
                 $this->_sections['s_month']['iteration'] <= $this->_sections['s_month']['total'];
                 $this->_sections['s_month']['index'] += $this->_sections['s_month']['step'], $this->_sections['s_month']['iteration']++):
$this->_sections['s_month']['rownum'] = $this->_sections['s_month']['iteration'];
$this->_sections['s_month']['index_prev'] = $this->_sections['s_month']['index'] - $this->_sections['s_month']['step'];
$this->_sections['s_month']['index_next'] = $this->_sections['s_month']['index'] + $this->_sections['s_month']['step'];
$this->_sections['s_month']['first']      = ($this->_sections['s_month']['iteration'] == 1);
$this->_sections['s_month']['last']       = ($this->_sections['s_month']['iteration'] == $this->_sections['s_month']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['s_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['current_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['s_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['s_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select><select id="s_day" name="s_day">';  unset($this->_sections['s_day']);
$this->_sections['s_day']['name'] = 's_day';
$this->_sections['s_day']['start'] = (int)1;
$this->_sections['s_day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_day']['show'] = true;
$this->_sections['s_day']['max'] = $this->_sections['s_day']['loop'];
$this->_sections['s_day']['step'] = 1;
if ($this->_sections['s_day']['start'] < 0)
    $this->_sections['s_day']['start'] = max($this->_sections['s_day']['step'] > 0 ? 0 : -1, $this->_sections['s_day']['loop'] + $this->_sections['s_day']['start']);
else
    $this->_sections['s_day']['start'] = min($this->_sections['s_day']['start'], $this->_sections['s_day']['step'] > 0 ? $this->_sections['s_day']['loop'] : $this->_sections['s_day']['loop']-1);
if ($this->_sections['s_day']['show']) {
    $this->_sections['s_day']['total'] = min(ceil(($this->_sections['s_day']['step'] > 0 ? $this->_sections['s_day']['loop'] - $this->_sections['s_day']['start'] : $this->_sections['s_day']['start']+1)/abs($this->_sections['s_day']['step'])), $this->_sections['s_day']['max']);
    if ($this->_sections['s_day']['total'] == 0)
        $this->_sections['s_day']['show'] = false;
} else
    $this->_sections['s_day']['total'] = 0;
if ($this->_sections['s_day']['show']):

            for ($this->_sections['s_day']['index'] = $this->_sections['s_day']['start'], $this->_sections['s_day']['iteration'] = 1;
                 $this->_sections['s_day']['iteration'] <= $this->_sections['s_day']['total'];
                 $this->_sections['s_day']['index'] += $this->_sections['s_day']['step'], $this->_sections['s_day']['iteration']++):
$this->_sections['s_day']['rownum'] = $this->_sections['s_day']['iteration'];
$this->_sections['s_day']['index_prev'] = $this->_sections['s_day']['index'] - $this->_sections['s_day']['step'];
$this->_sections['s_day']['index_next'] = $this->_sections['s_day']['index'] + $this->_sections['s_day']['step'];
$this->_sections['s_day']['first']      = ($this->_sections['s_day']['iteration'] == 1);
$this->_sections['s_day']['last']       = ($this->_sections['s_day']['iteration'] == $this->_sections['s_day']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['s_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['current_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['s_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['s_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select></fieldset><input type="checkbox" id="allday" name="allday" data-inline="true" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['allday_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo '><label for="allday">';  echo $this->_tpl_vars['lang']['calendar_allday_flag'];  echo '</label><div class="time_control"><fieldset data-role="controlgroup" data-type="horizontal"><select name="s_hour">';  unset($this->_sections['s_hour']);
$this->_sections['s_hour']['name'] = 's_hour';
$this->_sections['s_hour']['start'] = (int)0;
$this->_sections['s_hour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_hour']['show'] = true;
$this->_sections['s_hour']['max'] = $this->_sections['s_hour']['loop'];
$this->_sections['s_hour']['step'] = 1;
if ($this->_sections['s_hour']['start'] < 0)
    $this->_sections['s_hour']['start'] = max($this->_sections['s_hour']['step'] > 0 ? 0 : -1, $this->_sections['s_hour']['loop'] + $this->_sections['s_hour']['start']);
else
    $this->_sections['s_hour']['start'] = min($this->_sections['s_hour']['start'], $this->_sections['s_hour']['step'] > 0 ? $this->_sections['s_hour']['loop'] : $this->_sections['s_hour']['loop']-1);
if ($this->_sections['s_hour']['show']) {
    $this->_sections['s_hour']['total'] = min(ceil(($this->_sections['s_hour']['step'] > 0 ? $this->_sections['s_hour']['loop'] - $this->_sections['s_hour']['start'] : $this->_sections['s_hour']['start']+1)/abs($this->_sections['s_hour']['step'])), $this->_sections['s_hour']['max']);
    if ($this->_sections['s_hour']['total'] == 0)
        $this->_sections['s_hour']['show'] = false;
} else
    $this->_sections['s_hour']['total'] = 0;
if ($this->_sections['s_hour']['show']):

            for ($this->_sections['s_hour']['index'] = $this->_sections['s_hour']['start'], $this->_sections['s_hour']['iteration'] = 1;
                 $this->_sections['s_hour']['iteration'] <= $this->_sections['s_hour']['total'];
                 $this->_sections['s_hour']['index'] += $this->_sections['s_hour']['step'], $this->_sections['s_hour']['iteration']++):
$this->_sections['s_hour']['rownum'] = $this->_sections['s_hour']['iteration'];
$this->_sections['s_hour']['index_prev'] = $this->_sections['s_hour']['index'] - $this->_sections['s_hour']['step'];
$this->_sections['s_hour']['index_next'] = $this->_sections['s_hour']['index'] + $this->_sections['s_hour']['step'];
$this->_sections['s_hour']['first']      = ($this->_sections['s_hour']['iteration'] == 1);
$this->_sections['s_hour']['last']       = ($this->_sections['s_hour']['iteration'] == $this->_sections['s_hour']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['s_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['s_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d"));  echo '';  echo $this->_tpl_vars['lang']['_mobile_hour'];  echo '</option>';  endfor; endif;  echo '</select><select name="s_min">';  unset($this->_sections['s_min']);
$this->_sections['s_min']['name'] = 's_min';
$this->_sections['s_min']['start'] = (int)0;
$this->_sections['s_min']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_min']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['s_min']['show'] = true;
$this->_sections['s_min']['max'] = $this->_sections['s_min']['loop'];
if ($this->_sections['s_min']['start'] < 0)
    $this->_sections['s_min']['start'] = max($this->_sections['s_min']['step'] > 0 ? 0 : -1, $this->_sections['s_min']['loop'] + $this->_sections['s_min']['start']);
else
    $this->_sections['s_min']['start'] = min($this->_sections['s_min']['start'], $this->_sections['s_min']['step'] > 0 ? $this->_sections['s_min']['loop'] : $this->_sections['s_min']['loop']-1);
if ($this->_sections['s_min']['show']) {
    $this->_sections['s_min']['total'] = min(ceil(($this->_sections['s_min']['step'] > 0 ? $this->_sections['s_min']['loop'] - $this->_sections['s_min']['start'] : $this->_sections['s_min']['start']+1)/abs($this->_sections['s_min']['step'])), $this->_sections['s_min']['max']);
    if ($this->_sections['s_min']['total'] == 0)
        $this->_sections['s_min']['show'] = false;
} else
    $this->_sections['s_min']['total'] = 0;
if ($this->_sections['s_min']['show']):

            for ($this->_sections['s_min']['index'] = $this->_sections['s_min']['start'], $this->_sections['s_min']['iteration'] = 1;
                 $this->_sections['s_min']['iteration'] <= $this->_sections['s_min']['total'];
                 $this->_sections['s_min']['index'] += $this->_sections['s_min']['step'], $this->_sections['s_min']['iteration']++):
$this->_sections['s_min']['rownum'] = $this->_sections['s_min']['iteration'];
$this->_sections['s_min']['index_prev'] = $this->_sections['s_min']['index'] - $this->_sections['s_min']['step'];
$this->_sections['s_min']['index_next'] = $this->_sections['s_min']['index'] + $this->_sections['s_min']['step'];
$this->_sections['s_min']['first']      = ($this->_sections['s_min']['iteration'] == 1);
$this->_sections['s_min']['last']       = ($this->_sections['s_min']['iteration'] == $this->_sections['s_min']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['s_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['s_min'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_minute'];  echo '</option>';  endfor; endif;  echo '</select>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['lang']['calendar_time_pause'];  echo '&nbsp;<select name="e_hour">';  unset($this->_sections['e_hour']);
$this->_sections['e_hour']['name'] = 'e_hour';
$this->_sections['e_hour']['start'] = (int)0;
$this->_sections['e_hour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e_hour']['show'] = true;
$this->_sections['e_hour']['max'] = $this->_sections['e_hour']['loop'];
$this->_sections['e_hour']['step'] = 1;
if ($this->_sections['e_hour']['start'] < 0)
    $this->_sections['e_hour']['start'] = max($this->_sections['e_hour']['step'] > 0 ? 0 : -1, $this->_sections['e_hour']['loop'] + $this->_sections['e_hour']['start']);
else
    $this->_sections['e_hour']['start'] = min($this->_sections['e_hour']['start'], $this->_sections['e_hour']['step'] > 0 ? $this->_sections['e_hour']['loop'] : $this->_sections['e_hour']['loop']-1);
if ($this->_sections['e_hour']['show']) {
    $this->_sections['e_hour']['total'] = min(ceil(($this->_sections['e_hour']['step'] > 0 ? $this->_sections['e_hour']['loop'] - $this->_sections['e_hour']['start'] : $this->_sections['e_hour']['start']+1)/abs($this->_sections['e_hour']['step'])), $this->_sections['e_hour']['max']);
    if ($this->_sections['e_hour']['total'] == 0)
        $this->_sections['e_hour']['show'] = false;
} else
    $this->_sections['e_hour']['total'] = 0;
if ($this->_sections['e_hour']['show']):

            for ($this->_sections['e_hour']['index'] = $this->_sections['e_hour']['start'], $this->_sections['e_hour']['iteration'] = 1;
                 $this->_sections['e_hour']['iteration'] <= $this->_sections['e_hour']['total'];
                 $this->_sections['e_hour']['index'] += $this->_sections['e_hour']['step'], $this->_sections['e_hour']['iteration']++):
$this->_sections['e_hour']['rownum'] = $this->_sections['e_hour']['iteration'];
$this->_sections['e_hour']['index_prev'] = $this->_sections['e_hour']['index'] - $this->_sections['e_hour']['step'];
$this->_sections['e_hour']['index_next'] = $this->_sections['e_hour']['index'] + $this->_sections['e_hour']['step'];
$this->_sections['e_hour']['first']      = ($this->_sections['e_hour']['iteration'] == 1);
$this->_sections['e_hour']['last']       = ($this->_sections['e_hour']['iteration'] == $this->_sections['e_hour']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['e_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['e_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_hour'];  echo '</option>';  endfor; endif;  echo '</select><select name="e_min">';  unset($this->_sections['e_min']);
$this->_sections['e_min']['name'] = 'e_min';
$this->_sections['e_min']['start'] = (int)0;
$this->_sections['e_min']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e_min']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['e_min']['show'] = true;
$this->_sections['e_min']['max'] = $this->_sections['e_min']['loop'];
if ($this->_sections['e_min']['start'] < 0)
    $this->_sections['e_min']['start'] = max($this->_sections['e_min']['step'] > 0 ? 0 : -1, $this->_sections['e_min']['loop'] + $this->_sections['e_min']['start']);
else
    $this->_sections['e_min']['start'] = min($this->_sections['e_min']['start'], $this->_sections['e_min']['step'] > 0 ? $this->_sections['e_min']['loop'] : $this->_sections['e_min']['loop']-1);
if ($this->_sections['e_min']['show']) {
    $this->_sections['e_min']['total'] = min(ceil(($this->_sections['e_min']['step'] > 0 ? $this->_sections['e_min']['loop'] - $this->_sections['e_min']['start'] : $this->_sections['e_min']['start']+1)/abs($this->_sections['e_min']['step'])), $this->_sections['e_min']['max']);
    if ($this->_sections['e_min']['total'] == 0)
        $this->_sections['e_min']['show'] = false;
} else
    $this->_sections['e_min']['total'] = 0;
if ($this->_sections['e_min']['show']):

            for ($this->_sections['e_min']['index'] = $this->_sections['e_min']['start'], $this->_sections['e_min']['iteration'] = 1;
                 $this->_sections['e_min']['iteration'] <= $this->_sections['e_min']['total'];
                 $this->_sections['e_min']['index'] += $this->_sections['e_min']['step'], $this->_sections['e_min']['iteration']++):
$this->_sections['e_min']['rownum'] = $this->_sections['e_min']['iteration'];
$this->_sections['e_min']['index_prev'] = $this->_sections['e_min']['index'] - $this->_sections['e_min']['step'];
$this->_sections['e_min']['index_next'] = $this->_sections['e_min']['index'] + $this->_sections['e_min']['step'];
$this->_sections['e_min']['first']      = ($this->_sections['e_min']['iteration'] == 1);
$this->_sections['e_min']['last']       = ($this->_sections['e_min']['iteration'] == $this->_sections['e_min']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['e_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['e_min'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_minute'];  echo '</option>';  endfor; endif;  echo '</select></fieldset></div><input type="submit" name="details" data-icon="arrow-r" data-iconpos="right" value="';  echo $this->_tpl_vars['lang']['calendar_details_addplan'];  echo '">';  else:  echo '<fieldset data-role="controlgroup" data-type="horizontal"><input type="text" name="s_year" maxlength="4" value="';  echo ((is_array($_tmp=$this->_tpl_vars['s_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" style="width:4em;display:inline;" /><select id="s_month" name="s_month">';  unset($this->_sections['s_month']);
$this->_sections['s_month']['name'] = 's_month';
$this->_sections['s_month']['start'] = (int)1;
$this->_sections['s_month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_month']['show'] = true;
$this->_sections['s_month']['max'] = $this->_sections['s_month']['loop'];
$this->_sections['s_month']['step'] = 1;
if ($this->_sections['s_month']['start'] < 0)
    $this->_sections['s_month']['start'] = max($this->_sections['s_month']['step'] > 0 ? 0 : -1, $this->_sections['s_month']['loop'] + $this->_sections['s_month']['start']);
else
    $this->_sections['s_month']['start'] = min($this->_sections['s_month']['start'], $this->_sections['s_month']['step'] > 0 ? $this->_sections['s_month']['loop'] : $this->_sections['s_month']['loop']-1);
if ($this->_sections['s_month']['show']) {
    $this->_sections['s_month']['total'] = min(ceil(($this->_sections['s_month']['step'] > 0 ? $this->_sections['s_month']['loop'] - $this->_sections['s_month']['start'] : $this->_sections['s_month']['start']+1)/abs($this->_sections['s_month']['step'])), $this->_sections['s_month']['max']);
    if ($this->_sections['s_month']['total'] == 0)
        $this->_sections['s_month']['show'] = false;
} else
    $this->_sections['s_month']['total'] = 0;
if ($this->_sections['s_month']['show']):

            for ($this->_sections['s_month']['index'] = $this->_sections['s_month']['start'], $this->_sections['s_month']['iteration'] = 1;
                 $this->_sections['s_month']['iteration'] <= $this->_sections['s_month']['total'];
                 $this->_sections['s_month']['index'] += $this->_sections['s_month']['step'], $this->_sections['s_month']['iteration']++):
$this->_sections['s_month']['rownum'] = $this->_sections['s_month']['iteration'];
$this->_sections['s_month']['index_prev'] = $this->_sections['s_month']['index'] - $this->_sections['s_month']['step'];
$this->_sections['s_month']['index_next'] = $this->_sections['s_month']['index'] + $this->_sections['s_month']['step'];
$this->_sections['s_month']['first']      = ($this->_sections['s_month']['iteration'] == 1);
$this->_sections['s_month']['last']       = ($this->_sections['s_month']['iteration'] == $this->_sections['s_month']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['s_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['s_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['s_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['s_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo '</option>';  endfor; endif;  echo '</select><select id="s_day" name="s_day">';  unset($this->_sections['s_day']);
$this->_sections['s_day']['name'] = 's_day';
$this->_sections['s_day']['start'] = (int)1;
$this->_sections['s_day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_day']['show'] = true;
$this->_sections['s_day']['max'] = $this->_sections['s_day']['loop'];
$this->_sections['s_day']['step'] = 1;
if ($this->_sections['s_day']['start'] < 0)
    $this->_sections['s_day']['start'] = max($this->_sections['s_day']['step'] > 0 ? 0 : -1, $this->_sections['s_day']['loop'] + $this->_sections['s_day']['start']);
else
    $this->_sections['s_day']['start'] = min($this->_sections['s_day']['start'], $this->_sections['s_day']['step'] > 0 ? $this->_sections['s_day']['loop'] : $this->_sections['s_day']['loop']-1);
if ($this->_sections['s_day']['show']) {
    $this->_sections['s_day']['total'] = min(ceil(($this->_sections['s_day']['step'] > 0 ? $this->_sections['s_day']['loop'] - $this->_sections['s_day']['start'] : $this->_sections['s_day']['start']+1)/abs($this->_sections['s_day']['step'])), $this->_sections['s_day']['max']);
    if ($this->_sections['s_day']['total'] == 0)
        $this->_sections['s_day']['show'] = false;
} else
    $this->_sections['s_day']['total'] = 0;
if ($this->_sections['s_day']['show']):

            for ($this->_sections['s_day']['index'] = $this->_sections['s_day']['start'], $this->_sections['s_day']['iteration'] = 1;
                 $this->_sections['s_day']['iteration'] <= $this->_sections['s_day']['total'];
                 $this->_sections['s_day']['index'] += $this->_sections['s_day']['step'], $this->_sections['s_day']['iteration']++):
$this->_sections['s_day']['rownum'] = $this->_sections['s_day']['iteration'];
$this->_sections['s_day']['index_prev'] = $this->_sections['s_day']['index'] - $this->_sections['s_day']['step'];
$this->_sections['s_day']['index_next'] = $this->_sections['s_day']['index'] + $this->_sections['s_day']['step'];
$this->_sections['s_day']['first']      = ($this->_sections['s_day']['iteration'] == 1);
$this->_sections['s_day']['last']       = ($this->_sections['s_day']['iteration'] == $this->_sections['s_day']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['s_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['s_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['s_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['s_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo '</option>';  endfor; endif;  echo '</select></fieldset><fieldset data-role="controlgroup" data-type="horizontal" class="time_control"><select name="s_hour">';  unset($this->_sections['s_hour']);
$this->_sections['s_hour']['name'] = 's_hour';
$this->_sections['s_hour']['start'] = (int)0;
$this->_sections['s_hour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_hour']['show'] = true;
$this->_sections['s_hour']['max'] = $this->_sections['s_hour']['loop'];
$this->_sections['s_hour']['step'] = 1;
if ($this->_sections['s_hour']['start'] < 0)
    $this->_sections['s_hour']['start'] = max($this->_sections['s_hour']['step'] > 0 ? 0 : -1, $this->_sections['s_hour']['loop'] + $this->_sections['s_hour']['start']);
else
    $this->_sections['s_hour']['start'] = min($this->_sections['s_hour']['start'], $this->_sections['s_hour']['step'] > 0 ? $this->_sections['s_hour']['loop'] : $this->_sections['s_hour']['loop']-1);
if ($this->_sections['s_hour']['show']) {
    $this->_sections['s_hour']['total'] = min(ceil(($this->_sections['s_hour']['step'] > 0 ? $this->_sections['s_hour']['loop'] - $this->_sections['s_hour']['start'] : $this->_sections['s_hour']['start']+1)/abs($this->_sections['s_hour']['step'])), $this->_sections['s_hour']['max']);
    if ($this->_sections['s_hour']['total'] == 0)
        $this->_sections['s_hour']['show'] = false;
} else
    $this->_sections['s_hour']['total'] = 0;
if ($this->_sections['s_hour']['show']):

            for ($this->_sections['s_hour']['index'] = $this->_sections['s_hour']['start'], $this->_sections['s_hour']['iteration'] = 1;
                 $this->_sections['s_hour']['iteration'] <= $this->_sections['s_hour']['total'];
                 $this->_sections['s_hour']['index'] += $this->_sections['s_hour']['step'], $this->_sections['s_hour']['iteration']++):
$this->_sections['s_hour']['rownum'] = $this->_sections['s_hour']['iteration'];
$this->_sections['s_hour']['index_prev'] = $this->_sections['s_hour']['index'] - $this->_sections['s_hour']['step'];
$this->_sections['s_hour']['index_next'] = $this->_sections['s_hour']['index'] + $this->_sections['s_hour']['step'];
$this->_sections['s_hour']['first']      = ($this->_sections['s_hour']['iteration'] == 1);
$this->_sections['s_hour']['last']       = ($this->_sections['s_hour']['iteration'] == $this->_sections['s_hour']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['s_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['s_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_hour'];  echo '</option>';  endfor; endif;  echo '</select><select name="s_min">';  unset($this->_sections['s_min']);
$this->_sections['s_min']['name'] = 's_min';
$this->_sections['s_min']['start'] = (int)0;
$this->_sections['s_min']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s_min']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['s_min']['show'] = true;
$this->_sections['s_min']['max'] = $this->_sections['s_min']['loop'];
if ($this->_sections['s_min']['start'] < 0)
    $this->_sections['s_min']['start'] = max($this->_sections['s_min']['step'] > 0 ? 0 : -1, $this->_sections['s_min']['loop'] + $this->_sections['s_min']['start']);
else
    $this->_sections['s_min']['start'] = min($this->_sections['s_min']['start'], $this->_sections['s_min']['step'] > 0 ? $this->_sections['s_min']['loop'] : $this->_sections['s_min']['loop']-1);
if ($this->_sections['s_min']['show']) {
    $this->_sections['s_min']['total'] = min(ceil(($this->_sections['s_min']['step'] > 0 ? $this->_sections['s_min']['loop'] - $this->_sections['s_min']['start'] : $this->_sections['s_min']['start']+1)/abs($this->_sections['s_min']['step'])), $this->_sections['s_min']['max']);
    if ($this->_sections['s_min']['total'] == 0)
        $this->_sections['s_min']['show'] = false;
} else
    $this->_sections['s_min']['total'] = 0;
if ($this->_sections['s_min']['show']):

            for ($this->_sections['s_min']['index'] = $this->_sections['s_min']['start'], $this->_sections['s_min']['iteration'] = 1;
                 $this->_sections['s_min']['iteration'] <= $this->_sections['s_min']['total'];
                 $this->_sections['s_min']['index'] += $this->_sections['s_min']['step'], $this->_sections['s_min']['iteration']++):
$this->_sections['s_min']['rownum'] = $this->_sections['s_min']['iteration'];
$this->_sections['s_min']['index_prev'] = $this->_sections['s_min']['index'] - $this->_sections['s_min']['step'];
$this->_sections['s_min']['index_next'] = $this->_sections['s_min']['index'] + $this->_sections['s_min']['step'];
$this->_sections['s_min']['first']      = ($this->_sections['s_min']['iteration'] == 1);
$this->_sections['s_min']['last']       = ($this->_sections['s_min']['iteration'] == $this->_sections['s_min']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['s_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['s_min'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['s_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_minute'];  echo '</option>';  endfor; endif;  echo '</select></fieldset>&nbsp;';  echo $this->_tpl_vars['lang']['calendar_time_pause'];  echo '<fieldset data-role="controlgroup" data-type="horizontal"><input type="text" name="e_year" maxlength="4" value="';  echo ((is_array($_tmp=$this->_tpl_vars['e_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" style="width:4em;display:inline;" /><select id="e_month" name="e_month">';  unset($this->_sections['e_month']);
$this->_sections['e_month']['name'] = 'e_month';
$this->_sections['e_month']['start'] = (int)1;
$this->_sections['e_month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e_month']['show'] = true;
$this->_sections['e_month']['max'] = $this->_sections['e_month']['loop'];
$this->_sections['e_month']['step'] = 1;
if ($this->_sections['e_month']['start'] < 0)
    $this->_sections['e_month']['start'] = max($this->_sections['e_month']['step'] > 0 ? 0 : -1, $this->_sections['e_month']['loop'] + $this->_sections['e_month']['start']);
else
    $this->_sections['e_month']['start'] = min($this->_sections['e_month']['start'], $this->_sections['e_month']['step'] > 0 ? $this->_sections['e_month']['loop'] : $this->_sections['e_month']['loop']-1);
if ($this->_sections['e_month']['show']) {
    $this->_sections['e_month']['total'] = min(ceil(($this->_sections['e_month']['step'] > 0 ? $this->_sections['e_month']['loop'] - $this->_sections['e_month']['start'] : $this->_sections['e_month']['start']+1)/abs($this->_sections['e_month']['step'])), $this->_sections['e_month']['max']);
    if ($this->_sections['e_month']['total'] == 0)
        $this->_sections['e_month']['show'] = false;
} else
    $this->_sections['e_month']['total'] = 0;
if ($this->_sections['e_month']['show']):

            for ($this->_sections['e_month']['index'] = $this->_sections['e_month']['start'], $this->_sections['e_month']['iteration'] = 1;
                 $this->_sections['e_month']['iteration'] <= $this->_sections['e_month']['total'];
                 $this->_sections['e_month']['index'] += $this->_sections['e_month']['step'], $this->_sections['e_month']['iteration']++):
$this->_sections['e_month']['rownum'] = $this->_sections['e_month']['iteration'];
$this->_sections['e_month']['index_prev'] = $this->_sections['e_month']['index'] - $this->_sections['e_month']['step'];
$this->_sections['e_month']['index_next'] = $this->_sections['e_month']['index'] + $this->_sections['e_month']['step'];
$this->_sections['e_month']['first']      = ($this->_sections['e_month']['iteration'] == 1);
$this->_sections['e_month']['last']       = ($this->_sections['e_month']['iteration'] == $this->_sections['e_month']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['e_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['e_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['e_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['e_month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo '</option>';  endfor; endif;  echo '</select><select id="e_day" name="e_day">';  unset($this->_sections['e_day']);
$this->_sections['e_day']['name'] = 'e_day';
$this->_sections['e_day']['start'] = (int)1;
$this->_sections['e_day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e_day']['show'] = true;
$this->_sections['e_day']['max'] = $this->_sections['e_day']['loop'];
$this->_sections['e_day']['step'] = 1;
if ($this->_sections['e_day']['start'] < 0)
    $this->_sections['e_day']['start'] = max($this->_sections['e_day']['step'] > 0 ? 0 : -1, $this->_sections['e_day']['loop'] + $this->_sections['e_day']['start']);
else
    $this->_sections['e_day']['start'] = min($this->_sections['e_day']['start'], $this->_sections['e_day']['step'] > 0 ? $this->_sections['e_day']['loop'] : $this->_sections['e_day']['loop']-1);
if ($this->_sections['e_day']['show']) {
    $this->_sections['e_day']['total'] = min(ceil(($this->_sections['e_day']['step'] > 0 ? $this->_sections['e_day']['loop'] - $this->_sections['e_day']['start'] : $this->_sections['e_day']['start']+1)/abs($this->_sections['e_day']['step'])), $this->_sections['e_day']['max']);
    if ($this->_sections['e_day']['total'] == 0)
        $this->_sections['e_day']['show'] = false;
} else
    $this->_sections['e_day']['total'] = 0;
if ($this->_sections['e_day']['show']):

            for ($this->_sections['e_day']['index'] = $this->_sections['e_day']['start'], $this->_sections['e_day']['iteration'] = 1;
                 $this->_sections['e_day']['iteration'] <= $this->_sections['e_day']['total'];
                 $this->_sections['e_day']['index'] += $this->_sections['e_day']['step'], $this->_sections['e_day']['iteration']++):
$this->_sections['e_day']['rownum'] = $this->_sections['e_day']['iteration'];
$this->_sections['e_day']['index_prev'] = $this->_sections['e_day']['index'] - $this->_sections['e_day']['step'];
$this->_sections['e_day']['index_next'] = $this->_sections['e_day']['index'] + $this->_sections['e_day']['step'];
$this->_sections['e_day']['first']      = ($this->_sections['e_day']['iteration'] == 1);
$this->_sections['e_day']['last']       = ($this->_sections['e_day']['iteration'] == $this->_sections['e_day']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['e_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['e_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['e_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['e_day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo '</option>';  endfor; endif;  echo '</select></fieldset><fieldset data-role="controlgroup" data-type="horizontal" class="time_control" ><select name="e_hour">';  unset($this->_sections['e_hour']);
$this->_sections['e_hour']['name'] = 'e_hour';
$this->_sections['e_hour']['start'] = (int)0;
$this->_sections['e_hour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e_hour']['show'] = true;
$this->_sections['e_hour']['max'] = $this->_sections['e_hour']['loop'];
$this->_sections['e_hour']['step'] = 1;
if ($this->_sections['e_hour']['start'] < 0)
    $this->_sections['e_hour']['start'] = max($this->_sections['e_hour']['step'] > 0 ? 0 : -1, $this->_sections['e_hour']['loop'] + $this->_sections['e_hour']['start']);
else
    $this->_sections['e_hour']['start'] = min($this->_sections['e_hour']['start'], $this->_sections['e_hour']['step'] > 0 ? $this->_sections['e_hour']['loop'] : $this->_sections['e_hour']['loop']-1);
if ($this->_sections['e_hour']['show']) {
    $this->_sections['e_hour']['total'] = min(ceil(($this->_sections['e_hour']['step'] > 0 ? $this->_sections['e_hour']['loop'] - $this->_sections['e_hour']['start'] : $this->_sections['e_hour']['start']+1)/abs($this->_sections['e_hour']['step'])), $this->_sections['e_hour']['max']);
    if ($this->_sections['e_hour']['total'] == 0)
        $this->_sections['e_hour']['show'] = false;
} else
    $this->_sections['e_hour']['total'] = 0;
if ($this->_sections['e_hour']['show']):

            for ($this->_sections['e_hour']['index'] = $this->_sections['e_hour']['start'], $this->_sections['e_hour']['iteration'] = 1;
                 $this->_sections['e_hour']['iteration'] <= $this->_sections['e_hour']['total'];
                 $this->_sections['e_hour']['index'] += $this->_sections['e_hour']['step'], $this->_sections['e_hour']['iteration']++):
$this->_sections['e_hour']['rownum'] = $this->_sections['e_hour']['iteration'];
$this->_sections['e_hour']['index_prev'] = $this->_sections['e_hour']['index'] - $this->_sections['e_hour']['step'];
$this->_sections['e_hour']['index_next'] = $this->_sections['e_hour']['index'] + $this->_sections['e_hour']['step'];
$this->_sections['e_hour']['first']      = ($this->_sections['e_hour']['iteration'] == 1);
$this->_sections['e_hour']['last']       = ($this->_sections['e_hour']['iteration'] == $this->_sections['e_hour']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['e_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['e_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_hour'];  echo '</option>';  endfor; endif;  echo '</select><select name="e_min">';  unset($this->_sections['e_min']);
$this->_sections['e_min']['name'] = 'e_min';
$this->_sections['e_min']['start'] = (int)0;
$this->_sections['e_min']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e_min']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['e_min']['show'] = true;
$this->_sections['e_min']['max'] = $this->_sections['e_min']['loop'];
if ($this->_sections['e_min']['start'] < 0)
    $this->_sections['e_min']['start'] = max($this->_sections['e_min']['step'] > 0 ? 0 : -1, $this->_sections['e_min']['loop'] + $this->_sections['e_min']['start']);
else
    $this->_sections['e_min']['start'] = min($this->_sections['e_min']['start'], $this->_sections['e_min']['step'] > 0 ? $this->_sections['e_min']['loop'] : $this->_sections['e_min']['loop']-1);
if ($this->_sections['e_min']['show']) {
    $this->_sections['e_min']['total'] = min(ceil(($this->_sections['e_min']['step'] > 0 ? $this->_sections['e_min']['loop'] - $this->_sections['e_min']['start'] : $this->_sections['e_min']['start']+1)/abs($this->_sections['e_min']['step'])), $this->_sections['e_min']['max']);
    if ($this->_sections['e_min']['total'] == 0)
        $this->_sections['e_min']['show'] = false;
} else
    $this->_sections['e_min']['total'] = 0;
if ($this->_sections['e_min']['show']):

            for ($this->_sections['e_min']['index'] = $this->_sections['e_min']['start'], $this->_sections['e_min']['iteration'] = 1;
                 $this->_sections['e_min']['iteration'] <= $this->_sections['e_min']['total'];
                 $this->_sections['e_min']['index'] += $this->_sections['e_min']['step'], $this->_sections['e_min']['iteration']++):
$this->_sections['e_min']['rownum'] = $this->_sections['e_min']['iteration'];
$this->_sections['e_min']['index_prev'] = $this->_sections['e_min']['index'] - $this->_sections['e_min']['step'];
$this->_sections['e_min']['index_next'] = $this->_sections['e_min']['index'] + $this->_sections['e_min']['step'];
$this->_sections['e_min']['first']      = ($this->_sections['e_min']['iteration'] == 1);
$this->_sections['e_min']['last']       = ($this->_sections['e_min']['iteration'] == $this->_sections['e_min']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['e_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['e_min'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['e_min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_minute'];  echo '</option>';  endfor; endif;  echo '</select></fieldset><input type="checkbox" id="allday" name="allday" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['allday_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo '><label for="allday">';  echo $this->_tpl_vars['lang']['calendar_allday_flag'];  echo '</label><fieldset data-role="fieldcontain"><label for="location">';  echo $this->_tpl_vars['lang']['calendar_mobile_location'];  echo '</label><input type="text" id="location" name="location" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['location'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" placeholder="';  echo $this->_tpl_vars['lang']['calendar_mobile_location'];  echo '"></fieldset><fieldset data-role="fieldcontain"><label for="contact">';  echo $this->_tpl_vars['lang']['calendar_mobile_contact'];  echo '</label><input type="text" id="contact" name="contact" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['contact'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" placeholder="';  echo $this->_tpl_vars['lang']['calendar_mobile_contact'];  echo '"></fieldset><fieldset data-role="fieldcontain"><label for="description">';  echo $this->_tpl_vars['lang']['calendar_mobile_description'];  echo '</label><textarea id="description" name="description" rows=5 placeholder="';  echo $this->_tpl_vars['lang']['calendar_mobile_description'];  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['description'])) ? $this->_run_mod_handler('html_to_text', true, $_tmp) : html_to_text($_tmp));  echo '</textarea></fieldset><input type="hidden" name="r_flag" value="';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  endif;  echo '<div style="text-align:center;">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['calendar_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '<input type="hidden" name="action" value="calendar_action_mobile_plan_modify"><input data-inline="true" type="submit" name="regist" value="';  echo $this->_tpl_vars['lang']['_edit'];  echo '">';  else:  echo '<input type="hidden" name="action" value="calendar_action_mobile_plan_add"><input data-inline="true" type="submit" name="regist" value="';  echo $this->_tpl_vars['lang']['calendar_mobile_add_plan'];  echo '">';  endif;  echo '<input data-inline="true" type="submit" name="cancel" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '"></div><input type="hidden" name="cal_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['calendar_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="d_flag" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['details_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="edit_rrule" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['edit_rrule'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  echo $this->_tpl_vars['token_form'];  echo '';  echo $this->_tpl_vars['session_form'];  echo '</form><script type="text/javascript">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_obj']['allday_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '$(".time_control").hide();';  else:  echo '$(".time_control").show();';  endif;  echo '$("#allday").live( "change", function(event, ui) {if($("#allday").prop(\'checked\')){$(\'.time_control\').hide();}else{$(\'.time_control\').show();}return false;});</script>'; ?>