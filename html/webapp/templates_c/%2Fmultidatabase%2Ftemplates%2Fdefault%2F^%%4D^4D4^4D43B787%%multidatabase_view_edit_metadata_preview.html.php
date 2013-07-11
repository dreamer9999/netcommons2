<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from multidatabase_view_edit_metadata_preview.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_edit_metadata_preview.html', 5, false),)), $this); ?>
<?php echo '';  echo '<div class="outerdiv">';  $this->assign('mode', 'preview');  echo '';  $this->assign('data_pos_1', ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('data_pos_2', ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('data_pos_3', ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('data_pos_4', ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['4'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_common_metadata.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../multidatabase_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>'; ?>