<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from photoalbum_view_main_photo_setting.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_view_main_photo_setting.html', 3, false),array('modifier', 'nl2br', 'photoalbum_view_main_photo_setting.html', 78, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['album']['photo_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '<script class="nc_script" type="text/javascript">';  if (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['size_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo 'var photoArea = $("photoalbum_photo_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");Element.setStyle(photoArea, {"width":"';  echo ((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo 'px"});Element.setStyle(photoArea, {"height":"';  echo ((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo 'px"});photoArea = null;photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].size_flag = true;';  else:  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].size_flag = false;';  endif;  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].photos = new Array();photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].photo_count = ';  echo ((is_array($_tmp=$this->_tpl_vars['action']['album']['photo_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ';if (browser.isIE) {';  if (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_FADE):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_FADE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_BLINDS):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_BLINDS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_CHECKERBOARD):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_CHECKERBOARD_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_STRIPS):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_STRIPS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_BARN):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_BARN_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_GRADIENTWIPE):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_GRADIENTWIPE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_IRIS):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_IRIS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_WHEEL):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_WHEEL_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_PIXELATE):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_PIXELATE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_RADIALWIPE):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_RADIALWIPE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_RANDOMBARS):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_RANDOMBARS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_SLIDE):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_SLIDE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_RANDOMDISSOLVE):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_RANDOMDISSOLVE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_SPIRAL):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_SPIRAL_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['photoalbum']['slide_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == PHOTOALBUM_SLIDE_TYPE_STRETCH):  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = "';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_STRETCH_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  else:  echo 'photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].slide_type = new Array("';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_FADE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_BLINDS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_CHECKERBOARD_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_STRIPS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_BARN_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_GRADIENTWIPE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_IRIS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_WHEEL_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_PIXELATE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_RADIALWIPE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_RANDOMBARS_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_SLIDE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_RANDOMDISSOLVE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_SPIRAL_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=@PHOTOALBUM_SLIDE_TYPE_STRETCH_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");';  endif;  echo '}</script>';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['photos'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['photo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['photo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['photo']):
        $this->_foreach['photo']['iteration']++;
 echo '<script class="nc_script" type="text/javascript">var photo = {"photo_id":"';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['photo_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","photo_name":"';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['photo']['photo_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '","src":".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['photo_path'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","photo_description":"';  echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['photo']['photo_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '","photo_vote_count":"';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['photo_vote_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","width":"';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","height":"';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","vote_authority":"';  echo ((is_array($_tmp=$this->_tpl_vars['photo']['vote_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"};photoalbumCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].photos.push(photo);photo = null;</script>';  endforeach; endif; unset($_from);  echo '';  endif;  echo ''; ?>