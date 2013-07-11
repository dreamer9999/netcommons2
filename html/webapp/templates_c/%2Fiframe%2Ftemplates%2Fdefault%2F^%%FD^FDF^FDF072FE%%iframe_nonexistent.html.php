<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from iframe_nonexistent.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iframe_nonexistent.html', 3, false),)), $this); ?>
<?php echo '<div class="outerdiv"><!--<a href="#" class="link" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'iframe_view_edit_init\');">';  echo $this->_tpl_vars['lang']['kochira'];  echo '</a>-->';  echo $this->_tpl_vars['lang']['iframe_nonexistent'];  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "iframe_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
