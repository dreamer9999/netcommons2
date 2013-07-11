<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from pm_view_filter_tag.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'pm_view_filter_tag.html', 2, false),)), $this); ?>
<dt class="pm_upd_flt_tag_process_dt pm_upd_flt_tag_process_tag">
  <input id="pm_form<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_filter_tag" class="pm_upd_flt_tag_process_dt_input" name="filter_actions[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="checkbox" <?php if (((is_array($_tmp=$this->_tpl_vars['checked'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>checked<?php else:  endif; ?> /><label for="pm_form<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_filter_tag"><?php echo $this->_tpl_vars['lang']['pm_action_add_tag']; ?>
</label></dt>
<dd class="pm_upd_flt_tag_process_dd">
  <select class="pm_upd_flt_tag_process_dd_select" name="filter_actions_params[<?php echo ((is_array($_tmp=$this->_tpl_vars['action_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_tag]">
    <option value="0"><?php echo $this->_tpl_vars['lang']['pm_action_add_tag']; ?>
</option>
	<?php $_from = ((is_array($_tmp=$this->_tpl_vars['options'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['default'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" selected><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
		<?php else: ?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
  </select>
</dd>