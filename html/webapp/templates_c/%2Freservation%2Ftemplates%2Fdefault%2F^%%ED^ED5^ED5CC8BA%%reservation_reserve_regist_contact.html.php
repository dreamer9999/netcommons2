<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_reserve_regist_contact.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_reserve_regist_contact.html', 4, false),)), $this); ?>
<?php echo '<th scope="row" class="nowrap"><label for="contact';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_contact'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</lable></th><td class="nowrap"><input id="contact';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="text" type="text" name="contact" value="';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['contact'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></td>'; ?>
