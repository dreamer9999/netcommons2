<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from photoalbum_view_edit_list_current.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_view_edit_list_current.html', 3, false),)), $this); ?>
<?php echo '';  echo '<label for="photoalbum_current';  echo ((is_array($_tmp=$this->_tpl_vars['photoalbum']['photoalbum_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="photoalbum_current';  echo ((is_array($_tmp=$this->_tpl_vars['photoalbum']['photoalbum_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" name="current" value="';  echo ((is_array($_tmp=$this->_tpl_vars['photoalbum']['photoalbum_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="photoalbumCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].changeCurrent(';  echo ((is_array($_tmp=$this->_tpl_vars['photoalbum']['photoalbum_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');" /></label>'; ?>