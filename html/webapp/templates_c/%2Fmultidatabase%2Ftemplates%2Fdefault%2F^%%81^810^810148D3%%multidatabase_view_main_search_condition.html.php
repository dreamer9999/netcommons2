<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from multidatabase_view_main_search_condition.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_main_search_condition.html', 3, false),)), $this); ?>
<?php echo '<div class="outerdiv"><form action="" id="mdb_search_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onsubmit="return false;"><input type="hidden" name="multidatabase_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="now_page" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['now_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><table class="outer" summary="';  echo ((is_array($_tmp=@_SUMMARY_SETTINGFORM)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" cellspacing="0" cellpadding="2">';  echo '<tr class="row"><th class="nowrap valign-top align-left" scope="row"><label for="mdb_search_keyword';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['mdb_search_keyword'];  echo '</label></th><td class="nowrap"><input id="mdb_search_keyword';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="keyword" type="text" class="text" value="';  if (((is_array($_tmp=$this->_tpl_vars['action']['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');"/></td></tr>';  echo '<tr class="row"><th class="nowrap valign-top" scope="row"><label for="mdb_search_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['mdb_search_type'];  echo '</label></th><td class="nowrap"><select id="mdb_search_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="select_kind" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');"><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_SEARCH_SELECT_AND)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['select_kind'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_SEARCH_SELECT_AND)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_search_type_and'];  echo '</option><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_SEARCH_SELECT_OR)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['select_kind'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_SEARCH_SELECT_OR)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_search_type_or'];  echo '</option><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_SEARCH_SELECT_PHRASE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['select_kind'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_SEARCH_SELECT_PHRASE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_search_type_phrase'];  echo '</option></select></td></tr>';  echo '<tr class="row"><th class="nowrap" scope="row"><label for="mdb_search_handle';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['mdb_search_handle'];  echo '</label></th><td class="nowrap"><input id="mdb_search_handle';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="text" type="text" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');" value="';  if (((is_array($_tmp=$this->_tpl_vars['action']['handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '" name="handle"/></td></tr>';  echo '<tr class="row"><th class="nowrap" scope="row"><label for="mdb_search_date';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['mdb_search_date'];  echo '</label></th><td class="nowrap"><input id="mdb_search_date_from';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="comp_calendar_text" type="text" name="date_from" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['date_from'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');" />';  echo $this->_tpl_vars['lang']['mdb_search_separator'];  echo '<input id="mdb_search_date_to';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="comp_calendar_text" type="text" name="date_to" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['date_to'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');" /></td></tr>';  echo '';  if (( ((is_array($_tmp=$_SESSION['_auth_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) >= _AUTH_CHIEF )):  echo '<tr class="row"><th class="nowrap valign-top" scope="row"><label for="mdb_search_status';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['mdb_search_status'];  echo '</label></th><td class="nowrap"><select id="mdb_search_status';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="status" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');"><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_STATUS_ALL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_STATUS_ALL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$this->_tpl_vars['action']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ""):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_display_item_all'];  echo '</option><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_STATUS_AGREE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_STATUS_AGREE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_search_open'];  echo '</option><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_STATUS_WAIT_AGREE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_STATUS_WAIT_AGREE_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_search_not_ready'];  echo '</option></select></td></tr>';  endif;  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['section_metadatas'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
 echo '<tr class="row"><th class="nowrap" scope="row"><label for="mdb_search_item_';  echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</label></th><td class="nowrap"><select class="mdb_category" id="mdb_search_item_';  echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="sort_section[';  echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');"><option value="" ';  if (! strlen ( ((is_array($_tmp=$this->_tpl_vars['action']['sort_section'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_display_item_all'];  echo '</option>';  $_from = $this->_tpl_vars['item']['select_content_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['selectloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['selectloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['selectloop']['iteration']++;
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['sort_section'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) === ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endforeach; endif; unset($_from);  echo '</select></td></tr>';  endforeach; endif; unset($_from);  echo '<tr class="row"><th class="nowrap" scope="row"><label for="mdb_search_sort';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['mdb_search_sort'];  echo '</label></th><td class="nowrap"><select class="mdb_sort[';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" id="mdb_search_sort';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="sort_metadata" onblur="Element.removeClassName(this,\'highlight\');" onfocus="Element.addClassName(this,\'highlight\');"><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_DEFAULT_SEQUENCE_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['sort_metadata'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_DEFAULT_SEQUENCE_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$this->_tpl_vars['action']['sort_metadata'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ""):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_default_sort'];  echo '</option><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_DEFAULT_DATE_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['sort_metadata'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_DEFAULT_DATE_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_date_sort'];  echo '</option><option value="';  echo ((is_array($_tmp=@MULTIDATABASE_DEFAULT_DATE_ASC_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['sort_metadata'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_DEFAULT_DATE_ASC_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_date_asc_sort'];  echo '</option>';  if (((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<option value="';  echo ((is_array($_tmp=@MULTIDATABASE_DEFAULT_VOTE_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['sort_metadata'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MULTIDATABASE_DEFAULT_VOTE_SORT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['mdb_vote_sort'];  echo '</option>';  endif;  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['sort_metadatas'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['selectloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['selectloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['selectloop']['iteration']++;
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['option']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['sort_metadata'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['option']['metadata_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo $this->_tpl_vars['lang']['mdb_sort_item'];  echo '</option>';  endforeach; endif; unset($_from);  echo '</select></td></tr></table><div class="btn-bottom align-center"><input class="lined_btn btn-width" type="button" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].searchMdb(this.form)" value="';  echo $this->_tpl_vars['lang']['mdb_search'];  echo '" /><input class="lined_btn btn-width" type="button" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', {\'action\':\'multidatabase_view_main_init\', multidatabase_id:';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '})" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" /></div></form></div>'; ?>