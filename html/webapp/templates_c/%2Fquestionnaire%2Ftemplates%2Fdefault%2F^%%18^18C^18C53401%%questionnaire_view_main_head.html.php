<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from questionnaire_view_main_head.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_image_url', 'questionnaire_view_main_head.html', 4, false),array('modifier', 'escape', 'questionnaire_view_main_head.html', 4, false),array('modifier', 'sprintf', 'questionnaire_view_main_head.html', 13, false),)), $this); ?>
<?php echo '';  echo '';  if (! empty ( $this->_tpl_vars['action']['questionnaire']['icon_name'] )):  echo '<img class="title_icon" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['icon_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" alt="" />';  endif;  echo '<span class="questionnaire_name">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>';  if (! empty ( $this->_tpl_vars['action']['questionnaire']['period'] )):  echo '<span class="require">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_period_notice'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span>';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['answerLinkShow'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['answer_show_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a class="syslink questionnaire_result_link" href="#" title="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_goto_answer_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="questionnaireCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showSummaryList(event, ';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ', \'';  echo ((is_array($_tmp=$_SESSION['_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_goto_answer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  else:  echo '<p>';  echo $this->_tpl_vars['lang']['questionnaire_has_finished'];  echo '</p>';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['totalLinkShow'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a class="syslink questionnaire_result_link" href="#" title="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_goto_total_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="questionnaireCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showTotal(event, ';  echo ((is_array($_tmp=$this->_tpl_vars['action']['questionnaire']['questionnaire_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');return false;">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['questionnaire_goto_total'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo ''; ?>