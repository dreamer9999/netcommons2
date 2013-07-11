<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:52
         compiled from block_main.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'block_main.html', 2, false),array('modifier', 'get_image_url', 'block_main.html', 5, false),)), $this); ?>
<?php echo '<table border="0" cellspacing="0" cellpadding="0" class="th_';  echo ((is_array($_tmp=$this->_tpl_vars['main_theme_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><tr><td class="th_';  echo ((is_array($_tmp=$this->_tpl_vars['main_theme_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_line"><img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" style="width:3px;" alt="" title="" /></td><td class="th_sideline_content">';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../../templates/headertitle/default/title.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['headermenu'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../../templates/default/headermenu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '<div class="content">';  echo $this->_tpl_vars['content_field'];  echo '</div></td></tr></table>'; ?>