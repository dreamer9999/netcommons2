<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from bbs_view_main_display.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_view_main_display.html', 3, false),array('modifier', 'sprintf', 'bbs_view_main_display.html', 4, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['bbs']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_DISPLAY_TOPIC_VALUE):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_bracket'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_topic'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_topic'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['bbs']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_DISPLAY_NEWEST_VALUE):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_bracket'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_newest'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_newest'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['bbs']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_DISPLAY_OLD_VALUE):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_bracket'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_old'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_old'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['bbs']['display'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_DISPLAY_ALL_VALUE):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_bracket'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_all'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_display_all'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo ''; ?>