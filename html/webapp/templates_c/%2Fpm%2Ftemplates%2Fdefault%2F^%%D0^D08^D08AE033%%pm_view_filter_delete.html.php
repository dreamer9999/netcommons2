<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:34
         compiled from pm_view_filter_delete.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'pm_view_filter_delete.html', 1, false),)), $this); ?>
<dt class="pm_upd_flt_tag_process_dt"><input id="pm_form<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_filter_delete" class="pm_upd_flt_tag_process_dt_input" name="filter_actions[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" type="checkbox" <?php if (((is_array($_tmp=$this->_tpl_vars['checked'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>checked<?php else:  endif; ?> /><label for="pm_form<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
_filter_delete"><?php echo $this->_tpl_vars['lang']['pm_filter_remove']; ?>
</label></dt>