<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from login_view_main_login_ok.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login_view_main_login_ok.html', 2, false),)), $this); ?>
<?php echo '<a onclick="commonCls.showUserDetail(event, \'';  echo ((is_array($_tmp=$_SESSION['_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;" href="#" class="link">';  echo ((is_array($_tmp=$_SESSION['_handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  echo '<a class="menulink header_btn" href="#" onclick="loginCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].loginLogout(event);return false;">';  echo $this->_tpl_vars['lang']['_logout'];  echo '</a>'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>