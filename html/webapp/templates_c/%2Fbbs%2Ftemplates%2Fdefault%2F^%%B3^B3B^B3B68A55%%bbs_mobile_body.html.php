<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from bbs_mobile_body.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_body.html', 7, false),)), $this); ?>
<?php echo '';  echo '';  $this->assign('post', ($this->_tpl_vars['action']['post']));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_subject.html", 'smarty_include_vars' => array('display_type' => 'body')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if (( ((is_array($_tmp=$_SESSION['_smartphone_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_body_smart.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_body_feature.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['post']['vote_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<form method="post" data-transition="fade" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="action" value="bbs_action_main_vote"><input type="hidden" name="block_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="bbs_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['bbs_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="post_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input data-icon="star" type="submit" name="vote" value="';  echo $this->_tpl_vars['lang']['bbs_vote'];  echo '">';  echo $this->_tpl_vars['token_form'];  echo '';  echo $this->_tpl_vars['session_form'];  echo '</form>';  endif;  echo '<hr />';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_post_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<div style="text-align:right"><a href="?action=bbs_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div>'; ?>
