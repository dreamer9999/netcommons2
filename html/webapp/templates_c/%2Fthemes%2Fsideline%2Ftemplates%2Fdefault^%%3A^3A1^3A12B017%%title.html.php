<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:52
         compiled from ../../../../templates/headertitle/default/title.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../../templates/headertitle/default/title.html', 2, false),)), $this); ?>
<?php echo '';  if (((is_array($_tmp=$this->_tpl_vars['block_obj']['block_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<h2 class="th_';  echo ((is_array($_tmp=$this->_tpl_vars['main_theme_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_title nc_block_title" title="';  echo ((is_array($_tmp=$this->_tpl_vars['dblclick_edit'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['block_obj']['block_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h2>';  else:  echo '<h2 class="th_';  echo ((is_array($_tmp=$this->_tpl_vars['main_theme_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_title nc_block_title ';  if (((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'off'):  echo ' display-none';  endif;  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['dblclick_edit'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></h2>';  endif;  echo ''; ?>