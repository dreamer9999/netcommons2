<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from registration_view_main_accept.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'registration_view_main_accept.html', 4, false),array('modifier', 'get_themes_image', 'registration_view_main_accept.html', 5, false),array('modifier', 'nl2br', 'registration_view_main_accept.html', 11, false),)), $this); ?>
<?php echo '';  echo '<div class="align-right"><a href="#" class="link" onclick="commonCls.print($(\'registration_print';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'), null, null, true, \'';  echo ((is_array($_tmp=$this->_tpl_vars['block_obj']['block_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;"><img src="';  echo ((is_array($_tmp="print.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_print_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_print_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></a></div><div id="registration_print';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><div class="registration_accept_message">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['registration']['accept_message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "registration_view_main_entry_data.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><div class="btn-bottom"><input id="registration_back';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="btn-width" type="button" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_back_to_top'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'registration_view_main_init\');" /></div><script class="nc_script" type="text/javascript">commonCls.focus($("registration_back';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));</script>'; ?>