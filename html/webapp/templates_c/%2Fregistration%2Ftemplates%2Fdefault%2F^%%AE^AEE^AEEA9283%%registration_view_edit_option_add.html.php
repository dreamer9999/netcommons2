<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from registration_view_edit_option_add.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'registration_view_edit_option_add.html', 4, false),)), $this); ?>
<?php echo '';  echo '<table>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "registration_view_edit_option.html", 'smarty_include_vars' => array('iteration' => ((is_array($_tmp=$this->_tpl_vars['action']['option_iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</table>'; ?>