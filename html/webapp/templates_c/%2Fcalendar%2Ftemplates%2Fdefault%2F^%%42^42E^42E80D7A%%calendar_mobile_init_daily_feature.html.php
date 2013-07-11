<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from calendar_mobile_init_daily_feature.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_mobile_init_daily_feature.html', 3, false),array('modifier', 'sprintf', 'calendar_mobile_init_daily_feature.html', 22, false),array('modifier', 'get_image_url', 'calendar_mobile_init_daily_feature.html', 40, false),array('modifier', 'truncate', 'calendar_mobile_init_daily_feature.html', 44, false),)), $this); ?>
<?php echo '';  $this->assign('current_date', ((is_array($_tmp=$_SESSION['calendar_mobile']['current_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "calendar_mobile_init_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<br /><a href="?action=calendar_view_mobile_init&amp;date=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['prev_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['calendar_alt_prev_day'];  echo '</a>&nbsp;';  echo $this->_tpl_vars['action']['date_string'];  echo '&nbsp;<a href="?action=calendar_view_mobile_init&amp;date=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['next_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['calendar_alt_next_day'];  echo '</a><br /><br />';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['plan_data'][$this->_tpl_vars['current_date']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $this->assign('plan_data', ((is_array($_tmp=$this->_tpl_vars['action']['plan_data'][$this->_tpl_vars['current_date']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['plan_data'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['allday_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON || ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$_SESSION['_timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['calendar_mobile_time_format'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['start_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['end_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['start_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['end_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '<br />';  endif;  echo '';  $this->assign('plan_color', "");  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_PUBLIC )):  echo '';  $this->assign('plan_color', ((is_array($_tmp=@CALENDAR_MOBILE_PLAN_PUBLIC)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_MEMBERS )):  echo '';  $this->assign('plan_color', ((is_array($_tmp=@CALENDAR_MOBILE_PLAN_MEMBERS)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_GROUP )):  echo '';  $this->assign('plan_color', ((is_array($_tmp=@CALENDAR_MOBILE_PLAN_GROUP)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_PRIVATE )):  echo '';  $this->assign('plan_color', ((is_array($_tmp=@CALENDAR_MOBILE_PLAN_PRIVATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  endif;  echo '<span style="color:';  echo ((is_array($_tmp=$this->_tpl_vars['plan_color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ';">';  echo $this->_tpl_vars['lang']['calendar_mobile_plan_mark'];  echo '</span>';  if (((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['title_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" && ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '<img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['title_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  endif;  echo '<a href="?action=calendar_view_main_plan_details&amp;cal_id=';  echo ((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['calendar_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plan_data'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=@CALENDAR_MOBILE_DAILY_STRLEN)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=@CALENDAR_MOBILE_DAILY_STRLEN)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a><br /><br />';  endfor; endif;  echo '';  else:  echo '<br />';  echo $this->_tpl_vars['lang']['calendar_noplan'];  echo '<br /><br />';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "calendar_mobile_init_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>