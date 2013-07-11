<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:32
         compiled from calendar_view_main_list_lmonthly.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_view_main_list_lmonthly.html', 3, false),array('modifier', 'sprintf', 'calendar_view_main_list_lmonthly.html', 18, false),array('modifier', 'get_image_url', 'calendar_view_main_list_lmonthly.html', 22, false),)), $this); ?>
<?php echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['plan_data'][$this->_tpl_vars['date']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '';  $this->assign('plan_obj', $this->_tpl_vars['action']['plan_data'][$this->_tpl_vars['date']][$this->_sections['i']['index']]);  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['plan_obj']['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_PUBLIC )):  echo '';  $this->assign('plan_class', 'calendar_plan_public');  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['plan_obj']['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_MEMBERS )):  echo '';  $this->assign('plan_class', 'calendar_plan_members');  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['plan_obj']['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_GROUP )):  echo '';  $this->assign('plan_class', 'calendar_plan_group');  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['plan_obj']['plan_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == CALENDAR_PLAN_PRIVATE )):  echo '';  $this->assign('plan_class', 'calendar_plan_private');  echo '';  endif;  echo '<div class="calendar_plan">';  if (( ((is_array($_tmp=$this->_tpl_vars['plan_obj']['allday_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF || ((is_array($_tmp=$this->_tpl_vars['plan_obj']['timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$_SESSION['_timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<div class="calendar_plan_time">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['calendar_show_time_format'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['plan_obj']['start_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['plan_obj']['end_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['plan_obj']['start_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['plan_obj']['end_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</div>';  endif;  echo '<a class="';  echo ((is_array($_tmp=$this->_tpl_vars['plan_class'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' calendar_plan_title hover_highlight" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['calendar_scheduled_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['plan_obj']['short_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['plan_obj']['short_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick=\'calendarCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].showDetails(event, ';  echo ((is_array($_tmp=$this->_tpl_vars['plan_obj']['calendar_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ', false); return false;\'><img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" class="icon ';  echo ((is_array($_tmp=$this->_tpl_vars['plan_class'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' calendar_plan_mark" alt="" title="" />';  if (((is_array($_tmp=$this->_tpl_vars['plan_obj']['title_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<img class="icon" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['plan_obj']['title_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" alt="" />';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['plan_obj']['short_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a></div>';  endfor; endif;  echo ''; ?>
