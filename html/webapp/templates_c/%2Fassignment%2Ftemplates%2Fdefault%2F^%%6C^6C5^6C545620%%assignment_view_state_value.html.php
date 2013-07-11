<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from assignment_view_state_value.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'assignment_view_state_value.html', 4, false),)), $this); ?>
<?php echo '';  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['activity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  echo $this->_tpl_vars['lang']['assignment_state_operation'];  echo '';  else:  echo '<span class="assignment_state_finish">';  echo $this->_tpl_vars['lang']['assignment_state_finish'];  echo '</span>';  endif;  echo ''; ?>