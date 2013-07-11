<?php /* Smarty version 2.6.12, created on 2013-07-11 10:33:48
         compiled from menu_action_edit_addpage.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'menu_action_edit_addpage.html', 2, false),)), $this); ?>
<?php echo '';  $this->assign('visibility_flag', ((is_array($_tmp=$this->_tpl_vars['action']['visibility_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('menus', ((is_array($_tmp=$this->_tpl_vars['action']['ins_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_view_edit_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>