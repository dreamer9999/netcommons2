<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from multidatabase_view_edit_metadata_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_edit_metadata_list.html', 4, false),array('modifier', 'sprintf', 'multidatabase_view_edit_metadata_list.html', 13, false),array('modifier', 'get_themes_image', 'multidatabase_view_edit_metadata_list.html', 14, false),)), $this); ?>
<?php echo '<div class="outerdiv"><div class="nowrap bold">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['multidatabase_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</div><div class="top_description">';  echo $this->_tpl_vars['lang']['mdb_metadata_edit_readme'];  echo '</div><table id="mdb_metadata_setting';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="mdb_metadata_detail_main" summary="" cellspacing="0" cellpadding="0"><tr><td class="valign-top" colspan="2"><div class="mdb_metadata_add_btn"><a id="mdb_addmetadata';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="syslink" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['mdb_add_metadata_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['multidatabase_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['multidatabase_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showPopupMetadata(event); return false;"><img src="';  echo ((is_array($_tmp="add.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" alt="" title="" />&nbsp;';  echo '';  echo $this->_tpl_vars['lang']['mdb_add_metadata'];  echo '</a></div></td></tr>';  if (((is_array($_tmp=$this->_tpl_vars['action']['count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo '<tr><td colspan="2">';  echo $this->_tpl_vars['lang']['mdb_noneexists_metadata'];  echo '</td></tr>';  else:  echo '<tr><td class="valign-top align-left" colspan="2"><table class="mdb_metadata_detail_top_bottom mdb_drop_pos_1 mdb_metadata_detail_pos_1" summary="" cellspacing="0" cellpadding="0">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_view_edit_metadata.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table><div class="mdb_drop_event" id="mdb_drop_event1';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></div></td></tr><tr><td class="valign-top align-left mdb_chg_col"><table class="mdb_metadata_detail mdb_drop_pos_2 mdb_metadata_detail_pos_2" summary="" cellspacing="0" cellpadding="0">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_view_edit_metadata.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table><div class="mdb_drop_event" id="mdb_drop_event2';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></div></td><td class="valign-top align-left mdb_chg_col"><table class="mdb_metadata_detail mdb_drop_pos_3 mdb_metadata_detail_pos_3" summary="" cellspacing="0" cellpadding="0">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_view_edit_metadata.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table><div class="mdb_drop_event" id="mdb_drop_event3';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></div></td></tr><tr><td class="valign-top align-left" colspan="2"><table class="mdb_metadata_detail_top_bottom mdb_drop_pos_4 mdb_metadata_detail_pos_4" summary="" cellspacing="0" cellpadding="0">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['metadatas_layout']['4'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_view_edit_metadata.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table><div class="mdb_drop_event" id="mdb_drop_event4';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></div></td></tr>';  endif;  echo '</table><div class="btn-bottom"><input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['mdb_preview'];  echo '" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showPopupEditPreview(event, \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;" />&nbsp;<input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['_list'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'multidatabase_view_edit_list\'); return false;" /></div></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../multidatabase_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>