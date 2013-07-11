<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:53
         compiled from ../login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../login.html', 3, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$_SESSION['_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '0'):  echo '<div id="login_popup" class="login_popup">';  echo $this->_tpl_vars['loginHtml'];  echo '</div>';  endif;  echo ''; ?>