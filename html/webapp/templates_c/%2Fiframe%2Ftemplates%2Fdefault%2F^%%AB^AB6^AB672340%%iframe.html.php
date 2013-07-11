<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from iframe.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'iframe.html', 2, false),)), $this); ?>
<?php echo '<iframe src="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['iframe_obj']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="iframe" width="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['iframe_obj']['frame_width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" height="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['iframe_obj']['frame_height'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" scrolling="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['scrolling'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" frameborder="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['iframe_obj']['scrollframe_show'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">Sorry. This content use IFrame </iframe>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "iframe_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>