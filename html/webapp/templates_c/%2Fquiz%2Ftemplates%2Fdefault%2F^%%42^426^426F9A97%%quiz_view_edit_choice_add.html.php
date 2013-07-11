<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from quiz_view_edit_choice_add.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quiz_view_edit_choice_add.html', 4, false),)), $this); ?>
<?php echo '';  echo '<table>';  $this->assign('choice', ((is_array($_tmp=$this->_tpl_vars['action']['choice'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('iteration', ((is_array($_tmp=$this->_tpl_vars['action']['choice_iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUIZ_QUESTION_TYPE_WORD_VALUE )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_edit_choice_word.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_edit_choice.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</table><script class="nc_script" type="text/javascript">quizCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeQuestionType($("quiz_question_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '").value);</script>'; ?>