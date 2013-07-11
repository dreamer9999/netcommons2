<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from multidatabase_view_edit_metadata.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_edit_metadata.html', 1, false),array('modifier', 'get_image_url', 'multidatabase_view_edit_metadata.html', 5, false),array('modifier', 'sprintf', 'multidatabase_view_edit_metadata.html', 48, false),)), $this); ?>
<tr id="mdb_chg_row<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['metadata']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="mdb_chg_row">
		<td class="mdb_chg_seq mdb_metadata_detail_td">
		<a class="move_bar" href="#" onclick="return false;">
			<img src="<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp)); ?>
/images/multidatabase/move_bar.gif" alt="<?php echo ((is_array($_tmp=@_DRAGANDDROP_MOVE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" title="<?php echo ((is_array($_tmp=@_DRAGANDDROP_MOVE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
		</a>
	</td>
	<th class="nowrap align-left valign-middle mdb_metadata_detail_td" scope="row">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['metadata']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['metadata']['require_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_require_flag']; ?>

		<?php endif; ?>
		&nbsp;
		<?php if (((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['title_metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['metadata']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<span class="require">(<?php echo $this->_tpl_vars['lang']['mdb_type_key_metadata']; ?>
)</span>
		<?php endif; ?>
		<span class="mdb_setting_type">(
		<?php if (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_TEXT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_text']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_TEXTAREA)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_textarea']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_LINK)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_link']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_SECTION)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_section']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_MULTIPLE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_multiple']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_FILE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_file']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_IMAGE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_image']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_WYSIWYG)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_wysiwyg']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_AUTONUM)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_autonum']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_MAIL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_mail']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_DATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_date']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_INSERT_TIME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_insert_time']; ?>

		<?php elseif (((is_array($_tmp=$this->_tpl_vars['metadata']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_META_TYPE_UPDATE_TIME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo $this->_tpl_vars['lang']['mdb_type_update_time']; ?>

		<?php endif; ?>
		)</span>
	</th>
	<td class="mdb_setting_manage mdb_metadata_detail_td">
		<a class="syslink" href="#" title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['mdb_head_metadata_name_edit_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['metadata']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['metadata']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onclick="mdbCls['<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'].showPopupMetadata(event, <?php echo ((is_array($_tmp=$this->_tpl_vars['metadata']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
); return false;">
			<?php echo $this->_tpl_vars['lang']['_edit']; ?>

		</a>
		<?php if (((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['title_metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$this->_tpl_vars['metadata']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['_separator'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

			<a class="syslink" href="#" title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['mdb_head_metadata_name_del_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['metadata']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['metadata']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onclick="mdbCls['<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'].delMetadata(<?php echo ((is_array($_tmp=$this->_tpl_vars['metadata']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
, '<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_confirm'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['metadata']['name'])) : sprintf($_tmp, ($this->_tpl_vars['metadata']['name']))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'); return false;">
				<?php echo $this->_tpl_vars['lang']['_delete']; ?>

			</a>
		<?php endif; ?>
		&nbsp;
	</td>
</tr>