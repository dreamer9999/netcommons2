<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from bbs_mobile_subject_feature.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_subject_feature.html', 3, false),array('modifier', 'get_image_url', 'bbs_mobile_subject_feature.html', 4, false),array('modifier', 'truncate', 'bbs_mobile_subject_feature.html', 7, false),array('modifier', 'sprintf', 'bbs_mobile_subject_feature.html', 14, false),array('modifier', 'str_repeat', 'bbs_mobile_subject_feature.html', 19, false),)), $this); ?>
<?php echo '';  echo $this->_tpl_vars['lang']['_mobile_node'];  echo '';  if (((is_array($_tmp=$this->_tpl_vars['post']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" && ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['post']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />&nbsp;';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<strong>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=@_MOBILE_TITLE_LENGTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=@_MOBILE_TITLE_LENGTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true));  echo '</strong>';  else:  echo '<a href="?action=bbs_view_main_post&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;bbs_id=';  echo ((is_array($_tmp=$this->_tpl_vars['post']['bbs_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;post_id=';  echo ((is_array($_tmp=$this->_tpl_vars['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']['subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=@_MOBILE_TITLE_LENGTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=@_MOBILE_TITLE_LENGTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['post']['parent_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '0' && ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['child_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_child_number_unit'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['post']['child_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['post']['child_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['post']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != BBS_STATUS_RELEASED_VALUE )):  echo '<br />';  if (! empty ( $this->_tpl_vars['depth'] )):  echo '';  echo ((is_array($_tmp="&nbsp;")) ? $this->_run_mod_handler('str_repeat', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : str_repeat($_tmp, ((is_array($_tmp=$this->_tpl_vars['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '&nbsp;';  echo $this->_tpl_vars['lang']['_mobile_temporary_state'];  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['new_period_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= ((is_array($_tmp=$this->_tpl_vars['post']['insert_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['_mobile_new'];  echo '';  elseif (( ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['new_period_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= ((is_array($_tmp=$this->_tpl_vars['post']['newest_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['_mobile_child_new'];  echo '';  endif;  echo '<br />'; ?>