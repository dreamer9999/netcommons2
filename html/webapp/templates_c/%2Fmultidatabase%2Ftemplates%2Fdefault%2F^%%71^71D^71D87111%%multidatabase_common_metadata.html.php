<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from multidatabase_common_metadata.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_common_metadata.html', 2, false),array('modifier', 'get_modules_image', 'multidatabase_common_metadata.html', 55, false),array('modifier', 'sprintf', 'multidatabase_common_metadata.html', 76, false),)), $this); ?>
<?php echo '<span id="mdb_refresh_target';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></span><table class="mdb_layout_out_table" summary="">';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo '<tr><td class="valign-top align-left mdb_layout_out_table_td" ';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null && ((is_array($_tmp=$this->_tpl_vars['data_pos_3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo 'colspan="2"';  endif;  echo '><table class="mdb_metadata_table" summary="">';  $this->assign('position', '1');  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['data_pos_1'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_common_metadata_detail.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table></td></tr>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null || ((is_array($_tmp=$this->_tpl_vars['data_pos_3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo '<tr>';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo '<td class="valign-top align-left mdb_layout_out_table_td"><table class="mdb_metadata_table" summary="">';  $this->assign('position', '2');  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['data_pos_2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_common_metadata_detail.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table></td>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo '<td class="valign-top align-left"><table class="mdb_metadata_table" summary="">';  $this->assign('position', '3');  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['data_pos_3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_common_metadata_detail.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table></td>';  endif;  echo '</tr>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_4'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo '<tr><td class="valign-top align-left mdb_layout_out_table_td" ';  if (((is_array($_tmp=$this->_tpl_vars['data_pos_2'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null && ((is_array($_tmp=$this->_tpl_vars['data_pos_3'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != null):  echo 'colspan="2"';  endif;  echo '><table class="mdb_metadata_table" summary="">';  $this->assign('position', '4');  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['data_pos_4'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metadata']):
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "multidatabase_common_metadata_detail.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '</table></td></tr>';  endif;  echo '</table><div class="align-right">';  if (((is_array($_tmp=$this->_tpl_vars['item']['temporary_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['item']['agree_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['new_period_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= ((is_array($_tmp=$this->_tpl_vars['item']['insert_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['new_period'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '<img class="icon" src="';  echo ((is_array($_tmp="new.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" alt="';  echo $this->_tpl_vars['lang']['_new'];  echo '" title="';  echo $this->_tpl_vars['lang']['_new'];  echo '" />';  if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail' || ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'list' || ((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail'):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['item']['temporary_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<span class="deadline">';  echo $this->_tpl_vars['lang']['_temporary_state'];  echo '</span>';  if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail'):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  endif;  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['agree_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<span class="deadline">';  echo $this->_tpl_vars['lang']['mdb_wait_agree'];  echo '</span>';  if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail'):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  endif;  echo '';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['active_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail'):  echo '';  echo $this->_tpl_vars['lang']['mdb_detail_writer'];  echo '<a class="syslink" href="#" title="';  if (((is_array($_tmp=$_SESSION['_login_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ''):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['mdb_detail_writer_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_user_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '" onclick="commonCls.showUserDetail(event, \'';  echo ((is_array($_tmp=$this->_tpl_vars['item']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  echo ((is_array($_tmp=$this->_tpl_vars['item']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  if (((is_array($_tmp=$this->_tpl_vars['item']['has_edit_auth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a href="#" title="';  echo $this->_tpl_vars['lang']['mdb_detail_edit_title'];  echo '" class="syslink" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', {action:\'multidatabase_view_main_content_init\', content_id:';  echo ((is_array($_tmp=$this->_tpl_vars['item']['content_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ', multidatabase_id:';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '}); return false;">';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a href="#" title="';  echo $this->_tpl_vars['lang']['mdb_detail_delete_title'];  echo '" class="syslink" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].delContent(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['item']['content_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo $this->_tpl_vars['lang']['mdb_content_del_confirm'];  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['item']['agree_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['item']['temporary_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['item']['agree_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['item']['temporary_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['vote_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<span class="mdb_detail_block">';  if (((is_array($_tmp=$this->_tpl_vars['item']['voted'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['mdb_detail_voted'];  echo '';  else:  echo '<a href="#" title="';  echo $this->_tpl_vars['lang']['mdb_detail_vote_title'];  echo '" class="syslink" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].vote(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['item']['content_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['mdb_detail_vote'];  echo '</a>';  endif;  echo '</span>';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  echo $this->_tpl_vars['lang']['mdb_vote_number'];  echo '(';  echo ((is_array($_tmp=$this->_tpl_vars['item']['vote_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ')';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['mdb_obj']['comment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail'):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a href="#" title="';  echo $this->_tpl_vars['lang']['mdb_detail_comment_title'];  echo '" class="syslink" onclick="commonCls.displayChange(\'mdb_comment';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['mdb_detail_comment'];  echo '(';  echo ((is_array($_tmp=$this->_tpl_vars['item']['comment_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ')</a>';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['item']['has_confirm_auth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['item']['agree_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'detail'):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a href="#" title="';  echo $this->_tpl_vars['lang']['mdb_detail_confirm_title'];  echo '" class="syslink" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].confirmContent(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['item']['content_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo $this->_tpl_vars['lang']['mdb_content_confirm_confirm'];  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['mdb_detail_confirm'];  echo '</a>';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'list'):  echo '';  echo $this->_tpl_vars['lang']['_separator'];  echo '';  if (strpos ( ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) , MULTIDATABASE_REFERENCE_PREFIX_NAME )):  echo '<a href="#" title="';  echo $this->_tpl_vars['lang']['mdb_detail_link_title'];  echo '" class="syslink" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', {action:\'multidatabase_view_main_detail\', content_id:';  echo ((is_array($_tmp=$this->_tpl_vars['item']['content_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ', multidatabase_id:';  echo ((is_array($_tmp=$this->_tpl_vars['action']['multidatabase_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '}, {\'loading_el\':this}); return false;">';  else:  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['item']['short_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '';  ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../../../templates/main/abbreviate_url.html", 'smarty_include_vars' => array('short_url' => ((is_array($_tmp=$this->_tpl_vars['item']['short_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('short_url', ob_get_contents()); ob_end_clean();
  echo '<a class="syslink"  title="';  echo $this->_tpl_vars['lang']['mdb_detail_link_title'];  echo '" href="';  echo ((is_array($_tmp=$this->_tpl_vars['short_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="if (_nc_current_url.match(\'';  echo ((is_array($_tmp=$this->_tpl_vars['item']['short_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')) {location.reload(); return false;}">';  else:  echo '';  $this->assign('short_url', (@BASE_URL).(@INDEX_FILE_NAME)."?active_action=multidatabase_view_main_detail&content_id=".($this->_tpl_vars['item']['content_id'])."&multidatabase_id=".($this->_tpl_vars['action']['multidatabase_id'])."&block_id=".($this->_tpl_vars['block_id'])."#".($_SESSION['_id']));  echo '<a class="syslink"  title="';  echo $this->_tpl_vars['lang']['mdb_detail_link_title'];  echo '" href="';  echo ((is_array($_tmp=$this->_tpl_vars['short_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="if (_nc_current_url.match(\'content_id=';  echo ((is_array($_tmp=$this->_tpl_vars['item']['content_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\') && _nc_current_url.match(\'block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')) {location.reload(); return false;}">';  endif;  echo '';  endif;  echo '';  echo $this->_tpl_vars['lang']['mdb_detail_link'];  echo '</a>';  endif;  echo '</div>'; ?>