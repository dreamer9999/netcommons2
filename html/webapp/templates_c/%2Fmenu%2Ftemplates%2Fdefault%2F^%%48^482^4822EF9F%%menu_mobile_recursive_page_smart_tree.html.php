<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from menu_mobile_recursive_page_smart_tree.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'menu_mobile_recursive_page_smart_tree.html', 5, false),)), $this); ?>
<?php echo '';  echo '';  $this->assign('smt_color_set', "");  echo '';  if (empty ( $this->_tpl_vars['parents'] ) && count ( ((is_array($_tmp=$this->_tpl_vars['action']['pageTree'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) > 0):  echo '';  $this->assign('parents', ((is_array($_tmp=$this->_tpl_vars['action']['topPage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  endif;  echo '';  $_from = $this->_tpl_vars['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pageID'] => $this->_tpl_vars['page']):
 echo '';  if (((is_array($_tmp=$this->_tpl_vars['page']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 0 || ((is_array($_tmp=$this->_tpl_vars['page']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['page']['mobileModule'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true && ((is_array($_tmp=$this->_tpl_vars['page']['visible'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '';  if (! empty ( $this->_tpl_vars['action']['pageTree'][$this->_tpl_vars['pageID']] )):  echo '<div data-role="collapsible" ><h3>';  echo ((is_array($_tmp=$this->_tpl_vars['page']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h3><ul data-role="listview" data-inset="true">';  endif;  echo '<li>';  if (((is_array($_tmp=$this->_tpl_vars['page']['disabled'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['page']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['page']['blockCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 1):  echo '<a href="./?action=menu_view_mobile_detail&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['page']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;t=';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['page']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  else:  echo '<a href="./?action=pages_view_mobile&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['page']['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['page']['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo '</li>';  endif;  echo '';  endif;  echo '';  if (! empty ( $this->_tpl_vars['action']['pageTree'][$this->_tpl_vars['pageID']] )):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['page']['visible'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '';  $this->assign('parents', ((is_array($_tmp=$this->_tpl_vars['action']['pageTree'][$this->_tpl_vars['pageID']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu_mobile_recursive_page_smart_tree.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if (((is_array($_tmp=$this->_tpl_vars['page']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 0 || ((is_array($_tmp=$this->_tpl_vars['page']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['page']['mobileModule'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == true):  echo '</ul></div>';  endif;  echo '';  endif;  echo '';  endif;  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo ''; ?>