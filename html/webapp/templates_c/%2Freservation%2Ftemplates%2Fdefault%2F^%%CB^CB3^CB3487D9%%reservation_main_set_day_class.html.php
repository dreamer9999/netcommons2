<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from reservation_main_set_day_class.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_main_set_day_class.html', 3, false),)), $this); ?>
<?php echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['holiday_list'][$this->_tpl_vars['set_date']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo 'reservation_holiday';  elseif (( ((is_array($_tmp=$this->_tpl_vars['wday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 7 == 0 )):  echo 'reservation_sunday';  elseif (( ((is_array($_tmp=$this->_tpl_vars['wday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % 7 == 6 )):  echo 'reservation_saturday';  else:  echo 'reservation_weekday';  endif;  echo ''; ?>