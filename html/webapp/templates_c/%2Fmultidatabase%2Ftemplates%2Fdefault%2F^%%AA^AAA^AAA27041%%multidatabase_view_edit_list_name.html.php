<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:34
         compiled from multidatabase_view_edit_list_name.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_edit_list_name.html', 3, false),)), $this); ?>
<?php echo '';  echo '<label for="mdb_current';  echo ((is_array($_tmp=$this->_tpl_vars['mdb']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['mdb']['multidatabase_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</label>'; ?>