<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:52
         compiled from block.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'block.html', 9, false),)), $this); ?>
<?php echo '';  $this->assign('main_theme_name', 'none');  echo '<table border="0" cellspacing="0" cellpadding="0" class="th_none widthmax"><tr><td class="th_none_content">';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../templates/headertitle/default/title.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['headermenu'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../templates/default/headermenu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '<div class="content">';  echo $this->_tpl_vars['content_field'];  echo '</div></td></tr></table>'; ?>