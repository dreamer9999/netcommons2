<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from bbs_mobile_subject.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_subject.html', 3, false),array('modifier', 'get_image_url', 'bbs_mobile_subject.html', 12, false),array('modifier', 'timezone_date_format', 'bbs_mobile_subject.html', 26, false),array('modifier', 'sprintf', 'bbs_mobile_subject.html', 33, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'list'):  echo '';  if (( ((is_array($_tmp=$_SESSION['_smartphone_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_subject_smart.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_subject_feature.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  else:  echo '<h3>';  if (((is_array($_tmp=$this->_tpl_vars['post']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" && ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '<img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['post']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />&nbsp;';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['post']['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['post']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != BBS_STATUS_RELEASED_VALUE )):  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['new_period_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= ((is_array($_tmp=$this->_tpl_vars['post']['insert_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['_mobile_new'];  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['new_period_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= ((is_array($_tmp=$this->_tpl_vars['post']['newest_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['_mobile_child_new'];  echo '';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['post']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != BBS_STATUS_RELEASED_VALUE )):  echo '<span style="font-size:small;">';  echo $this->_tpl_vars['lang']['_mobile_temporary_state'];  echo '</span>';  endif;  echo '</h3><span style="font-size:small;">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['insert_time'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_mobile_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_mobile_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '&nbsp;&nbsp;';  echo $this->_tpl_vars['lang']['_mobile_user'];  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&nbsp;';  if (((is_array($_tmp=$this->_tpl_vars['action']['bbs']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_vote_unit'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['post']['vote_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['post']['vote_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '</span>';  endif;  echo ''; ?>