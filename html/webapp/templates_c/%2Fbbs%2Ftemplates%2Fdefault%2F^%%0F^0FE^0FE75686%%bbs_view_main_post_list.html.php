<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from bbs_view_main_post_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_view_main_post_list.html', 8, false),)), $this); ?>
<?php echo '';  echo '<table class="widthmax"><tr><td>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_view_main_expand.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td>';  if (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_THREAD_VALUE):  echo '<td id="bbs_move';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="align-right"></td>';  endif;  echo '</tr></table>';  if (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_FLAT_VALUE):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_view_main_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['action']['expand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == BBS_EXPAND_THREAD_VALUE):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_view_main_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo ''; ?>