<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_reserve_regist_reserve_flag.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_reserve_regist_reserve_flag.html', 4, false),)), $this); ?>
<?php echo '<th scope="row" class="nowrap"><label for="reservation_reserve_flag';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['reservation_reserve_flag'];  echo '</lable></th><td class="nowrap">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_view_switch_location.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td>'; ?>
