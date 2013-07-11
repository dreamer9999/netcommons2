<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:32
         compiled from journal_mobile_detail_feature.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'journal_mobile_detail_feature.html', 3, false),array('modifier', 'img_style_rgb_to_hex', 'journal_mobile_detail_feature.html', 16, false),array('modifier', 'wysiwig_convert_url', 'journal_mobile_detail_feature.html', 16, false),array('modifier', 'html_to_text', 'journal_mobile_detail_feature.html', 18, false),array('modifier', 'nl2br', 'journal_mobile_detail_feature.html', 18, false),)), $this); ?>

<h6>
	<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )): ?>
		<a href="?action=journal_view_main_detail&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;html_flag=<?php echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;more_flag=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
			<?php echo $this->_tpl_vars['lang']['_mobile_view_text']; ?>

		</a>
	<?php else: ?>
		<a href="?action=journal_view_main_detail&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;html_flag=<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;more_flag=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
			<?php echo $this->_tpl_vars['lang']['_mobile_view_html']; ?>

		</a>
	<?php endif; ?>
</h6>
<br />

<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )): ?>
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['post']['content'])) ? $this->_run_mod_handler('img_style_rgb_to_hex', true, $_tmp) : img_style_rgb_to_hex($_tmp)))) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp)); ?>

<?php else: ?>
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['post']['content'])) ? $this->_run_mod_handler('html_to_text', true, $_tmp) : html_to_text($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<?php endif; ?>
<br style="clear:both;" />

<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['post']['more_content'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )): ?>
	<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF )): ?>
		<br /><br />
		<a href="?action=journal_view_main_detail&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;more_flag=<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  if (! is_null ( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>&amp;html_flag=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif;  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

		</a>
	<?php else: ?>
		<br />
		<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )): ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['post']['more_content'])) ? $this->_run_mod_handler('img_style_rgb_to_hex', true, $_tmp) : img_style_rgb_to_hex($_tmp)))) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp)); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['more_content'])) ? $this->_run_mod_handler('html_to_text', true, $_tmp) : html_to_text($_tmp)); ?>

		<?php endif; ?>
		<br style="clear:both;" />
		<br />
		<a href="?action=journal_view_main_detail&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;more_flag=<?php echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  if (! is_null ( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>&amp;html_flag=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif;  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['hide_more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

		</a>
	<?php endif; ?>
<?php endif; ?>

<br />
<br />

<?php if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['active_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
	<div>
		<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>
			<?php echo $this->_tpl_vars['lang']['journal_vote_num']; ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['vote_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)
		<?php endif; ?>

		<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['comment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>
			<?php echo $this->_tpl_vars['lang']['_mobile_separator']; ?>

		<?php endif; ?>

		<?php if (( ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['comment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>
			<a href="?action=journal_view_main_detail&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;mobile_comment_flag=<?php echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
				<?php echo $this->_tpl_vars['lang']['journal_comment']; ?>
(<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['comment_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
)
			</a>
		<?php endif; ?>

		<br />
		<?php if (((is_array($_tmp=$this->_tpl_vars['action']['post']['has_edit_auth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<a href="?action=journal_view_main_post&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;j_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['journal_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
				<?php echo $this->_tpl_vars['lang']['_edit']; ?>

			</a>
			<?php echo $this->_tpl_vars['lang']['_mobile_separator']; ?>

			<a href="?action=journal_view_mobile_post_delete&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;j_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['journal_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&amp;p_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
				<?php echo $this->_tpl_vars['lang']['_delete']; ?>

			</a>
		<?php endif; ?>
	</div>
<?php endif; ?>