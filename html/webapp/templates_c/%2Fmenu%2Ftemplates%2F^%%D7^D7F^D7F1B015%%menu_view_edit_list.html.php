<?php /* Smarty version 2.6.12, created on 2013-07-11 10:33:45
         compiled from menu_view_edit_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'menu_view_edit_list.html', 2, false),array('modifier', 'get_image_url', 'menu_view_edit_list.html', 45, false),array('modifier', 'sprintf', 'menu_view_edit_list.html', 96, false),array('modifier', 'get_themes_image', 'menu_view_edit_list.html', 97, false),)), $this); ?>
<?php echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['menus'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
 echo '';  echo '';  echo '';  $this->assign('now_page_id', ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('next_thread_num', ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('thread_num', ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('display_flag', ((is_array($_tmp=$this->_tpl_vars['action']['main_active_node_arr'][$this->_tpl_vars['now_page_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['main_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $this->assign('class_name', 'nowrap highlight');  echo '';  else:  echo '';  $this->assign('class_name', 'nowrap');  echo '';  endif;  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_PUBLIC):  echo '';  $this->assign('top_class_name', 'menu_top_public');  echo '';  $this->assign('space_type_class_name', 'menu_public');  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP):  echo '';  $this->assign('top_class_name', 'menu_top_group');  echo '';  $this->assign('space_type_class_name', 'menu_group');  echo '';  endif;  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['menu']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $this->assign('top_class_name', 'menu_top_private');  echo '';  $this->assign('space_type_class_name', 'menu_private');  echo '';  endif;  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo '';  $this->assign('now_margin', ((is_array($_tmp=$this->_tpl_vars['thread_num']*$this->_tpl_vars['conf']['menu_edit_top_left_margin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  else:  echo '';  $this->assign('now_margin', ((is_array($_tmp=$this->_tpl_vars['thread_num']*$this->_tpl_vars['conf']['menu_edit_left_margin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  endif;  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['menu']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" && ! ( ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['menu']['display_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF && ((is_array($_tmp=$this->_tpl_vars['menu']['authority_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) < _AUTH_CHIEF )):  echo '<div id="_menu';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  if (((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo 'top';  elseif (( ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 && ((is_array($_tmp=$this->_tpl_vars['menu']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo 'group';  elseif (( ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_PUBLIC && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) || ( ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2 && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['parent_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="menu_row_top';  if (( ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_PUBLIC && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) || ( ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 2 && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' _menu_sub_group';  endif;  echo '" style="margin-left:';  echo ((is_array($_tmp=$this->_tpl_vars['now_margin'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo 'px;"><table cellspacing="0" cellpadding="0" class="';  echo ((is_array($_tmp=$this->_tpl_vars['class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' menu_edit_top_outer"><tr><td>';  if (((is_array($_tmp=$this->_tpl_vars['menu']['chgseq_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '<a class="move_bar" href="#" onclick="return false;" title="';  echo ((is_array($_tmp=@_DRAGANDDROP_MOVE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  if (((is_array($_tmp=$this->_tpl_vars['class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 'nowrap'):  echo '<img class="_menu_displayseq" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/menu/move_bar_active.gif" alt="';  echo ((is_array($_tmp=@_DRAGANDDROP_MOVE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  else:  echo '<img class="_menu_displayseq" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/menu/move_bar.gif" alt="';  echo ((is_array($_tmp=@_DRAGANDDROP_MOVE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  endif;  echo '</a>';  else:  echo '<img class="menu_none_displayseq" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" alt="" />';  endif;  echo '</td><td class="_menu_node_type ';  if (((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'menu_room';  elseif (((is_array($_tmp=$this->_tpl_vars['menu']['node_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1):  echo 'menu_node';  else:  echo 'menu_leaf';  endif;  echo '">';  if (((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo '';  $this->assign('line_title', $this->_tpl_vars['lang']['menu_img_room']);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['menu']['node_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1):  echo '';  echo '';  $this->assign('line_title', $this->_tpl_vars['lang']['menu_img_category']);  echo '';  else:  echo '';  echo '';  $this->assign('line_title', $this->_tpl_vars['lang']['menu_img_page']);  echo '';  endif;  echo '<img class="menu_bar_img" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['line_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['line_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></td><td class="menu_visibility_td">';  if (((is_array($_tmp=$this->_tpl_vars['menu']['visible_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != false):  echo '<a href="#" onclick="menuCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].chgVisibilityPage(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  if (( isset ( $this->_tpl_vars['visibility_flag'] ) && ((is_array($_tmp=$this->_tpl_vars['visibility_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0 && ( ((is_array($_tmp=$this->_tpl_vars['action']['flat_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF || ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _SPACE_TYPE_PUBLIC ) ) || ((is_array($_tmp=$this->_tpl_vars['menu']['visibility_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo '<img class="_menuvisibility valign-middle" id="_menuvisibility';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/menu/off.gif" alt="';  echo $this->_tpl_vars['lang']['menu_visibility_off'];  echo '" title="';  echo $this->_tpl_vars['lang']['menu_visibility_off'];  echo '" />';  else:  echo '<img class="_menuvisibility valign-middle" id="_menuvisibility';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/menu/on.gif" alt="';  echo $this->_tpl_vars['lang']['menu_visibility_on'];  echo '" title="';  echo $this->_tpl_vars['lang']['menu_visibility_on'];  echo '" />';  endif;  echo '</a>';  elseif (((is_array($_tmp=$this->_tpl_vars['menu']['edit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '<div id="_menuvisibility';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="menu_visibility_img"></div>';  else:  echo '';  echo '<div class="menu_visibility_img"></div>';  endif;  echo '</td><td class="menu_main_edit_td"><a id="_menutop';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_menutop link menulink ';  if (((is_array($_tmp=$this->_tpl_vars['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['top_class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['space_type_class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo ' _menutop_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' nowrap"';  if (((is_array($_tmp=$this->_tpl_vars['menu']['node_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1):  echo ' onclick="menuCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].menuNodeClick(event,\'';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',true,';  if (((is_array($_tmp=$this->_tpl_vars['menu']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo 'false';  else:  echo 'true';  endif;  echo ');"';  else:  echo ' onclick="menuCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].menuleafClick(this,\'';  echo @BASE_URL;  echo '';  echo @INDEX_FILE_NAME;  echo '?action=';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (((is_array($_tmp=$this->_tpl_vars['menu']['parameters'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '&amp;';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['parameters'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',';  if (((is_array($_tmp=$this->_tpl_vars['menu']['edit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo 'true';  else:  echo 'false';  endif;  echo ');"';  endif;  echo ' style="width:';  if (((is_array($_tmp=$this->_tpl_vars['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 0):  echo '150px;';  else:  echo '170px;';  endif;  echo 'overflow:hidden;display:block;">';  if (((is_array($_tmp=$this->_tpl_vars['menu']['edit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true && ( ((is_array($_tmp=$this->_tpl_vars['menu']['edit_mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$this->_tpl_vars['action']['main_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<span><input class="menu_pagename_text" name="page_name" type="text" value="';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></span>';  else:  echo '<span';  if (((is_array($_tmp=$this->_tpl_vars['menu']['edit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == false):  echo ' class="menu_lbl_disabled"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>';  endif;  echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['menu']['display_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF):  echo '<span class="menu_prepared">';  echo $this->_tpl_vars['lang']['menu_prepared'];  echo '</span>';  endif;  echo '</a></td>';  if (((is_array($_tmp=$this->_tpl_vars['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 0 && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['menu']['edit_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '<td class="menu_del_btn"><a href="#" onclick="if (!commonCls.confirm(\'';  echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['menu_delete_confirm'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['menu']['page_name'])) : sprintf($_tmp, ($this->_tpl_vars['menu']['page_name']))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')) return false; menuCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].delPage(\'';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'_menu';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  if (((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo 'top';  elseif (( ((is_array($_tmp=$this->_tpl_vars['menu']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 && ((is_array($_tmp=$this->_tpl_vars['menu']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo 'group';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;"><img class="valign-middle" src="';  echo ((is_array($_tmp="trash_silhouette.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" alt="';  echo $this->_tpl_vars['lang']['_delete'];  echo '" title="';  echo $this->_tpl_vars['lang']['_delete'];  echo '" /></a></td>';  else:  echo '';  echo '<td class="menu_del_btn" onclick="var mene_link = $(\'_menutop';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); if(mene_link) {mene_link.onclick();}"><img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" alt="" title="" class="menu_trash_img" /></td>';  endif;  echo '</tr></table></div>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['menus'][$this->_tpl_vars['next_thread_num']][$this->_tpl_vars['now_page_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ! ( ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['menu']['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['menu']['display_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF && ((is_array($_tmp=$this->_tpl_vars['menu']['authority_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) < _AUTH_CHIEF )):  echo '<div id="_menu_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="_menu_';  echo ((is_array($_tmp=$this->_tpl_vars['menu']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (((is_array($_tmp=$this->_tpl_vars['display_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF):  echo ' display-none';  else:  echo '';  endif;  echo '">';  $this->assign('menus', ((is_array($_tmp=$this->_tpl_vars['action']['menus'][$this->_tpl_vars['next_thread_num']][$this->_tpl_vars['now_page_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  if (((is_array($_tmp=$this->_tpl_vars['visibility_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 0 && ((is_array($_tmp=$this->_tpl_vars['action']['flat_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != true && ((is_array($_tmp=$this->_tpl_vars['menu']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _SPACE_TYPE_PUBLIC):  echo '';  $this->assign('visibility_flag', ((is_array($_tmp=$this->_tpl_vars['menu']['visibility_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_view_edit_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $this->assign('visibility_flag', 1);  echo '</div>';  endif;  echo '';  endforeach; endif; unset($_from);  echo ''; ?>