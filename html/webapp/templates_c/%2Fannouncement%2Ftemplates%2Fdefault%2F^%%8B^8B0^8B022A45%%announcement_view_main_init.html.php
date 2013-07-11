<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from announcement_view_main_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'announcement_view_main_init.html', 1, false),array('modifier', 'wysiwig_convert_url', 'announcement_view_main_init.html', 6, false),)), $this); ?>
<?php if (((is_array($_tmp=$_SESSION['_auth_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) >= _AUTH_CHIEF): ?>
<div class="widthmax"  title="<?php echo ((is_array($_tmp=@_DBLCLICK_EDIT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" ondblclick="announcementCls['<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'].announcementEditShow();" onmouseover="if(typeof(commonCls) != 'undefined') {commonCls.blockNotice(event, this);}">
<?php else: ?>
<div class="widthmax">
<?php endif; ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['content'])) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp)); ?>

	<div class="float-clear-div">&nbsp;</div>
	<?php if (((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""): ?>
		<br />
		<div id="announcement_more_hide<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
			<a class="syslink" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" href="#" onclick="commonCls.displayChange($('announcement_more_block<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')); commonCls.displayChange($('announcement_more_hide<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')); return false;">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

			</a>
		</div>
		<div id="announcement_more_block<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="display-none">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp)); ?>

			<br class="float-clear" />
			<a class="syslink" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['hide_more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" href="#" onclick="commonCls.displayChange($('announcement_more_block<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')); commonCls.displayChange($('announcement_more_hide<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
')); return false;">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['hide_more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

			</a>
		</div>
	<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "announcement_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>