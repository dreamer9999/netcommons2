<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:32
         compiled from journal_mobile_comment.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'timezone_date_format', 'journal_mobile_comment.html', 4, false),array('modifier', 'escape', 'journal_mobile_comment.html', 4, false),array('modifier', 'get_image_url', 'journal_mobile_comment.html', 12, false),array('modifier', 'sprintf', 'journal_mobile_comment.html', 28, false),array('modifier', 'nl2br', 'journal_mobile_comment.html', 49, false),)), $this); ?>
<?php echo '<h4>';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['journal_date'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['journal_mobile_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['journal_mobile_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['post']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=@JOURNAL_POST_STATUS_REREASED_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['_mobile_temporary_state'];  echo '&nbsp;';  endif;  echo '</h4><h3>';  if (((is_array($_tmp=$this->_tpl_vars['action']['post']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" && ((is_array($_tmp=$_SESSION['_mobile_text_html_mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@MOBILE_TEXTHTML_MODE_HTML)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['new_period_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) <= ((is_array($_tmp=$this->_tpl_vars['action']['post']['journal_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<span style="font-size:small;">';  echo $this->_tpl_vars['lang']['_mobile_new'];  echo '</span>';  endif;  echo '</h3><div style="text-align:right;font-size:small;">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['journal_date'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_short_time_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_short_time_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '&nbsp;';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_mobile_user'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['category']['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '<br />';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['journal_mobile_category'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['category']['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['category']['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '</div><h4>';  echo $this->_tpl_vars['lang']['journal_comment'];  echo '(';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['comment_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ')';  if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['comment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['post']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@JOURNAL_POST_STATUS_REREASED_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$_SESSION['_auth_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) >= ((is_array($_tmp=@_AUTH_GENERAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<br /><a data-role="button" href="?action=journal_view_mobile_comment_add&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;p_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;c_id=';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['journal_write_comment'];  echo '</a>';  endif;  echo '</h4>';  if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['comment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['post']['comment_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['comments'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
 echo '<hr /><h5>';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['insert_time'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['journal_mobile_comment_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['journal_mobile_comment_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '&nbsp;&nbsp;';  echo $this->_tpl_vars['lang']['journal_from'];  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h5><p>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['content'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</p>';  if (((is_array($_tmp=$this->_tpl_vars['comment']['has_edit_auth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<div style="text-align:right;"><a data-role="button" data-inline="true" data-icon="check" href="?action=journal_view_mobile_comment_modify&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;p_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;c_id=';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  if (( ((is_array($_tmp=$_SESSION['_smartphone_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON )):  echo '';  echo $this->_tpl_vars['lang']['_mobile_separator'];  echo '';  endif;  echo '<a data-role="button" data-inline="true" data-icon="delete" href="?action=journal_view_mobile_comment_delete&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;p_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;c_id=';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a></div>';  endif;  echo '';  endforeach; endif; unset($_from);  echo '<br /><br />';  endif;  echo '';  endif;  echo '<div style="text-align:right"><a href="?action=journal_view_main_detail&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;p_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div>'; ?>