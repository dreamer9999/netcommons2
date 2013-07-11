<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_view_edit_location_regist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_view_edit_location_regist.html', 3, false),)), $this); ?>
<?php echo '<form id="reservation_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" action="#" method="post" onsubmit="return false;"><div class="outerdiv"><table class="outer" summary="';  echo $this->_tpl_vars['lang']['reservation_summary'];  echo '"><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_location_name.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_time_table.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_category.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_authority.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_room_select.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_contact.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_location_regist_description.html", 'smarty_include_vars' => array('location' => $this->_tpl_vars['action']['location'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr></table></div><div class="btn-bottom">';  if (( ((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'reservation_view_edit_location_add' )):  echo '<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].addLocation(this.form); return false;\' />&nbsp;<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick=\'commonCls.sendView("';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","reservation_view_main_init"); return false;\' />';  else:  echo '<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].modifyLocation(this.form); return false;\' />&nbsp;<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick=\'commonCls.sendView("';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","reservation_view_edit_location_init"); return false;\' />';  endif;  echo '<input type="hidden" name="location_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['location']['location_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></div></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../reservation_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].initLocationRegist("';  echo ((is_array($_tmp=$this->_tpl_vars['action']['location']['add_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");commonCls.focus("';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");</script>'; ?>