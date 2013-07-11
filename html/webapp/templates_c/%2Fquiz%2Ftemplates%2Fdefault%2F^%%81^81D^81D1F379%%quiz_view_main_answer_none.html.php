<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from quiz_view_main_answer_none.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quiz_view_main_answer_none.html', 3, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['summary']['answer_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUIZ_ANSWER_NOT_MARK_VALUE):  echo '<span class="require">*</span>';  endif;  echo ''; ?>