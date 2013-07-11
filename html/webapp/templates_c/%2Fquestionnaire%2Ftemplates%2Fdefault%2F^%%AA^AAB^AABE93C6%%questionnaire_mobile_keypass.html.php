<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from questionnaire_mobile_keypass.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_mobile_keypass.html', 3, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['keypass_use_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_keypass_label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '<br /><input type="password" name="keypass_phrase" size=10><br />';  endif;  echo ''; ?>
