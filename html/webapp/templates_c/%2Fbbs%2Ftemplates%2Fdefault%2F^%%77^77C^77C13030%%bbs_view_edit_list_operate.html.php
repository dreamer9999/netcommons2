<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from bbs_view_edit_list_operate.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_view_edit_list_operate.html', 3, false),array('modifier', 'sprintf', 'bbs_view_edit_list_operate.html', 3, false),)), $this); ?>
<?php echo '';  echo '<a class="syslink';  if (((is_array($_tmp=$this->_tpl_vars['bbs']['activity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF):  echo ' display-none';  endif;  echo '" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_stop_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['bbs']['bbs_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['bbs']['bbs_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="bbsCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].changeActivity(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['bbs']['bbs_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;">';  echo $this->_tpl_vars['lang']['bbs_stop'];  echo '</a><a class="syslink';  if (((is_array($_tmp=$this->_tpl_vars['bbs']['activity'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo ' display-none';  endif;  echo '" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['bbs_activate_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['bbs']['bbs_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['bbs']['bbs_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="bbsCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].changeActivity(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['bbs']['bbs_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;">';  echo $this->_tpl_vars['lang']['bbs_activate'];  echo '</a>'; ?>