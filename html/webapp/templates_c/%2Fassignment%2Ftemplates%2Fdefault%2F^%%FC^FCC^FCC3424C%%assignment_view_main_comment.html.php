<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from assignment_view_main_comment.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'assignment_view_main_comment.html', 4, false),array('modifier', 'timezone_date_format', 'assignment_view_main_comment.html', 22, false),array('modifier', 'sprintf', 'assignment_view_main_comment.html', 31, false),array('modifier', 'nl2br', 'assignment_view_main_comment.html', 41, false),)), $this); ?>
<?php echo '';  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['commentCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '';  echo '<div class="assignment_comment_view">';  echo '<div class="assignment_title">';  echo $this->_tpl_vars['lang']['assignment_comment_value'];  echo '</div><table class="assignment_comment_view">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['comments'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
 echo '<tr>';  echo '<td class="assignment_comment_user">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "assignment_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['comment']['insert_user_name'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['comment']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="assignment_comment_operation">';  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['insert_time'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['comment']['hasCommentEditAuthority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '&nbsp;&nbsp;&nbsp;<a class="syslink" href="#" title="" onclick="assignmentCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showEditComment(\'';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a class="syslink" href="#" title="" onclick="assignmentCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].deleteComment(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['report']['submit_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['report']['report_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',\'';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_del_confirm'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['assignment_comment_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['assignment_comment_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '\'); return false;">';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a>';  endif;  echo '</td></tr><tr>';  echo '<td colspan="2" id="assignment_comment_value';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="assignment_comment_value">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['comment_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '</table></div>';  endif;  echo '';  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['report']['hasCommentWriteAuthority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<div id="assignment_comment_write';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="assignment_comment_write">';  echo '<div class="assignment_title">';  echo $this->_tpl_vars['lang']['assignment_comment_write'];  echo '</div>';  echo '<form id="assignment_comment_write_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" action="#" onsubmit="return false;"><input type="hidden" name="assignment_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['assignment']['assignment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><input type="hidden" name="report_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['report']['report_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><input type="hidden" name="submit_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['report']['submit_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><input type="hidden" name="comment_id" value="" /><textarea name="comment_value" class="assignment_comment_textarea"></textarea><div class="btn-bottom"><input name="write_btn" type="button" class="btn-width lined_btn" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick="assignmentCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].writeComment(this.form); return false;" /><input name="edit_btn" type="button" class="display-none btn-width lined_btn" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick="assignmentCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].editComment(this.form); return false;" /><input name="cancel_btn" type="button" class="display-none btn-width lined_btn" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="assignmentCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].cancelComment(this.form); return false;" /></div></form></div>';  endif;  echo ''; ?>