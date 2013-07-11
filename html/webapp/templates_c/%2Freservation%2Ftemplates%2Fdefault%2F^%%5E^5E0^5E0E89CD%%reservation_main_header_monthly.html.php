<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from reservation_main_header_monthly.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'reservation_main_header_monthly.html', 3, false),array('modifier', 'escape', 'reservation_main_header_monthly.html', 9, false),)), $this); ?>
<?php echo '';  $this->assign('lang_year', ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_monthly_year_format'])) ? $this->_run_mod_handler('date', true, $_tmp, ($this->_tpl_vars['action']['current_timestamp'])) : date($_tmp, ($this->_tpl_vars['action']['current_timestamp']))));  echo '';  $this->assign('lang_month', ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_monthly_month_format'])) ? $this->_run_mod_handler('date', true, $_tmp, ($this->_tpl_vars['action']['current_timestamp'])) : date($_tmp, ($this->_tpl_vars['action']['current_timestamp']))));  echo '<table class="reservation_head" summary=""><tr><td class="reservation_prev">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_main_prev_date.html", 'smarty_include_vars' => array('view_date' => ((is_array($_tmp=$this->_tpl_vars['action']['prev_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'image_alt' => $this->_tpl_vars['lang']['reservation_alt_prev_month'],'image_title' => $this->_tpl_vars['lang']['reservation_title_prev_month'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="reservation_this">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_main_this_date.html", 'smarty_include_vars' => array('display_type' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="reservation_next">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_main_next_date.html", 'smarty_include_vars' => array('view_date' => ((is_array($_tmp=$this->_tpl_vars['action']['next_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'image_alt' => $this->_tpl_vars['lang']['reservation_alt_next_month'],'image_title' => $this->_tpl_vars['lang']['reservation_title_next_month'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="reservation_switch_location">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_main_switch_location.html", 'smarty_include_vars' => array('view_location_id' => ((is_array($_tmp=$this->_tpl_vars['action']['reserve_block']['location_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'main_id' => ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr></table>'; ?>