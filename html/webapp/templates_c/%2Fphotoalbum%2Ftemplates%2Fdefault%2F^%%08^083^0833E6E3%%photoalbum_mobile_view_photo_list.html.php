<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:34
         compiled from photoalbum_mobile_view_photo_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_mobile_view_photo_list.html', 3, false),)), $this); ?>
<?php echo '<h3>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['album']['album_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h3>';  if (((is_array($_tmp=$this->_tpl_vars['action']['photoCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "photoalbum_mobile_view_photo_list_operation.html", 'smarty_include_vars' => array('operationPosition' => 'head')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<div class="photolist_';  echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['photos'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['photo_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['photo_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['photo']):
        $this->_foreach['photo_list']['iteration']++;
 echo '<a href="?action=photoalbum_view_mobile_photo&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;album_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['album_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;photo_id=';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['photo_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;seq=';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['photo_sequence'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><img src=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['photo_path'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;w=50';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" width="50" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['photo_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" style="margin-left:5px;margin-top:5px;"/></a>';  endforeach; endif; unset($_from);  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "photoalbum_mobile_view_photo_list_operation.html", 'smarty_include_vars' => array('operationPosition' => 'foot')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_no_photo'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '<br /><div style="text-align:right;"><a href="?action=photoalbum_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div>'; ?>

<?php if (((is_array($_tmp=$_SESSION['_smartphone_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON): ?>
<script type="text/javascript">
	$(".photolist_<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
").bind( "swiperight" );
	$(".photolist_<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
").bind( "swipeleft" );
	<?php if (((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0): ?>
		$(".photolist_<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
").bind( "swiperight", function(e) {
			$.mobile.changePage("?action=photoalbum_view_mobile_list&block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&album_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['album_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&pageNumber=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pagePrevious'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
",{ transition: "slide", reverse:"true"});
			e.preventDefault();
		});
	<?php else: ?>
		$(".photolist_<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
").bind( "swiperight", function(e) {
			$(this).nc_jqm_alert("<?php echo $this->_tpl_vars['lang']['photoalbum_no_more_photos']; ?>
");
		});
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['action']['pageNext'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) < ((is_array($_tmp=$this->_tpl_vars['action']['pageEnd'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))): ?>
		$(".photolist_<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
").bind( "swipeleft", function(e) {
			$.mobile.changePage("?action=photoalbum_view_mobile_list&block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&album_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['album_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&pageNumber=<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNext'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
");
			e.preventDefault();
		});
	<?php else: ?>
		$(".photolist_<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
").bind( "swipeleft", function(e) {
			$(this).nc_jqm_alert("<?php echo $this->_tpl_vars['lang']['photoalbum_no_more_photos']; ?>
");
		});
	<?php endif; ?>
</script>
<?php endif; ?>