<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_reserve_details_description.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wysiwig_convert_url', 'reservation_reserve_details_description.html', 7, false),)), $this); ?>
<?php echo '<th class="nowrap" scope="row">';  echo $this->_tpl_vars['lang']['reservation_description'];  echo '</th><td>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['reserve']['description'])) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '</td>'; ?>
