<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from bbs_mobile_post_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_post_list.html', 4, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_THREAD_VALUE):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_FLAT_VALUE):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo ''; ?>