<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:53
         compiled from main.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'main.html', 4, false),)), $this); ?>
<?php echo '<tr><td><table class="widthmax" summary=""><tr>';  if (( ((is_array($_tmp=$this->_tpl_vars['main_display_position'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _DISPLAY_POSITION_CENTER || ((is_array($_tmp=$this->_tpl_vars['main_display_position'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _DISPLAY_POSITION_LEFT ) && ( ((is_array($_tmp=$this->_tpl_vars['leftcolumn_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 || ((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on' )):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['leftcolumn_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<td id="_leftcolumn" class="leftcolumn valign-top align-left" style="';  echo ((is_array($_tmp=$this->_tpl_vars['leftcolumn_style'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  if (((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on'):  echo '<div id="leftcolumn_addmodule"  class="valign-top align-left leftcolumn_on">';  echo '';  $this->assign('arrange_position', 'left');  echo '';  $this->assign('column_page_id', ((is_array($_tmp=$_SESSION['_leftcolumn_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('display_position', ((is_array($_tmp=@_DISPLAY_POSITION_LEFT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('auth_id', ((is_array($_tmp=$_SESSION['_auth_arr'][$this->_tpl_vars['display_position']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('addblock_field', ((is_array($_tmp=$this->_tpl_vars['addblock_left_field'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addblock_box.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endif;  echo '';  echo '<div id="__leftcolumn" class="main_column';  if (((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on'):  echo ' leftcolumn_on';  endif;  echo '">';  echo $this->_tpl_vars['content_left_field'];  echo '</div></td>';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['main_display_position'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _DISPLAY_POSITION_CENTER):  echo '<td id="_centercolumn" class="centercolumn valign-top align-left" style="';  echo ((is_array($_tmp=$this->_tpl_vars['centercolumn_style'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><a class="hidelink" name="center_column"></a>';  if (((is_array($_tmp=$this->_tpl_vars['layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on' && ((is_array($_tmp=$this->_tpl_vars['active_center_action'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == null):  echo '<div id="centercolumn_addmodule"  class="valign-top align-left">';  echo '';  $this->assign('arrange_position', 'center');  echo '';  $this->assign('column_page_id', ((is_array($_tmp=$this->_tpl_vars['centercolumn_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('display_position', ((is_array($_tmp=@_DISPLAY_POSITION_CENTER)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('auth_id', ((is_array($_tmp=$_SESSION['_auth_arr'][$this->_tpl_vars['display_position']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('addblock_field', ((is_array($_tmp=$this->_tpl_vars['addblock_center_field'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addblock_box.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endif;  echo '';  echo '<div id="__centercolumn" class="main_column">';  echo $this->_tpl_vars['content_center_field'];  echo '</div></td>';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['main_display_position'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _DISPLAY_POSITION_CENTER || ((is_array($_tmp=$this->_tpl_vars['main_display_position'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _DISPLAY_POSITION_RIGHT ) && ( ((is_array($_tmp=$this->_tpl_vars['rightcolumn_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 || ((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on' )):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['rightcolumn_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<td id="_rightcolumn" class="rightcolumn valign-top align-left" style="';  echo ((is_array($_tmp=$this->_tpl_vars['rightcolumn_style'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  if (((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on'):  echo '<div id="rightcolumn_addmodule" class="valign-top align-left rightcolumn_on">';  echo '';  $this->assign('arrange_position', 'right');  echo '';  $this->assign('column_page_id', ((is_array($_tmp=$_SESSION['_rightcolumn_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('display_position', ((is_array($_tmp=@_DISPLAY_POSITION_RIGHT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('auth_id', ((is_array($_tmp=$_SESSION['_auth_arr'][$this->_tpl_vars['display_position']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('addblock_field', ((is_array($_tmp=$this->_tpl_vars['addblock_right_field'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addblock_box.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endif;  echo '';  echo '<div id="__rightcolumn" class="main_column';  if (((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'on'):  echo ' rightcolumn_on';  endif;  echo '">';  echo $this->_tpl_vars['content_right_field'];  echo '</div></td>';  endif;  echo '';  endif;  echo '</tr></table></td></tr>'; ?>