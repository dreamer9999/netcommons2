<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from pm_view_main_tag_entry.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'pm_view_main_tag_entry.html', 5, false),)), $this); ?>
<?php echo '';  echo '<div class="pm_new_tag_body clearfix"><p class="pm_new_tag_text">';  echo $this->_tpl_vars['lang']['pm_entry_tag_header'];  echo '</p><form id="pm_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" action="#" onsubmit="return false;" class="pm_new_tag_form clearfix"><input type="hidden" name="action" value="pm_action_main_tag_entry" /><input type="hidden" name="tag_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['tag_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="receiver_list" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['receiver_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="mailbox" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['mailbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="top_el_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['top_el_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="search_flag" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['search_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="select_all_flag" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['select_all_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="filter" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="sortCol" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['sortCol'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="sortDir" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['sortDir'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><input type="hidden" name="page" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"/><p class="pm_new_tag_form_p pm_new_tag"><label for="pm_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_tag_name">';  echo $this->_tpl_vars['lang']['pm_new_tag'];  echo '</label></p><p class="pm_new_tag_form_p"><input type="text" class="pm_new_tag_form_p_input pm_new_tag_name" name="tag_name" id="pm_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_tag_name" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['tag_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></p><p class="pm_new_tag_form_p pm_new_tag_btn">';  if (((is_array($_tmp=$this->_tpl_vars['action']['tag']['tag_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ""):  echo '<input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['pm_submit'];  echo '" onclick="pmCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].enterTag(this.form,\'1\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['receiver_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['mailbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['search_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['top_id_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['parent_id_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');" />';  else:  echo '<input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['pm_submit'];  echo '" onclick="pmCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].enterTag(this.form,\'2\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['receiver_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['tag']['mailbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['search_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['top_id_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');" />';  endif;  echo '<input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['pm_cancel'];  echo '" onclick="pmCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].resetOperationBox(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['top_el_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); commonCls.removeBlock(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;"/></p></form></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../pm_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">commonCls.focus($("pm_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '").tag_name);</script>'; ?>