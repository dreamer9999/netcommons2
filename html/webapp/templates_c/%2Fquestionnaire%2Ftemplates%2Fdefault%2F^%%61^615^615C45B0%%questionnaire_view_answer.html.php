<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from questionnaire_view_answer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_view_answer.html', 3, false),array('modifier', 'nl2br', 'questionnaire_view_answer.html', 9, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_QUESTION_TYPE_RADIO_VALUE && ((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_NORMAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['question']['choices'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice']):
        $this->_foreach['choice']['iteration']++;
 echo '<input type="hidden" name="choice_id[';  echo ((is_array($_tmp=$this->_tpl_vars['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '][]" value="';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><label class="questionnaire_choice" for="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" name="answer_value[';  echo ((is_array($_tmp=$this->_tpl_vars['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" value="';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</label>';  if (! empty ( $this->_tpl_vars['question']['answer'] )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer_check.html", 'smarty_include_vars' => array('answer' => ((is_array($_tmp=$this->_tpl_vars['question']['answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_QUESTION_TYPE_RADIO_VALUE && ((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_REFERENCE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['question']['choices'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice']):
        $this->_foreach['choice']['iteration']++;
 echo '<label><input type="radio" onclick="if (this.checked) {this.checked = false;}" />';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</label>';  endforeach; endif; unset($_from);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_QUESTION_TYPE_RADIO_VALUE && ((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_ANSWER)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['question']['choices'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice']):
        $this->_foreach['choice']['iteration']++;
 echo '<label class="questionnaire_choice" for="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['answer']['answer_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['answer']['answer_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" />';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</label>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer_check.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_QUESTION_TYPE_CHECKBOX_VALUE && ((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_NORMAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['question']['choices'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice']):
        $this->_foreach['choice']['iteration']++;
 echo '<input type="hidden" name="choice_id[';  echo ((is_array($_tmp=$this->_tpl_vars['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '][]" value="';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><label class="questionnaire_choice" for="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="answer_value[';  echo ((is_array($_tmp=$this->_tpl_vars['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '][';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" value="';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</label>';  if (! empty ( $this->_tpl_vars['question']['answer'] )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer_check.html", 'smarty_include_vars' => array('answer' => ((is_array($_tmp=$this->_tpl_vars['question']['answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_QUESTION_TYPE_CHECKBOX_VALUE && ((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_REFERENCE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['question']['choices'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice']):
        $this->_foreach['choice']['iteration']++;
 echo '<label><input type="checkbox" onclick="return false;" />';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</label>';  endforeach; endif; unset($_from);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['question']['question_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_QUESTION_TYPE_CHECKBOX_VALUE && ((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_ANSWER)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['question']['choices'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice']):
        $this->_foreach['choice']['iteration']++;
 echo '<label class="questionnaire_choice" for="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['answer']['answer_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="questionnaire_answer';  echo ((is_array($_tmp=$this->_tpl_vars['choice']['choice_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['answer']['answer_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" />';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['choice']['choice_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '</label>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_answer_check.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_NORMAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<textarea cols="61" rows="4" class="textarea" name="answer_value[';  echo ((is_array($_tmp=$this->_tpl_vars['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']">';  if (! empty ( $this->_tpl_vars['question']['answer'] )):  echo '';  echo $this->_tpl_vars['question']['answer']['answer_value'];  echo '';  endif;  echo '</textarea>';  elseif (((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_REFERENCE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<textarea cols="61" rows="4" class="textarea" onkeydown="if (event.keyCode!=9) {this.blur();return false;}"></textarea>';  elseif (((is_array($_tmp=$this->_tpl_vars['choiceDisplay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@QUESTIONNAIRE_CHOICE_DISPLAY_ANSWER)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<textarea cols="61" rows="4" class="textarea" readOnly=\'true\'>';  echo $this->_tpl_vars['answer']['answer_value'];  echo '</textarea>';  endif;  echo ''; ?>