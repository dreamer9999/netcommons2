<?php /* Smarty version 2.6.12, created on 2013-07-11 10:28:08
         compiled from error.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.html', 1, false),)), $this); ?>
<?php echo ((is_array($_tmp=@ERROR_MESSAGE_PREFIX)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo $this->_reg_objects['errorList'][0]->getMessagesString(array(), $this);?>