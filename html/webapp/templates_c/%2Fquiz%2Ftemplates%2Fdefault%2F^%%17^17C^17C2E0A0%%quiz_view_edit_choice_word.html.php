<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from quiz_view_edit_choice_word.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quiz_view_edit_choice_word.html', 5, false),array('modifier', 'sprintf', 'quiz_view_edit_choice_word.html', 15, false),array('modifier', 'get_themes_image', 'quiz_view_edit_choice_word.html', 16, false),)), $this); ?>
<?php echo '';  echo '<tr><td class="center"><input type="hidden" name="choice_word_id[';  echo ((is_array($_tmp=$this->_tpl_vars['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" />';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</td><td><input id="quiz_correct_word';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="text" class="quiz_word_text" name="choice_word_value[';  echo ((is_array($_tmp=$this->_tpl_vars['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" /></td>';  if (((is_array($_tmp=$this->_tpl_vars['action']['quiz']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUIZ_STATUS_INACTIVE_VALUE):  echo '<td><a class="syslink" href="#" onclick="quizCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].deleteChoice(this, \'';  echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_confirm'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_correct_word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_correct_word'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['choice']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['choice']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '\', \'';  echo ((is_array($_tmp=@QUIZ_QUESTION_TYPE_WORD_VALUE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;"><img class="icon" src="';  echo ((is_array($_tmp="trash.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_delete_choice'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_delete_choice'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></a></td>';  endif;  echo '</tr><script class="nc_script" type="text/javascript">var quizForm = $("quiz_question_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");quizForm["choice_word_id[';  echo ((is_array($_tmp=$this->_tpl_vars['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']"].value = "';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";';  if (empty ( $this->_tpl_vars['choice']['choice_id'] )):  echo 'quizForm["choice_word_value[';  echo ((is_array($_tmp=$this->_tpl_vars['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']"].value = "';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['quiz_correct_word'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['choice']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['choice']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '";';  else:  echo 'quizForm["choice_word_value[';  echo ((is_array($_tmp=$this->_tpl_vars['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']"].value = "';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '";';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['quiz']['status'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != QUIZ_STATUS_INACTIVE_VALUE):  echo 'quizForm["choice_word_value[';  echo ((is_array($_tmp=$this->_tpl_vars['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']"].disabled = true;';  endif;  echo 'quizForm = null;</script>'; ?>