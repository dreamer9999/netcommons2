<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from bbs_mobile_thread.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_thread.html', 4, false),array('modifier', 'str_repeat', 'bbs_mobile_thread.html', 12, false),)), $this); ?>
<?php echo '';  echo '';  if (empty ( $this->_tpl_vars['parents'] ) && count ( ((is_array($_tmp=$this->_tpl_vars['action']['topics'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) > 0):  echo '';  $this->assign('parents', ((is_array($_tmp=$this->_tpl_vars['action']['topics']['0'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('depth', 0);  echo '';  endif;  echo '<dl style="margin-top:0.3em;padding-left:1em;">';  $_from = $this->_tpl_vars['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['postID'] => $this->_tpl_vars['post']):
 echo '<dt style="margin-top:0.3em">';  if (((is_array($_tmp=$_SESSION['_smartphone_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON):  echo '';  echo ((is_array($_tmp="&nbsp;")) ? $this->_run_mod_handler('str_repeat', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : str_repeat($_tmp, ((is_array($_tmp=$this->_tpl_vars['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_subject.html", 'smarty_include_vars' => array('display_type' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</dt>';  if (! empty ( $this->_tpl_vars['action']['topics'][$this->_tpl_vars['postID']] )):  echo '';  $this->assign('parents', ((is_array($_tmp=$this->_tpl_vars['action']['topics'][$this->_tpl_vars['postID']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $this->assign('depth', ($this->_tpl_vars['depth']+1));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $this->assign('depth', ($this->_tpl_vars['depth']-1));  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</dl>'; ?>