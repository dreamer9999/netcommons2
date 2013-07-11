<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from ../calendar_script.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../calendar_script.html', 2, false),)), $this); ?>
<script class="nc_script" type="text/javascript">
if(!calendarCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"]) {
	calendarCls["<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"] = new clsCalendar("<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
", <?php if (( ((is_array($_tmp=$_SESSION['calendar']['_id'][$this->_tpl_vars['block_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )): ?>"<?php echo ((is_array($_tmp=$_SESSION['calendar']['_id'][$this->_tpl_vars['block_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php else: ?>"<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?>);
}
</script>