<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from quiz_view_edit_answer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quiz_view_edit_answer.html', 9, false),array('modifier', 'sprintf', 'quiz_view_edit_answer.html', 17, false),)), $this); ?>
<?php echo '';  echo '<div class="quiz_head">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_main_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_print.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<table class="outer quiz_summary" summary="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_answer_count_summary'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_answer_count.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<tr class="row"><th class="nowrap" scope="row">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['quiz_correct_percent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</th><td>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['quiz_percent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['correctPercent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['correctPercent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</td></tr></table><form id="quiz_answer_result_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="quiz_answer_result" action="#" onsubmit="return false;"><input type="hidden" name="action" value="quiz_action_edit_mark" /><input type="hidden" name="quiz_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['quiz']['quiz_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  $this->assign('question', ($this->_tpl_vars['action']['question']));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_question.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_correct.html", 'smarty_include_vars' => array('answerCorrect' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $this->assign('notAnswer', true);  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['answers'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['answer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['answer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['answer']):
        $this->_foreach['answer']['iteration']++;
 echo '';  $this->assign('summary', ($this->_tpl_vars['answer']));  echo '<div class="quiz_question"><div class="float-left">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['answer']['insert_user_name'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['answer']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['quiz_parenthesis_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['answer']['answer_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['answer']['answer_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_answer_flag.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><div class="align-right">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_answer_link.html", 'smarty_include_vars' => array('summary' => ((is_array($_tmp=$this->_tpl_vars['answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><br class="float-clear" /><div class="quiz_answer">';  if (( ((is_array($_tmp=$this->_tpl_vars['answer']['answer_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_answer.html", 'smarty_include_vars' => array('choiceDisplay' => ((is_array($_tmp=@QUIZ_CHOICE_DISPLAY_ANSWER)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $this->assign('notAnswer', false);  echo '';  endif;  echo '&nbsp;</div></div>';  endforeach; endif; unset($_from);  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUIZ_QUESTION_TYPE_TEXTAREA_VALUE && ! empty ( $this->_tpl_vars['action']['answers'] ) && ! ((is_array($_tmp=$this->_tpl_vars['notAnswer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "quiz_view_mark_button.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../quiz_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">quizCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].quiz_id = "';  echo ((is_array($_tmp=$this->_tpl_vars['action']['quiz']['quiz_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";</script>'; ?>