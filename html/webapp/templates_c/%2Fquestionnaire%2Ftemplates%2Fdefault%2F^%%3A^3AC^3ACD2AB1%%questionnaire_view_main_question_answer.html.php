<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from questionnaire_view_main_question_answer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_view_main_question_answer.html', 7, false),)), $this); ?>
<?php echo '';  echo '<div class="questionnaire_question">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_question.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<div class="questionnaire_answer">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer.html", 'smarty_include_vars' => array('choiceDisplay' => ((is_array($_tmp=$this->_tpl_vars['action']['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div></div>'; ?>