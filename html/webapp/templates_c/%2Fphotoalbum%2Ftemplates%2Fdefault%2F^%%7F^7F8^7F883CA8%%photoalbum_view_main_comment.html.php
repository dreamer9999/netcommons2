<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from photoalbum_view_main_comment.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'photoalbum_view_main_comment.html', 3, false),array('modifier', 'timezone_date_format', 'photoalbum_view_main_comment.html', 18, false),array('modifier', 'sprintf', 'photoalbum_view_main_comment.html', 22, false),array('modifier', 'nl2br', 'photoalbum_view_main_comment.html', 37, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['commentCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '<div class="photoalbum_comment_head">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</div>';  endif;  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['comments'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
 echo '<div class="photoalbum_comment"><div class="photoalbum_operation"><div class="photoalbum_comment_creator">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "photoalbum_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['comment']['insert_user_name'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['comment']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><div class="photoalbum_comment_manage"><span class="photoalbum_comment_time">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['insert_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span>';  if (((is_array($_tmp=$this->_tpl_vars['comment']['edit_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a class="syslink" href="#" title="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_edit_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="photoalbumCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showCommentEntry(\'';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;">';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a class="syslink" href="#" title="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="photoalbumCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].deleteComment(\'';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_confirm'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['lang']['photoalbum_comment'])) : sprintf($_tmp, ($this->_tpl_vars['lang']['photoalbum_comment']))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;">';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a>';  endif;  echo '</div><br class="float-clear" /></div><div id="photoalbum_comment_value';  echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']['comment_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</div></div>';  endforeach; endif; unset($_from);  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['photo']['comment_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<form id="photoalbum_comment_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="photoalbum_comment_form" action="#" onsubmit="photoalbumCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].enterComment();return false;"><input type="hidden" name="action" value="photoalbum_action_main_comment_entry" /><input type="hidden" name="photoalbum_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['album']['photoalbum_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><input type="hidden" name="album_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['album']['album_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><input type="hidden" name="photo_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['photo']['photo_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><input type="hidden" name="comment_id" /><label class="bold" for="photoalbum_comment_value';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['photoalbum_comment_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '<br /><textarea id="photoalbum_comment_value';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="textarea" name="comment_value"></textarea></label><div class="btn-bottom"><input class="btn-width" type="submit" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" /><input class="lined_btn btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="photoalbumCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].cancelComment();" /></div></form>';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../photoalbum_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">commonCls.focus($("photoalbum_comment_value';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));</script>'; ?>