<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from calendar_view_edit_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_view_edit_init.html', 8, false),array('modifier', 'string_format', 'calendar_view_edit_init.html', 114, false),)), $this); ?>
<?php echo '<form action="#" method="post" onsubmit="return false;"><div class="outerdiv"><table class="outer" summary="';  echo $this->_tpl_vars['lang']['calendar_summary'];  echo '"><tr class="row"><th class="nowrap" scope="row"><label for="calendar_disp_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['calendar_disp_type'];  echo '</label></th><td class="nowrap"><select id="calendar_disp_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" size="7" name="display_type" class="calendar_display_type" onchange="calendarCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].switchDispType(this.form); return false;"><option value="';  echo ((is_array($_tmp=@CALENDAR_YEARLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_YEARLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_yearly'];  echo '</option><option value="';  echo ((is_array($_tmp=@CALENDAR_S_MONTHLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_S_MONTHLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_s_monthly'];  echo '</option><option value="';  echo ((is_array($_tmp=@CALENDAR_L_MONTHLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_L_MONTHLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_l_monthly'];  echo '</option><option value="';  echo ((is_array($_tmp=@CALENDAR_WEEKLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_WEEKLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_weekly'];  echo '</option><option value="';  echo ((is_array($_tmp=@CALENDAR_DAILY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_DAILY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_daily'];  echo '</option><option value="';  echo ((is_array($_tmp=@CALENDAR_T_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_T_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_t_schedule'];  echo '</option><option value="';  echo ((is_array($_tmp=@CALENDAR_U_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@CALENDAR_U_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['calendar_u_schedule'];  echo '</option></select><br /><label for="calendar_select_room';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_select_room';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="select_room" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['select_room'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' onclick="if (this.checked) { commonCls.displayVisible($(\'calendar_select_room_link';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')); commonCls.sendPopupView(event, {\'action\':\'calendar_view_edit_selectroom\',\'prefix_id_name\':\'popup_calendar\'},{\'top_el\':$(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'),\'modal_flag\':true}); } else { commonCls.displayNone($(\'calendar_select_room_link';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')); }" />';  echo $this->_tpl_vars['lang']['calendar_select_room'];  echo '</label>&nbsp;&nbsp;<span id="calendar_select_room_link';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['select_room'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON )):  echo ' class="display-none"';  endif;  echo '><a class="syslink" href="#" onclick="commonCls.sendPopupView(event, {\'action\':\'calendar_view_edit_selectroom\',\'prefix_id_name\':\'popup_calendar\'},{\'top_el\':$(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'),\'modal_flag\':true}); return false;">';  echo $this->_tpl_vars['lang']['calendar_select_room_link'];  echo '</a></span></td></tr><tr class="row"><th class="nowrap" scope="row">';  echo $this->_tpl_vars['lang']['calendar_start_pos'];  echo '</th><td class="nowrap"><div>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@CALENDAR_YEARLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $this->assign('disabled', " disabled='disabled'");  echo '';  else:  echo '';  $this->assign('disabled', "");  echo '';  endif;  echo '<label for="calendar_start_this_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_start_this_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_calendar_yearly"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="start_pos_yearly" type="radio" value="';  echo ((is_array($_tmp=@CALENDAR_START_THIS_MONTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['start_pos_yearly'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_START_THIS_MONTH )):  echo ' checked="checked"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['calendar_start_this_month'];  echo '</label>&nbsp;<label for="calendar_start_last_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_start_last_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_calendar_yearly"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="start_pos_yearly" type="radio" value="';  echo ((is_array($_tmp=@CALENDAR_START_LAST_MONTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['start_pos_yearly'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_START_LAST_MONTH )):  echo ' checked="checked"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['calendar_start_last_month'];  echo '</label>&nbsp;<label for="calendar_start_january';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_start_january';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_calendar_yearly"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="start_pos_yearly" type="radio" value="';  echo ((is_array($_tmp=@CALENDAR_START_JANUARY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['start_pos_yearly'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_START_JANUARY )):  echo ' checked="checked"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['calendar_start_january'];  echo '</label>&nbsp;<label for="calendar_start_april';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_start_april';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_calendar_yearly"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="start_pos_yearly" type="radio" value="';  echo ((is_array($_tmp=@CALENDAR_START_APRIL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['start_pos_yearly'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_START_APRIL )):  echo ' checked="checked"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['calendar_start_april'];  echo '</label></div><div>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@CALENDAR_WEEKLY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@CALENDAR_T_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@CALENDAR_U_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $this->assign('disabled', " disabled='disabled'");  echo '';  else:  echo '';  $this->assign('disabled', "");  echo '';  endif;  echo '<label for="calendar_start_today';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_start_today';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_calendar_weekly"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="start_pos_weekly" type="radio" value="';  echo ((is_array($_tmp=@CALENDAR_START_TODAY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['start_pos_weekly'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_START_TODAY )):  echo ' checked="checked"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['calendar_start_today'];  echo '</label>&nbsp;<label for="calendar_start_yesterday';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="calendar_start_yesterday';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_calendar_weekly"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="start_pos_weekly" type="radio" value="';  echo ((is_array($_tmp=@CALENDAR_START_YESTERDAY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['start_pos_weekly'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_START_YESTERDAY )):  echo ' checked="checked"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['calendar_start_yesterday'];  echo '</label></div></td></tr><tr class="row"><th class="nowrap" scope="row"><label for="display_count';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['calendar_display_count'];  echo '</label></th><td class="nowrap">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@CALENDAR_T_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@CALENDAR_U_SCHEDULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $this->assign('disabled', " disabled='disabled'");  echo '';  else:  echo '';  $this->assign('disabled', "");  echo '';  endif;  echo '<select id="display_count';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  echo ((is_array($_tmp=$this->_tpl_vars['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' name="display_count">';  unset($this->_sections['display_count']);
$this->_sections['display_count']['name'] = 'display_count';
$this->_sections['display_count']['loop'] = is_array($_loop=15) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['display_count']['start'] = (int)1;
$this->_sections['display_count']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['display_count']['show'] = true;
$this->_sections['display_count']['max'] = $this->_sections['display_count']['loop'];
if ($this->_sections['display_count']['start'] < 0)
    $this->_sections['display_count']['start'] = max($this->_sections['display_count']['step'] > 0 ? 0 : -1, $this->_sections['display_count']['loop'] + $this->_sections['display_count']['start']);
else
    $this->_sections['display_count']['start'] = min($this->_sections['display_count']['start'], $this->_sections['display_count']['step'] > 0 ? $this->_sections['display_count']['loop'] : $this->_sections['display_count']['loop']-1);
if ($this->_sections['display_count']['show']) {
    $this->_sections['display_count']['total'] = min(ceil(($this->_sections['display_count']['step'] > 0 ? $this->_sections['display_count']['loop'] - $this->_sections['display_count']['start'] : $this->_sections['display_count']['start']+1)/abs($this->_sections['display_count']['step'])), $this->_sections['display_count']['max']);
    if ($this->_sections['display_count']['total'] == 0)
        $this->_sections['display_count']['show'] = false;
} else
    $this->_sections['display_count']['total'] = 0;
if ($this->_sections['display_count']['show']):

            for ($this->_sections['display_count']['index'] = $this->_sections['display_count']['start'], $this->_sections['display_count']['iteration'] = 1;
                 $this->_sections['display_count']['iteration'] <= $this->_sections['display_count']['total'];
                 $this->_sections['display_count']['index'] += $this->_sections['display_count']['step'], $this->_sections['display_count']['iteration']++):
$this->_sections['display_count']['rownum'] = $this->_sections['display_count']['iteration'];
$this->_sections['display_count']['index_prev'] = $this->_sections['display_count']['index'] - $this->_sections['display_count']['step'];
$this->_sections['display_count']['index_next'] = $this->_sections['display_count']['index'] + $this->_sections['display_count']['step'];
$this->_sections['display_count']['first']      = ($this->_sections['display_count']['iteration'] == 1);
$this->_sections['display_count']['last']       = ($this->_sections['display_count']['iteration'] == $this->_sections['display_count']['total']);
 echo '';  $this->assign('count', ((is_array($_tmp=$this->_sections['display_count']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['display_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['display_count']['index'])) ? $this->_run_mod_handler('string_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['calendar_display_count_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : smarty_modifier_string_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['calendar_display_count_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select></td></tr></table></div><div class="btn-bottom"><input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick=\'calendarCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeStyle(this.form); return false;\' />&nbsp;<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'calendar_view_main_init\'); return false;" /></div></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../calendar_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>