<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from journal_mobile_init_switch.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'journal_mobile_init_switch.html', 4, false),array('modifier', 'truncate', 'journal_mobile_init_switch.html', 17, false),)), $this); ?>
<?php echo '<div data-role="navbar"><form method="get" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="action" value="journal_view_main_init"><input type="hidden" name="block_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><div data-role="controlgroup" data-type="horizontal" style="margin-bottom:0px;"><select name="cate_id" ><option value="0"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == "" )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['journal_category_select'];  echo '</option>';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['categories'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['cat']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['cat']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  if (( ((is_array($_tmp=$_SESSION['_smartphone_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['cat']['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cat']['category_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=@JOURNAL_MOBILE_CATE_NAME_LEN)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=@JOURNAL_MOBILE_CATE_NAME_LEN)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '</option>';  endforeach; endif; unset($_from);  echo '</select><select name="visible" ><option value="1"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['visible_item'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 )):  echo ' selected="selected"';  endif;  echo '>1';  echo $this->_tpl_vars['lang']['journal_display_item'];  echo '</option><option value="5"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['visible_item'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 5 )):  echo ' selected="selected"';  endif;  echo '>5';  echo $this->_tpl_vars['lang']['journal_display_item'];  echo '</option><option value="10"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['visible_item'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 10 )):  echo ' selected="selected"';  endif;  echo '>10';  echo $this->_tpl_vars['lang']['journal_display_item'];  echo '</option><option value="20"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['visible_item'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 20 )):  echo ' selected="selected"';  endif;  echo '>20';  echo $this->_tpl_vars['lang']['journal_display_item'];  echo '</option><option value="50"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['visible_item'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 50 )):  echo ' selected="selected"';  endif;  echo '>50';  echo $this->_tpl_vars['lang']['journal_display_item'];  echo '</option>';  echo '</select><input data-icon="refresh" data-iconpos="right" type="submit" name="switch" value="&nbsp;';  echo $this->_tpl_vars['lang']['_mobile_switch'];  echo '&nbsp;">';  echo $this->_tpl_vars['session_form'];  echo '</div></form></div>'; ?>