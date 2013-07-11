<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:34
         compiled from menu_view_main_detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'menu_view_main_detail.html', 2, false),)), $this); ?>
<?php echo '';  $this->assign('now_thread_num', ((is_array($_tmp=$this->_tpl_vars['action']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('now_parent_id', ((is_array($_tmp=$this->_tpl_vars['action']['parent_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('menus', ((is_array($_tmp=$this->_tpl_vars['action']['menus'][$this->_tpl_vars['now_thread_num']][$this->_tpl_vars['now_parent_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_view_main_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>