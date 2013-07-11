<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from journal_view_edit_create_trackback.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'journal_view_edit_create_trackback.html', 1, false),)), $this); ?>
<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_journal_trackback_detail" style="display:<?php if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['trackback_transmit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>block;<?php else: ?>none;<?php endif; ?>">
	<div class="hr"></div>
	<span class="separator"><?php echo $this->_tpl_vars['lang']['journal_trackback_send_blog']; ?>
</span>
	<label>
		<input id="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_transmit_blogname" size="60" type="text" value="<?php if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['transmit_blogname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['transmit_blogname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  else:  echo $this->_tpl_vars['lang']['journal_trackback_send_blog_detail'];  endif; ?>" name="transmit_blogname"/>
	</label>
	<div class="note">
		<?php echo $this->_tpl_vars['lang']['journal_trackback_send_readme']; ?>

	</div>
	<div class="hr"></div>
</div>