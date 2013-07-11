<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from questionnaire_view_edit_answer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_view_edit_answer.html', 9, false),array('modifier', 'sprintf', 'questionnaire_view_edit_answer.html', 22, false),)), $this); ?>
<?php echo '';  echo '<div class="questionnaire_head">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_main_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_print.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<table class="outer questionnaire_summary" summary="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_answer_count_summary'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer_count.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</table>';  $this->assign('question', ($this->_tpl_vars['action']['question']));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_question.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_description.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['answers'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['answer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['answer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['answer']):
        $this->_foreach['answer']['iteration']++;
 echo '';  $this->assign('summary', ($this->_tpl_vars['answer']));  echo '<div class="questionnaire_question"><div class="float-left">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['answer']['insert_user_name'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['answer']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_number.html", 'smarty_include_vars' => array('questionnaireNumber' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_parenthesis_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['answer']['answer_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['answer']['answer_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if (empty ( $this->_tpl_vars['answer']['answer_id'] )):  echo '<span class="questionnaire_answer_flag">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_answer_none'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>';  endif;  echo '</div><div class="align-right">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer_link.html", 'smarty_include_vars' => array('summary' => ((is_array($_tmp=$this->_tpl_vars['answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><br class="float-clear" /><div class="questionnaire_answer">';  if (( ((is_array($_tmp=$this->_tpl_vars['answer']['answer_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer.html", 'smarty_include_vars' => array('choiceDisplay' => ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_ANSWER)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '&nbsp;</div></div>';  endforeach; endif; unset($_from);  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../questionnaire_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">questionnaireCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].questionnaire_id = "';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";</script>'; ?>