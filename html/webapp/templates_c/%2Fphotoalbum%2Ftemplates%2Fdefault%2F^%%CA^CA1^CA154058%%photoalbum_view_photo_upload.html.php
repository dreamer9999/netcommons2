<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from photoalbum_view_photo_upload.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_view_photo_upload.html', 3, false),array('modifier', 'get_themes_image', 'photoalbum_view_photo_upload.html', 4, false),)), $this); ?>
<?php echo '';  echo '<a id="photoalbum_photo_upload';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="syslink" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_photo_upload_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="photoalbumCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showPhotoUpload(event);return false;"><img class="icon" src="';  echo ((is_array($_tmp="add_file.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" alt="" title="" />';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_photo_upload'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>'; ?>