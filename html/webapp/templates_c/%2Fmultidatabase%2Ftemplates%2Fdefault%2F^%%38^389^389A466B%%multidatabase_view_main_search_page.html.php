<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from multidatabase_view_main_search_page.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_main_search_page.html', 4, false),)), $this); ?>
<?php echo '<table class="widthmax" summary=""><tr><td class="mdb_search_result_prev';  if (! ((is_array($_tmp=$this->_tpl_vars['action']['prev_link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' disable_lbl';  endif;  echo '">';  if (! ((is_array($_tmp=$this->_tpl_vars['action']['prev_link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['mdb_search_prev'];  echo '';  else:  echo '<a href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['mdb_search_prev_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="syslink hover_highlight" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].toSearchPage(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['now_page']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['mdb_search_prev'];  echo '</a>';  endif;  echo '</td><td class="mdb_search_result_next';  if (! ((is_array($_tmp=$this->_tpl_vars['action']['next_link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' disable_lbl';  endif;  echo '">';  if (! ((is_array($_tmp=$this->_tpl_vars['action']['next_link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['mdb_search_next'];  echo '';  else:  echo '<a href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['mdb_search_next_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="syslink hover_highlight" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].toSearchPage(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['now_page']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['mdb_search_next'];  echo '</a>';  endif;  echo '</td></tr></table>'; ?>