<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_view_edit_style_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_view_edit_style_init.html', 3, false),)), $this); ?>
<?php echo '<form id="form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" action="#" method="post" onsubmit="return false;"><div class="outerdiv"><table class="outer" summary="';  echo $this->_tpl_vars['lang']['reservation_summary'];  echo '"><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_disp_type.html", 'smarty_include_vars' => array('display_type' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == RESERVATION_DEF_LOCATION )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_category.html", 'smarty_include_vars' => array('current_category_id' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_category.html", 'smarty_include_vars' => array('current_category_id' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</tr><tr class="row reservation_style_location_tr">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_location.html", 'smarty_include_vars' => array('current_location_id' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['location_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_timeframe_type.html", 'smarty_include_vars' => array('reserve_block' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_default_time.html", 'smarty_include_vars' => array('reserve_block' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr><tr class="row">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_style_disp_interval.html", 'smarty_include_vars' => array('display_interval' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['display_interval'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</tr></table></div><div class="btn-bottom"><input class="btn-width" name="regist" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeStyle(this.form); return false;\' />&nbsp;<input class="btn-width" name="cancel" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick=\'commonCls.sendView("';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","reservation_view_main_init"); return false;\' /></div></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../reservation_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">reservationCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].switchDispType($("form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));reservationCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].switchStartTime($("form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));</script>'; ?>