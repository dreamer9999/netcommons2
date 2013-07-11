<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from questionnaire_view_main_question_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_view_main_question_form.html', 7, false),)), $this); ?>
<?php echo '';  echo '<div class="questionnaire_head">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_main_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><form id="questionnaire_answer_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" action="#" onsubmit="return false;">';  if (((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == QUESTIONNAIRE_TYPE_LIST_VALUE):  echo '<input type="hidden" name="action" value="questionnaire_action_main_confirm" />';  else:  echo '<input type="hidden" name="action" value="questionnaire_action_main_answer" />';  endif;  echo '<input type="hidden" name="questionnaire_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  if (((is_array($_tmp=$this->_tpl_vars['action']['single'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<input type="hidden" name="question_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  $this->assign('question', ($this->_tpl_vars['action']['question']));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_main_question_answer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_main_keypass.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['questions'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['question']):
        $this->_foreach['question']['iteration']++;
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_main_question_answer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_view_main_image_authentication.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</form>';  if (! ((is_array($_tmp=$this->_tpl_vars['action']['reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<div class="btn-bottom"><input class="btn-width" type="button" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="questionnaireCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].answer();" /></div>';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../questionnaire_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>