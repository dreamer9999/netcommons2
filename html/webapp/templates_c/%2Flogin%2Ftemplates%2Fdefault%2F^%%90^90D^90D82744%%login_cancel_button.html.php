<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:32
         compiled from login_cancel_button.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login_cancel_button.html', 2, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['action']['error_mes'] )): ?>
	<input id="login_cancel_button<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="login_cancel_button" type="button" value="<?php echo $this->_tpl_vars['lang']['_cancel']; ?>
" onclick="location.href=_nc_base_url+_nc_index_file_name;" onmouseover="Element.addClassName(this, 'login_cancel_button_hover');" onmouseout="Element.removeClassName(this, 'login_cancel_button_hover');" onfocus="Element.addClassName(this, 'login_cancel_button_hover');" onblur="Element.removeClassName(this, 'login_cancel_button_hover');" />
<?php elseif (((is_array($_tmp=$this->_tpl_vars['action']['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>
	<input id="login_cancel_button<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="login_cancel_button" type="button" value="<?php echo $this->_tpl_vars['lang']['_cancel']; ?>
" onclick="commonCls.displayNone($('login_popup'));return false;" onmouseover="Element.addClassName(this, 'login_cancel_button_hover');" onmouseout="Element.removeClassName(this, 'login_cancel_button_hover');" onfocus="Element.addClassName(this, 'login_cancel_button_hover');" onblur="Element.removeClassName(this, 'login_cancel_button_hover');" />
<?php else: ?>
	<input id="login_cancel_button<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="login_cancel_button visible-hide" type="button" value="<?php echo $this->_tpl_vars['lang']['_cancel']; ?>
" />
<?php endif; ?>