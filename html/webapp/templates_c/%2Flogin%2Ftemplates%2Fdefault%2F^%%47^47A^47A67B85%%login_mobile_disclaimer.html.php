<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:32
         compiled from login_mobile_disclaimer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'login_mobile_disclaimer.html', 4, false),array('modifier', 'escape', 'login_mobile_disclaimer.html', 4, false),array('modifier', 'nl2br', 'login_mobile_disclaimer.html', 23, false),)), $this); ?>
<?php echo '';  echo '<div class="top_description">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['login_disclaimer_description'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['login_autoregist_disclaimer_ok'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['login_autoregist_disclaimer_ok'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</div><form action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"  method="get" >';  echo '<br /><div>';  echo $this->_tpl_vars['lang']['login_autoregist_disclaimer'];  echo '</div><br /><div align="center" style="text-align:center;">';  echo '<input type="submit" name="dispatch_login_view_mobile_autoregist" value="';  echo $this->_tpl_vars['lang']['login_autoregist_disclaimer_ok'];  echo '"  data-inline="true" />&nbsp;';  echo '<input type="submit" name="dispatch_login_view_mobile_init" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '"  data-inline="true" /></div><br /><p><span style="font-size:xx-small">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['autoregist_disclaimer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</span></p>';  echo '<br /><div align="center" style="text-align:center;">';  echo '<input type="submit" name="dispatch_login_view_mobile_autoregist" value="';  echo $this->_tpl_vars['lang']['login_autoregist_disclaimer_ok'];  echo '"  data-inline="true" />&nbsp;';  echo '<input type="submit" name="dispatch_login_view_mobile_init" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '"  data-inline="true" /></div><br /><input type="hidden" name="autoregist_disclaimer_ok" value="1" />';  echo $this->_tpl_vars['session_form'];  echo '</form>'; ?>