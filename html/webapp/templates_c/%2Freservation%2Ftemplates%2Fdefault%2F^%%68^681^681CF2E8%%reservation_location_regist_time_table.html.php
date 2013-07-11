<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from reservation_location_regist_time_table.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_location_regist_time_table.html', 4, false),array('modifier', 'substr', 'reservation_location_regist_time_table.html', 9, false),array('modifier', 'string_format', 'reservation_location_regist_time_table.html', 12, false),array('modifier', 'sprintf', 'reservation_location_regist_time_table.html', 14, false),)), $this); ?>
<?php echo '<th scope="row" class="nowrap"><label for="time_table';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['reservation_time_table'];  echo '</label></th><td class="nowrap">';  $this->assign('start_hour', ((is_array($_tmp=($this->_tpl_vars['location']['start_time']))) ? $this->_run_mod_handler('substr', true, $_tmp, 8, 2) : substr($_tmp, 8, 2)));  echo '<select name="start_hour">';  unset($this->_sections['start_hour']);
$this->_sections['start_hour']['name'] = 'start_hour';
$this->_sections['start_hour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['start_hour']['start'] = (int)0;
$this->_sections['start_hour']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['start_hour']['show'] = true;
$this->_sections['start_hour']['max'] = $this->_sections['start_hour']['loop'];
if ($this->_sections['start_hour']['start'] < 0)
    $this->_sections['start_hour']['start'] = max($this->_sections['start_hour']['step'] > 0 ? 0 : -1, $this->_sections['start_hour']['loop'] + $this->_sections['start_hour']['start']);
else
    $this->_sections['start_hour']['start'] = min($this->_sections['start_hour']['start'], $this->_sections['start_hour']['step'] > 0 ? $this->_sections['start_hour']['loop'] : $this->_sections['start_hour']['loop']-1);
if ($this->_sections['start_hour']['show']) {
    $this->_sections['start_hour']['total'] = min(ceil(($this->_sections['start_hour']['step'] > 0 ? $this->_sections['start_hour']['loop'] - $this->_sections['start_hour']['start'] : $this->_sections['start_hour']['start']+1)/abs($this->_sections['start_hour']['step'])), $this->_sections['start_hour']['max']);
    if ($this->_sections['start_hour']['total'] == 0)
        $this->_sections['start_hour']['show'] = false;
} else
    $this->_sections['start_hour']['total'] = 0;
if ($this->_sections['start_hour']['show']):

            for ($this->_sections['start_hour']['index'] = $this->_sections['start_hour']['start'], $this->_sections['start_hour']['iteration'] = 1;
                 $this->_sections['start_hour']['iteration'] <= $this->_sections['start_hour']['total'];
                 $this->_sections['start_hour']['index'] += $this->_sections['start_hour']['step'], $this->_sections['start_hour']['iteration']++):
$this->_sections['start_hour']['rownum'] = $this->_sections['start_hour']['iteration'];
$this->_sections['start_hour']['index_prev'] = $this->_sections['start_hour']['index'] - $this->_sections['start_hour']['step'];
$this->_sections['start_hour']['index_next'] = $this->_sections['start_hour']['index'] + $this->_sections['start_hour']['step'];
$this->_sections['start_hour']['first']      = ($this->_sections['start_hour']['iteration'] == 1);
$this->_sections['start_hour']['last']       = ($this->_sections['start_hour']['iteration'] == $this->_sections['start_hour']['total']);
 echo '';  $this->assign('hour', ((is_array($_tmp=((is_array($_tmp=$this->_sections['start_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['start_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_hour'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select>&nbsp;';  $this->assign('start_minute', ((is_array($_tmp=($this->_tpl_vars['location']['start_time']))) ? $this->_run_mod_handler('substr', true, $_tmp, 10, 2) : substr($_tmp, 10, 2)));  echo '<select name="start_minute">';  unset($this->_sections['start_minute']);
$this->_sections['start_minute']['name'] = 'start_minute';
$this->_sections['start_minute']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['start_minute']['start'] = (int)0;
$this->_sections['start_minute']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['start_minute']['show'] = true;
$this->_sections['start_minute']['max'] = $this->_sections['start_minute']['loop'];
if ($this->_sections['start_minute']['start'] < 0)
    $this->_sections['start_minute']['start'] = max($this->_sections['start_minute']['step'] > 0 ? 0 : -1, $this->_sections['start_minute']['loop'] + $this->_sections['start_minute']['start']);
else
    $this->_sections['start_minute']['start'] = min($this->_sections['start_minute']['start'], $this->_sections['start_minute']['step'] > 0 ? $this->_sections['start_minute']['loop'] : $this->_sections['start_minute']['loop']-1);
if ($this->_sections['start_minute']['show']) {
    $this->_sections['start_minute']['total'] = min(ceil(($this->_sections['start_minute']['step'] > 0 ? $this->_sections['start_minute']['loop'] - $this->_sections['start_minute']['start'] : $this->_sections['start_minute']['start']+1)/abs($this->_sections['start_minute']['step'])), $this->_sections['start_minute']['max']);
    if ($this->_sections['start_minute']['total'] == 0)
        $this->_sections['start_minute']['show'] = false;
} else
    $this->_sections['start_minute']['total'] = 0;
if ($this->_sections['start_minute']['show']):

            for ($this->_sections['start_minute']['index'] = $this->_sections['start_minute']['start'], $this->_sections['start_minute']['iteration'] = 1;
                 $this->_sections['start_minute']['iteration'] <= $this->_sections['start_minute']['total'];
                 $this->_sections['start_minute']['index'] += $this->_sections['start_minute']['step'], $this->_sections['start_minute']['iteration']++):
$this->_sections['start_minute']['rownum'] = $this->_sections['start_minute']['iteration'];
$this->_sections['start_minute']['index_prev'] = $this->_sections['start_minute']['index'] - $this->_sections['start_minute']['step'];
$this->_sections['start_minute']['index_next'] = $this->_sections['start_minute']['index'] + $this->_sections['start_minute']['step'];
$this->_sections['start_minute']['first']      = ($this->_sections['start_minute']['iteration'] == 1);
$this->_sections['start_minute']['last']       = ($this->_sections['start_minute']['iteration'] == $this->_sections['start_minute']['total']);
 echo '';  $this->assign('minute', ((is_array($_tmp=((is_array($_tmp=$this->_sections['start_minute']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['start_minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_minute'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select>';  echo $this->_tpl_vars['lang']['reservation_pause'];  echo '';  $this->assign('end_hour', ((is_array($_tmp=($this->_tpl_vars['location']['end_time']))) ? $this->_run_mod_handler('substr', true, $_tmp, 8, 2) : substr($_tmp, 8, 2)));  echo '<select name="end_hour" onchange=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].switchLocationTime24(this.form);\'>';  unset($this->_sections['end_hour']);
$this->_sections['end_hour']['name'] = 'end_hour';
$this->_sections['end_hour']['loop'] = is_array($_loop=25) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['end_hour']['start'] = (int)0;
$this->_sections['end_hour']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['end_hour']['show'] = true;
$this->_sections['end_hour']['max'] = $this->_sections['end_hour']['loop'];
if ($this->_sections['end_hour']['start'] < 0)
    $this->_sections['end_hour']['start'] = max($this->_sections['end_hour']['step'] > 0 ? 0 : -1, $this->_sections['end_hour']['loop'] + $this->_sections['end_hour']['start']);
else
    $this->_sections['end_hour']['start'] = min($this->_sections['end_hour']['start'], $this->_sections['end_hour']['step'] > 0 ? $this->_sections['end_hour']['loop'] : $this->_sections['end_hour']['loop']-1);
if ($this->_sections['end_hour']['show']) {
    $this->_sections['end_hour']['total'] = min(ceil(($this->_sections['end_hour']['step'] > 0 ? $this->_sections['end_hour']['loop'] - $this->_sections['end_hour']['start'] : $this->_sections['end_hour']['start']+1)/abs($this->_sections['end_hour']['step'])), $this->_sections['end_hour']['max']);
    if ($this->_sections['end_hour']['total'] == 0)
        $this->_sections['end_hour']['show'] = false;
} else
    $this->_sections['end_hour']['total'] = 0;
if ($this->_sections['end_hour']['show']):

            for ($this->_sections['end_hour']['index'] = $this->_sections['end_hour']['start'], $this->_sections['end_hour']['iteration'] = 1;
                 $this->_sections['end_hour']['iteration'] <= $this->_sections['end_hour']['total'];
                 $this->_sections['end_hour']['index'] += $this->_sections['end_hour']['step'], $this->_sections['end_hour']['iteration']++):
$this->_sections['end_hour']['rownum'] = $this->_sections['end_hour']['iteration'];
$this->_sections['end_hour']['index_prev'] = $this->_sections['end_hour']['index'] - $this->_sections['end_hour']['step'];
$this->_sections['end_hour']['index_next'] = $this->_sections['end_hour']['index'] + $this->_sections['end_hour']['step'];
$this->_sections['end_hour']['first']      = ($this->_sections['end_hour']['iteration'] == 1);
$this->_sections['end_hour']['last']       = ($this->_sections['end_hour']['iteration'] == $this->_sections['end_hour']['total']);
 echo '';  $this->assign('hour', ((is_array($_tmp=((is_array($_tmp=$this->_sections['end_hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['end_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_hour'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select>&nbsp;';  $this->assign('end_minute', ((is_array($_tmp=($this->_tpl_vars['location']['end_time']))) ? $this->_run_mod_handler('substr', true, $_tmp, 10, 2) : substr($_tmp, 10, 2)));  echo '<select name="end_minute">';  unset($this->_sections['end_minute']);
$this->_sections['end_minute']['name'] = 'end_minute';
$this->_sections['end_minute']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['end_minute']['start'] = (int)0;
$this->_sections['end_minute']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['end_minute']['show'] = true;
$this->_sections['end_minute']['max'] = $this->_sections['end_minute']['loop'];
if ($this->_sections['end_minute']['start'] < 0)
    $this->_sections['end_minute']['start'] = max($this->_sections['end_minute']['step'] > 0 ? 0 : -1, $this->_sections['end_minute']['loop'] + $this->_sections['end_minute']['start']);
else
    $this->_sections['end_minute']['start'] = min($this->_sections['end_minute']['start'], $this->_sections['end_minute']['step'] > 0 ? $this->_sections['end_minute']['loop'] : $this->_sections['end_minute']['loop']-1);
if ($this->_sections['end_minute']['show']) {
    $this->_sections['end_minute']['total'] = min(ceil(($this->_sections['end_minute']['step'] > 0 ? $this->_sections['end_minute']['loop'] - $this->_sections['end_minute']['start'] : $this->_sections['end_minute']['start']+1)/abs($this->_sections['end_minute']['step'])), $this->_sections['end_minute']['max']);
    if ($this->_sections['end_minute']['total'] == 0)
        $this->_sections['end_minute']['show'] = false;
} else
    $this->_sections['end_minute']['total'] = 0;
if ($this->_sections['end_minute']['show']):

            for ($this->_sections['end_minute']['index'] = $this->_sections['end_minute']['start'], $this->_sections['end_minute']['iteration'] = 1;
                 $this->_sections['end_minute']['iteration'] <= $this->_sections['end_minute']['total'];
                 $this->_sections['end_minute']['index'] += $this->_sections['end_minute']['step'], $this->_sections['end_minute']['iteration']++):
$this->_sections['end_minute']['rownum'] = $this->_sections['end_minute']['iteration'];
$this->_sections['end_minute']['index_prev'] = $this->_sections['end_minute']['index'] - $this->_sections['end_minute']['step'];
$this->_sections['end_minute']['index_next'] = $this->_sections['end_minute']['index'] + $this->_sections['end_minute']['step'];
$this->_sections['end_minute']['first']      = ($this->_sections['end_minute']['iteration'] == 1);
$this->_sections['end_minute']['last']       = ($this->_sections['end_minute']['iteration'] == $this->_sections['end_minute']['total']);
 echo '';  $this->assign('minute', ((is_array($_tmp=((is_array($_tmp=$this->_sections['end_minute']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['end_minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_minute'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['minute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select><label for="allday_flag';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="allday_flag';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="allday_flag" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['location']['allday_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].switchLocationAlldayTime(this.form);\' />';  echo $this->_tpl_vars['lang']['reservation_allday_flag'];  echo '</label>';  if (( ((is_array($_tmp=$_SESSION['_timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$this->_tpl_vars['location']['timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<br />';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./reservation_view_timezone.html", 'smarty_include_vars' => array('timezone_offset' => ((is_array($_tmp=$this->_tpl_vars['location']['timezone_string'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['week_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['week_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['week_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['wday'] => $this->_tpl_vars['week']):
        $this->_foreach['week_list']['iteration']++;
 echo '';  if (( ((is_array($_tmp=($this->_foreach['week_list']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 4 == 0 )):  echo '<br />';  else:  echo '&nbsp;&nbsp;';  endif;  echo '<label for="reservation_rrule_byday_';  echo ((is_array($_tmp=$this->_tpl_vars['wday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $this->assign('timetable_arr', ((is_array($_tmp=$this->_tpl_vars['location']['time_table_arr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '<input id="reservation_rrule_byday_';  echo ((is_array($_tmp=$this->_tpl_vars['wday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="rrule_byday[';  echo ((is_array($_tmp=($this->_foreach['week_list']['iteration']-1))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" value="';  echo ((is_array($_tmp=$this->_tpl_vars['wday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ! empty ( $this->_tpl_vars['location']['time_table'] ) && in_array ( ((is_array($_tmp=$this->_tpl_vars['wday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) , ((is_array($_tmp=$this->_tpl_vars['timetable_arr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) )):  echo ' checked="checked"';  endif;  echo ' />';  echo ((is_array($_tmp=$this->_tpl_vars['week']['long_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</label>';  endforeach; endif; unset($_from);  echo '</td>'; ?>