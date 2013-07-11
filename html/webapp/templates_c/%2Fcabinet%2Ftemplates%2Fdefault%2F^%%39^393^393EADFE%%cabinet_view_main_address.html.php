<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from cabinet_view_main_address.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cabinet_view_main_address.html', 1, false),)), $this); ?>
<?php echo '';  if (( ((is_array($_tmp=$_REQUEST['prefix_id_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['folderPath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo $this->_tpl_vars['action']['folderPath'];  echo '';  endif;  echo ''; ?>