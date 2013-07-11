<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_reserve_details_location.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_reserve_details_location.html', 7, false),)), $this); ?>
<?php echo '<th class="nowrap" scope="row">';  echo $this->_tpl_vars['lang']['reservation_location'];  echo '</th><td>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['reserve']['location_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</td>'; ?>
