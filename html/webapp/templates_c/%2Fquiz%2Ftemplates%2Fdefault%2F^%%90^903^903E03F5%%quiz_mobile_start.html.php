<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from quiz_mobile_start.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quiz_mobile_start.html', 5, false),)), $this); ?>
<?php echo '';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_mobile_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<form method="post" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><div><input type="hidden" name="action" value="quiz_action_main_start"><input type="hidden" name="quiz_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['quiz']['quiz_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="block_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><br />';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_mobile_image_authentication.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<input type="submit" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_answer_start'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['token_form'];  echo '';  echo $this->_tpl_vars['session_form'];  echo '</div></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_mobile_goto_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>