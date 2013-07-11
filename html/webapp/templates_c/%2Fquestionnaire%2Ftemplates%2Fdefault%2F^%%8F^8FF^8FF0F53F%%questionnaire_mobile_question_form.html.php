<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from questionnaire_mobile_question_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'questionnaire_mobile_question_form.html', 5, false),)), $this); ?>
<?php echo '';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_mobile_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<form method="post" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><div><input type="hidden" name="action" value="questionnaire_action_main_answer"><input type="hidden" name="questionnaire_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input type="hidden" name="block_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  if (((is_array($_tmp=$this->_tpl_vars['action']['single'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<input type="hidden" name="question_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['question']['question_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $this->assign('question', ($this->_tpl_vars['action']['question']));  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_mobile_question_answer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_mobile_keypass.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['questions'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['question']):
        $this->_foreach['question']['iteration']++;
 echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_mobile_question_answer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endforeach; endif; unset($_from);  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_mobile_image_authentication.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  if (! ((is_array($_tmp=$this->_tpl_vars['action']['reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<input type="submit" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  endif;  echo '';  echo $this->_tpl_vars['token_form'];  echo '';  echo $this->_tpl_vars['session_form'];  echo '</div></form>';  if (( ! ((is_array($_tmp=$this->_tpl_vars['action']['single'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "questionnaire_mobile_goto_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo ''; ?>