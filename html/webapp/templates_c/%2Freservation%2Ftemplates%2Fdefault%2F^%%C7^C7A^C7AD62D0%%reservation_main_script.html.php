<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from reservation_main_script.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_main_script.html', 3, false),array('modifier', 'substr', 'reservation_main_script.html', 4, false),array('modifier', 'date', 'reservation_main_script.html', 9, false),)), $this); ?>
<?php echo '<script class="nc_script" type="text/javascript">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['current_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $this->assign('current_time', ((is_array($_tmp=($this->_tpl_vars['action']['current_time']))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4)));  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['start_time_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == RESERVATION_DEF_START_TIME_FIXATION )):  echo '';  $this->assign('current_time', ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['display_start_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['start_time_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == RESERVATION_DEF_START_TIME_DEFAULT )):  echo '';  $this->assign('before_hour', ((is_array($_tmp=time()-3600)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('current_time', ((is_array($_tmp='H00')) ? $this->_run_mod_handler('date', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['before_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : date($_tmp, ((is_array($_tmp=$this->_tpl_vars['before_hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));  echo '';  else:  echo '';  $this->assign('current_time', ((is_array($_tmp='H00')) ? $this->_run_mod_handler('date', true, $_tmp, ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : date($_tmp, ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));  echo '';  endif;  echo 'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].setTimeFocus("';  echo ((is_array($_tmp=$this->_tpl_vars['current_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");</script>'; ?>