<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:28
         compiled from announcement_mobile_details_feature.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'announcement_mobile_details_feature.html', 4, false),array('modifier', 'img_style_rgb_to_hex', 'announcement_mobile_details_feature.html', 17, false),array('modifier', 'wysiwig_convert_url', 'announcement_mobile_details_feature.html', 17, false),array('modifier', 'html_to_text', 'announcement_mobile_details_feature.html', 19, false),array('modifier', 'nl2br', 'announcement_mobile_details_feature.html', 19, false),)), $this); ?>
<?php echo '<h6>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '<a href="?action=announcement_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;html_flag=';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;more_flag=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_mobile_view_text'];  echo '</a>';  else:  echo '<a href="?action=announcement_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;html_flag=';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;more_flag=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_mobile_view_html'];  echo '</a>';  endif;  echo '</h6><br />';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['content'])) ? $this->_run_mod_handler('img_style_rgb_to_hex', true, $_tmp) : img_style_rgb_to_hex($_tmp)))) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '';  else:  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['content'])) ? $this->_run_mod_handler('html_to_text', true, $_tmp) : html_to_text($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '';  endif;  echo '<br style="clear:both;" />';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF )):  echo '<br /><a href="?action=announcement_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;more_flag=';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (! is_null ( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '&amp;html_flag=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['more_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '<br />';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('img_style_rgb_to_hex', true, $_tmp) : img_style_rgb_to_hex($_tmp)))) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '';  else:  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('html_to_text', true, $_tmp) : html_to_text($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '';  endif;  echo '<br style="clear:both;" /><a href="?action=announcement_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;more_flag=';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (! is_null ( ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '&amp;html_flag=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['html_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><br />';  echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['hide_more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo '';  endif;  echo ''; ?>
