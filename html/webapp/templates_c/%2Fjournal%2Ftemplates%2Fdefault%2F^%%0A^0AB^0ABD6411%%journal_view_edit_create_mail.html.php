<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from journal_view_edit_create_mail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'journal_view_edit_create_mail.html', 1, false),array('modifier', 'regex_replace', 'journal_view_edit_create_mail.html', 29, false),)), $this); ?>
<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_journal_mail_setting_detail" style="display: <?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['mail_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>block;<?php else: ?>none;<?php endif; ?>">
	<div class="hr"></div>
	<?php echo $this->_tpl_vars['lang']['journal_mail_authority']; ?>
<br />
	<label class="disable_lbl">
		<input type="checkbox" disabled="disabled" checked="checked" />
 		<input type="hidden" name="mail_authority[<?php echo ((is_array($_tmp=@_AUTH_CHIEF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
]" value="<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
		<?php echo ((is_array($_tmp=@_AUTH_CHIEF_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

	</label>
	<label for="journal_mail_authority<?php echo ((is_array($_tmp=@_AUTH_MODERATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
 		<input id="journal_mail_authority<?php echo ((is_array($_tmp=@_AUTH_MODERATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="checkbox" name="mail_authority[<?php echo ((is_array($_tmp=@_AUTH_MODERATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
]" value="<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onclick="commonCls.changeAuthority(this, '<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');" />
		<?php echo ((is_array($_tmp=@_AUTH_MODERATE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

	</label>
	<label for="journal_mail_authority<?php echo ((is_array($_tmp=@_AUTH_GENERAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
		<input id="journal_mail_authority<?php echo ((is_array($_tmp=@_AUTH_GENERAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="checkbox" name="mail_authority[<?php echo ((is_array($_tmp=@_AUTH_GENERAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
]" value="<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onclick="commonCls.changeAuthority(this, '<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');" />
		<?php echo ((is_array($_tmp=@_AUTH_GENERAL_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

	</label>
	<label for="journal_mail_authority<?php echo ((is_array($_tmp=@_AUTH_GUEST)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
		<input id="journal_mail_authority<?php echo ((is_array($_tmp=@_AUTH_GUEST)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="checkbox" name="mail_authority[<?php echo ((is_array($_tmp=@_AUTH_GUEST)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
]" value="<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onclick="commonCls.changeAuthority(this, '<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
');" />
		<?php echo ((is_array($_tmp=@_AUTH_GUEST_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

	</label>
	<div class="hr"></div>
	<?php echo $this->_tpl_vars['lang']['journal_mail_send_title']; ?>

	<label>
		<input class="text" type="text" value="<?php if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['mail_subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ""):  echo $this->_tpl_vars['lang']['journal_mail_send_title_detail'];  else:  echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['mail_subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif; ?>" name="mail_subject"/>
	</label>
	<div class="hr"></div>
	<?php echo $this->_tpl_vars['lang']['journal_mail_send_content_title']; ?>
<br/>
	<label>
		<textarea class="mail_body" name="mail_body"><?php if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['mail_body'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ""):  echo ((is_array($_tmp=$this->_tpl_vars['lang']['journal_mail_send_content_detail'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/<br \/>/", "\n") : smarty_modifier_regex_replace($_tmp, "/<br \/>/", "\n"));  else:  echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['mail_body'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif; ?></textarea>
	</label>
	<div class="note">
		<?php echo $this->_tpl_vars['lang']['journal_mail_note']; ?>

	</div>
</div>