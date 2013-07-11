<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from assignment_view_main_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'assignment_view_main_init.html', 8, false),array('modifier', 'timezone_date_format', 'assignment_view_main_init.html', 17, false),array('modifier', 'wysiwig_convert_url', 'assignment_view_main_init.html', 29, false),)), $this); ?>
<?php echo '';  echo '';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_assignment_name.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  echo '<div id="assignment_main_view';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="assignment_main_view"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['display_hide'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON || empty ( $this->_tpl_vars['action']['reports'] ) )):  echo ' style="padding-right:0px;"';  endif;  echo '><table class="assignment_main_view"><tr><td class="assignment_poster">';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['action']['assignment']['insert_user_name'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['insert_time'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</td>';  echo '<td rowspan="3" class="assignment_main_state">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_state.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr><tr>';  echo '<td class="assignment_body">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['assignment_body'])) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '</td></tr><tr>';  echo '<td class="assignment_submit_operation">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_submit_link.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr></table></div>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['display_hide'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF && ! empty ( $this->_tpl_vars['action']['reports'] ) )):  echo '';  echo '<div id="assignment_reporter_view';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="assignment_reporter_view">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_main_report.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['submit_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == "" && ((is_array($_tmp=$this->_tpl_vars['action']['hasSubmitListView'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo '<div id="assignment_reporter_view';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="assignment_reporter_view">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_main_submitters.html", 'smarty_include_vars' => array('displayTitle' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../assignment_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">assignmentCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].assignment_id = "';  echo ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['assignment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['submit_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == "" )):  echo 'assignmentCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].yet_submitter = "';  echo ((is_array($_tmp=$this->_tpl_vars['action']['yet_submitter'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  endif;  echo '</script>'; ?>