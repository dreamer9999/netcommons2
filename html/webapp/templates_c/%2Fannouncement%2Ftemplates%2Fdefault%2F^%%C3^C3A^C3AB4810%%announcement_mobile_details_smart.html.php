<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:28
         compiled from announcement_mobile_details_smart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'img_style_rgb_to_hex', 'announcement_mobile_details_smart.html', 4, false),array('modifier', 'wysiwig_convert_url', 'announcement_mobile_details_smart.html', 4, false),array('modifier', 'escape', 'announcement_mobile_details_smart.html', 8, false),)), $this); ?>
<?php echo '<p>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['content'])) ? $this->_run_mod_handler('img_style_rgb_to_hex', true, $_tmp) : img_style_rgb_to_hex($_tmp)))) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '</p><br style="clear:both;" />';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '<div data-role="collapsible"><h3>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h3><p>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['announcement_obj']['more_content'])) ? $this->_run_mod_handler('img_style_rgb_to_hex', true, $_tmp) : img_style_rgb_to_hex($_tmp)))) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '</p><br style="clear:both;" /></div>';  endif;  echo ''; ?>
