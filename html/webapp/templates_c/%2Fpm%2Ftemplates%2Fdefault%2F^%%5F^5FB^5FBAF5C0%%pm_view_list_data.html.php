<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from pm_view_list_data.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'pm_view_list_data.html', 2, false),array('modifier', 'get_modules_image', 'pm_view_list_data.html', 15, false),)), $this); ?>
<?php echo '';  if (((is_array($_tmp=$this->_tpl_vars['message']['read_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@PM_UNREAD_STATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<tr class="pm_list_inbox_unread" id="pm_list_row';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  else:  echo '<tr id="pm_list_row';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  endif;  echo '<td id="pm_list_col';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_check" class="pm_list_inbox_td pm_list_inbox_check">';  if (((is_array($_tmp=$this->_tpl_vars['message']['read_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@PM_UNREAD_STATE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<input id="pm_list_row_radio';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="receiver_id[]" value="';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="pmCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].listRadioOnCicked(this, \'pm_list_row';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'pm_list_inbox_unread pm_list_inbox_checked\', \'pm_list_inbox_unread\');" />';  else:  echo '<input id="pm_list_row_radio';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="receiver_id[]" value="';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="pmCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].listRadioOnCicked(this, \'pm_list_row';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'pm_list_inbox_checked\', \'\');" />';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['message']['importance_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@PM_IMPORTANCE_FLAG)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<img class="pm_list_inbox_check_img" src="';  echo ((is_array($_tmp="flag.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" alt="" />';  endif;  echo '</td><td id="pm_list_col';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_sender" class="pm_list_inbox_td pm_list_inbox_sender"><table class="widthmax pm_list_info_sender_container"><tr><td class="pm_list_inbox_sender2"><span class="pm_list_inbox_sender2_span pm_list_inbox_sender_span">';  if (((is_array($_tmp=$this->_tpl_vars['action']['search_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'search'):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['message']['send_all_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo $this->_tpl_vars['lang']['pm_all_members'];  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./pm_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['message']['handle'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['message']['first_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  else:  echo '';  if (( ( ((is_array($_tmp=$this->_tpl_vars['message']['mailbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@PM_LEFTMENU_OUTBOX)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) || ( ((is_array($_tmp=$this->_tpl_vars['message']['mailbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@PM_LEFTMENU_STOREBOX)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) ) && ( ((is_array($_tmp=$this->_tpl_vars['message']['send_all_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['pm_all_members'];  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./pm_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['message']['handle'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['message']['first_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  endif;  echo '</span></td><td class="pm_list_info_sender_container_img">';  if (((is_array($_tmp=$this->_tpl_vars['message']['file_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '<img class="pm_list_inbox_sender2_img pm_list_inbox_check_img pm_list_inbox_sender_img" src="';  echo ((is_array($_tmp="upload.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" alt="" />';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['message']['image_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '<img class="pm_list_inbox_sender2_img pm_list_inbox_check_img pm_list_inbox_sender_img" src="';  echo ((is_array($_tmp="image.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" alt="" />';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['message']['hasTag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<img class="pm_list_inbox_sender2_img pm_list_inbox_check_img pm_list_inbox_sender_img" src="';  echo ((is_array($_tmp="tag.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['message']['tags'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['message']['tags'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  endif;  echo '</td></tr></table></td><td id="pm_list_col';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_subject" class="pm_list_inbox_td pm_list_inbox_subject">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./pm_view_list_data_subject.html", 'smarty_include_vars' => array('page' => ((is_array($_tmp=$this->_tpl_vars['action']['page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td id="pm_list_col';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['message']['receiver_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_date" class="pm_list_inbox_td pm_list_inbox_data">';  echo ((is_array($_tmp=$this->_tpl_vars['message']['sent_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</td></tr>'; ?>