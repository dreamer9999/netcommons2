<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from calendar_view_edit_auth.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_view_edit_auth.html', 10, false),)), $this); ?>
<?php echo '<form action="#" method="post" onsubmit="return false;"><div class="top_description">';  echo $this->_tpl_vars['lang']['calendar_auth_desc'];  echo '</div><table class="outer calendar_auth" summary="';  echo $this->_tpl_vars['lang']['calendar_summary'];  echo '">';  $this->assign('next_thread_num', 0);  echo '';  $this->assign('next_parent_id', 0);  echo '';  $this->assign('room_list', ((is_array($_tmp=$this->_tpl_vars['action']['room_arr'][$this->_tpl_vars['next_thread_num']][$this->_tpl_vars['next_parent_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./calendar_view_recursive_room.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</table><div class="btn-bottom"><input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick=\'calendarCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].regAuth(this.form); return false;\' />&nbsp;<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'calendar_view_main_init\'); return false;" /></div></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../calendar_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>