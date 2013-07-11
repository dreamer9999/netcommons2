<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from assignment_view_state.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'assignment_view_state.html', 21, false),)), $this); ?>
<?php echo '';  echo '<table class="assignment_main_state">';  echo '<tr><td class="assignment_state_label">';  echo $this->_tpl_vars['lang']['assignment_period'];  echo '</td><td class="align-center assignment_state_value">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_period.html", 'smarty_include_vars' => array('assignment' => $this->_tpl_vars['action']['assignment'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  echo '<tr><td class="assignment_state_label">';  echo $this->_tpl_vars['lang']['assignment_state'];  echo '</td><td class="align-center assignment_state_value">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_state_value.html", 'smarty_include_vars' => array('activity' => ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['activity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  echo '<tr><td class="assignment_state_label">';  echo $this->_tpl_vars['lang']['assignment_submitter_count'];  echo '</td><td class="align-right assignment_state_value">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['response']['submit_summary_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&nbsp;</td></tr>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['submit_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '';  echo '<tr><td class="assignment_state_label">';  echo $this->_tpl_vars['lang']['assignment_grade'];  echo '</td><td class="align-center assignment_state_value">';  if (( ! empty ( $this->_tpl_vars['action']['report'] ) )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_grade_value.html", 'smarty_include_vars' => array('submit_flag' => ((is_array($_tmp=$this->_tpl_vars['action']['report']['submit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'grade_value' => $this->_tpl_vars['action']['report']['grade_value'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_grade_value.html", 'smarty_include_vars' => array('submit_flag' => "",'grade_value' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</td></tr>';  echo '<tr><td class="assignment_state_label">';  echo $this->_tpl_vars['lang']['assignment_response_date'];  echo '</td><td class="align-center assignment_state_value">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_response_time.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['hasSummaryAuthority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo '<tr><td colspan="2" class="align-center nowrap assignment_state_value"><a href="#" class="syslink" onclick=\'assignmentCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].showSummary(event,"';  echo ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['assignment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");return false;\'>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['assignment_statistics'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a></td></tr>';  endif;  echo '</table>'; ?>