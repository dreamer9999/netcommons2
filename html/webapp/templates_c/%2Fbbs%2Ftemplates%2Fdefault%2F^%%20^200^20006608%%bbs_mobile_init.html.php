<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from bbs_mobile_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_init.html', 5, false),)), $this); ?>
<?php echo '';  echo '<h3>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['bbs_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '<span style="font-size:small;"><br />';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_view_main_display.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</span></h3>';  $this->assign('operationPosition', 'head');  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_init_operation.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<br />';  if (((is_array($_tmp=$this->_tpl_vars['action']['postExists'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_THREAD_VALUE):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_FLAT_VALUE):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  else:  echo '<p>';  echo $this->_tpl_vars['lang']['bbs_no_post'];  echo '</p>';  endif;  echo '<br />';  if (((is_array($_tmp=$this->_tpl_vars['action']['bbs']['topic_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<div><a data-role="button" href="?action=bbs_view_mobile_post_add&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;bbs_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['bbs']['bbs_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['bbs_post_topic'];  echo '</a></div>';  endif;  echo '<br /><div style="text-align:right">';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['block_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 )):  echo '<a href="?action=menu_view_mobile_init&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_obj']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  else:  echo '<a href="?action=menu_view_mobile_detail&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_obj']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  endif;  echo '';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div><br />'; ?>