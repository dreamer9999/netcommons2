<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from calendar_view_main_help.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_view_main_help.html', 4, false),)), $this); ?>
<?php echo '<div class="outerdiv calendar_help">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['calendar_block']['select_room'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "calendar_view_recursive_room_flat.html", 'smarty_include_vars' => array('room_list' => $this->_tpl_vars['action']['enroll_room_arr'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $this->assign('next_thread_num', 0);  echo '';  $this->assign('next_parent_id', 0);  echo '';  $this->assign('room_list', ((is_array($_tmp=$this->_tpl_vars['action']['room_arr'][$this->_tpl_vars['next_thread_num']][$this->_tpl_vars['next_parent_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./calendar_view_recursive_room.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</div>'; ?>
