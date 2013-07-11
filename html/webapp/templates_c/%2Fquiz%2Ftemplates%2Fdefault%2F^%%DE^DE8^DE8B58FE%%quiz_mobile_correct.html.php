<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from quiz_mobile_correct.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quiz_mobile_correct.html', 4, false),array('modifier', 'wysiwig_convert_url', 'quiz_mobile_correct.html', 13, false),)), $this); ?>
<?php echo '';  echo '<div data-role="collapsible">';  if (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != QUIZ_QUESTION_TYPE_TEXTAREA_VALUE):  echo '<h4>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_correct_answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h4>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_mobile_answer.html", 'smarty_include_vars' => array('choiceDisplay' => ((is_array($_tmp=@QUIZ_CHOICE_DISPLAY_REFERENCE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</div><p>';  if (! empty ( $this->_tpl_vars['question']['description'] )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['question']['description'])) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '';  endif;  echo '</p><br style="clear:both;" />'; ?>