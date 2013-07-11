<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from photoalbum_view_main_slide.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_view_main_slide.html', 3, false),array('modifier', 'get_image_url', 'photoalbum_view_main_slide.html', 4, false),)), $this); ?>
<?php echo '';  echo '<div id="photoalbum_photo_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="photoalbum_photo_area"><img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" id="photoalbum_photo';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="photoalbum_photo" alt="" title="" /></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../photoalbum_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "photoalbum_view_main_photo_setting.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['album']['photo_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '<script class="nc_script" type="text/javascript">photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].selectPhoto();photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].startSlide(';  echo ((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');</script>';  endif;  echo ''; ?>