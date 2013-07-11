<?php /* Smarty version 2.6.12, created on 2013-07-11 10:33:45
         compiled from menu_script.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'menu_script.html', 2, false),)), $this); ?>
<script class="nc_script" type="text/javascript">
if(!menuCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"]) {
	menuCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"] = new clsMenu("<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
");
}
<?php if (((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'menu_view_main_init'): ?>
menuCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].menuMainInit();
<?php elseif (((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'menu_view_edit_init'): ?>
menuCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"].menuEditInit(<?php if (((is_array($_tmp=$this->_tpl_vars['action']['main_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['block_obj']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>true<?php else: ?>false<?php endif; ?>,<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['menu_edit_left_margin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
,<?php if (((is_array($_tmp=$this->_tpl_vars['action']['flat_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>true<?php else: ?>false<?php endif; ?>);
<?php endif; ?>
</script>