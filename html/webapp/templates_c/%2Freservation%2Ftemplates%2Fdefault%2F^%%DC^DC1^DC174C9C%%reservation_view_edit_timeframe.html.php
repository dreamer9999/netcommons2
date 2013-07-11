<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_view_edit_timeframe.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_view_edit_timeframe.html', 2, false),array('modifier', 'get_themes_image', 'reservation_view_edit_timeframe.html', 4, false),array('modifier', 'timezone_date', 'reservation_view_edit_timeframe.html', 23, false),array('modifier', 'sprintf', 'reservation_view_edit_timeframe.html', 32, false),)), $this); ?>
<div class="outerdiv">
	<form id="reservation_timeframe_form<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" action="#" method="post" onsubmit="return false;">
		<div class="top_description align-right">
			<img class="icon" src="<?php echo ((is_array($_tmp="add.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp)); ?>
" alt="" title="" />
			<a href="#" class="syslink" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_timeframe_add_message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" onclick="commonCls.sendPopupView(event,{'action':'reservation_view_edit_timeframe_entry','prefix_id_name':'popup_reservation_timeframe_add'}, {'top_el':$('<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'),'modal_flag':true}); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_timeframe_add_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
		</div>

		<div>

		<?php if (((is_array($_tmp=$this->_tpl_vars['action']['timeframe_list_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0): ?>
			<?php echo $this->_tpl_vars['lang']['reservation_timeframe_no_exists']; ?>

		<?php else: ?>

			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['action']['timeframe_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['timeframe']):
?>

				<table cellspacing="0" cellpadding="0" summary="" id="reservation_timeframe_id_<?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="reservation_timeframe">
					<tbody>
						<tr>
							<td>
								<div class="reservation_timeframe_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
							</td>
							<td>
								<div class="reservation_timeframe_time"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['timeframe']['start_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('timezone_date', true, $_tmp, false, ((is_array($_tmp=$this->_tpl_vars['lang']['_short_time_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date($_tmp, false, ((is_array($_tmp=$this->_tpl_vars['lang']['_short_time_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_time_pause'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['timeframe']['end_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('timezone_date', true, $_tmp, false, ((is_array($_tmp=$this->_tpl_vars['lang']['_short_time_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date($_tmp, false, ((is_array($_tmp=$this->_tpl_vars['lang']['_short_time_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))); ?>
</div>
								<?php if (( ((is_array($_tmp=$_SESSION['_timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$this->_tpl_vars['timeframe']['timezone_offset'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>
									<div class="reservation_timeframe_time_original"><?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['timezone_string'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['start_time_original_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_time_pause'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['end_time_original_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
								<?php endif; ?>
							</td>
							<td>
								<div class="reservation_timeframe_color" style="background-color:<?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
;"></div>
							</td>
							<td class="align-right nowrap">
								<a href="#" class="syslink" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_edit_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))); ?>
" onclick="commonCls.sendPopupView(event,{action:'reservation_view_edit_timeframe_entry','prefix_id_name':'popup_reservation_timeframe_entry',timeframe_id:<?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
}, {'top_el':$('<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'),'modal_flag':true}); return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['_edit'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
								<?php echo $this->_tpl_vars['lang']['_separator']; ?>

								<a class="syslink" href="#" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))); ?>
" onclick="if (commonCls.confirm('<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_timeframe_delete_confirm_message'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))); ?>
')) {commonCls.sendPost('<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
',{action:'reservation_action_edit_timeframe_delete',timeframe_id:<?php echo ((is_array($_tmp=$this->_tpl_vars['timeframe']['timeframe_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
},{target_el:$('<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')}); } return false;"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['_delete'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
							</td>
						</tr>
					</tbody>
				</table>

			<?php endforeach; else: ?>
				<?php echo $this->_tpl_vars['lang']['reservation_timeframe_no_exists']; ?>

			<?php endif; unset($_from); ?>
		<?php endif; ?>

		</div>
	</form>
</div>