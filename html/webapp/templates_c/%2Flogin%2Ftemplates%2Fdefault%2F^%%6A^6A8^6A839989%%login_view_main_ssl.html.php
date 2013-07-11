<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from login_view_main_ssl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login_view_main_ssl.html', 2, false),)), $this); ?>
<?php echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['error_mes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<div class="deadline">';  echo $this->_tpl_vars['lang']['login_redirect_url_mes'];  echo '</div>';  endif;  echo '<div class="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['sslOuterClassName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><iframe id="login_ssl_iframe';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['formClassName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" scrolling="no" frameborder="0"></iframe><div class="login_popup_sslcancel_btn">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_cancel_button.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  if (((is_array($_tmp=$this->_tpl_vars['action']['closesite'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF):  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['autologin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1):  echo '<br class="login_offset_height" />';  endif;  echo '<div class="login_forgetpass_link"><a class="link" href="#" onclick="commonCls.sendPopupView(event, {\'action\':\'login_view_main_forgetpass\',\'prefix_id_name\':\'login_popup_forgetpass\'},{\'top_el\':$(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'),center_flag:1});return false;">';  echo $this->_tpl_vars['lang']['login_lost_password'];  echo '</a></div>';  endif;  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>

<script class="nc_script" type="text/javascript">
<!--
	if (browser.isIE && browser.version == 6 || browser.version == 7) {
		Element.addClassName($("login_ssl_iframe<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"), "login_popup_ie7padding");
	}

	<?php if (empty ( $this->_tpl_vars['action']['block_id'] ) && empty ( $this->_tpl_vars['action']['error_mes'] )): ?>
		loginCls['<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'].sslIframeSrc = "<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['ssl_base_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
?action=login_view_main_init&block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&parent_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&error_mes=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['error_mes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&http=<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&_redirect_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['redirect_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
";
	<?php else: ?>
		$('login_ssl_iframe<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
').src = "<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['ssl_base_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
?action=login_view_main_init&block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&parent_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&error_mes=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['error_mes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&http=<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&_redirect_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['redirect_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
";
	<?php endif; ?>
	loginCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].setButtonStyle($("login_cancel_button<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"));
//-->
</script>