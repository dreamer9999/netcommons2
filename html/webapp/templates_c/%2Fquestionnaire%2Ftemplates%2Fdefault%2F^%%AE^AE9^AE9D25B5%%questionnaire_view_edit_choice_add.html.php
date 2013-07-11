<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from questionnaire_view_edit_choice_add.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_view_edit_choice_add.html', 4, false),)), $this); ?>
<?php echo '';  echo '<table>';  $this->assign('choice', ((is_array($_tmp=$this->_tpl_vars['action']['choice'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('iteration', ((is_array($_tmp=$this->_tpl_vars['action']['choice_iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_edit_choice.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</table><script class="nc_script" type="text/javascript">questionnaireCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeQuestionType($("questionnaire_question_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '").value);</script>'; ?>