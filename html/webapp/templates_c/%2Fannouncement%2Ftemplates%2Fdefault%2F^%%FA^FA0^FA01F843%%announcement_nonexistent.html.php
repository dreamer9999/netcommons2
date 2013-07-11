<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from announcement_nonexistent.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'announcement_nonexistent.html', 1, false),)), $this); ?>
<?php if (((is_array($_tmp=$_SESSION['_auth_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) >= _AUTH_CHIEF): ?>
<div title="<?php echo ((is_array($_tmp=@_DBLCLICK_EDIT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" ondblclick="announcementCls['<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'].announcementEditShow();" onmouseover="if(typeof(commonCls) != 'undefined') {commonCls.blockNotice(event, this);}">
<?php else: ?>
<div>
<?php endif; ?>
<?php echo $this->_tpl_vars['lang']['announcement_noexists']; ?>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "announcement_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>