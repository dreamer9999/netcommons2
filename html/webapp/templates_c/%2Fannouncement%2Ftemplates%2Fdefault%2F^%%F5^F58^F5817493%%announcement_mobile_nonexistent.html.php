<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:28
         compiled from announcement_mobile_nonexistent.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'announcement_mobile_nonexistent.html', 6, false),)), $this); ?>
<?php echo '<div>';  echo $this->_tpl_vars['lang']['announcement_mobile_noexists'];  echo '</div><div style="text-align:right;">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['block_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 )):  echo '<a href="?action=menu_view_mobile_init&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_obj']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  else:  echo '<a href="?action=menu_view_mobile_detail&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_obj']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  endif;  echo '';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div>'; ?>