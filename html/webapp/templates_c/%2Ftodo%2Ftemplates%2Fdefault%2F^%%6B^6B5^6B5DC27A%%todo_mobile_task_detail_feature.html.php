<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from todo_mobile_task_detail_feature.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'todo_mobile_task_detail_feature.html', 4, false),array('modifier', 'sprintf', 'todo_mobile_task_detail_feature.html', 5, false),array('modifier', 'nl2br', 'todo_mobile_task_detail_feature.html', 30, false),)), $this); ?>
<?php echo '<p><h6>';  if (((is_array($_tmp=$this->_tpl_vars['task']['priority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PRIORITY_HIGH):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_priority'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['todo_priority_high'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['todo_priority_high'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['task']['priority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PRIORITY_MIDDLE):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_priority'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['todo_priority_middle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['todo_priority_middle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_priority'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['todo_priority_low'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['todo_priority_low'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_progress'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['progress'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['progress'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</h6>';  if (((is_array($_tmp=$this->_tpl_vars['task']['period_class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PERIOD_CLASS_NAME_SOON):  echo '<span style="color:red;font-size:small;">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_period'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span><br />';  elseif (((is_array($_tmp=$this->_tpl_vars['task']['period_class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == TODO_PERIOD_CLASS_NAME_OVER):  echo '<span style="color:blue;font-size:small;">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_period'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span><br />';  elseif (((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<span style="font-size:small;">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_mobile_period'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span><br />';  endif;  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['task']['task_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp));  echo '<br />';  if (((is_array($_tmp=$this->_tpl_vars['task']['edit_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a href="?action=todo_view_main_entry&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;task_id=';  echo ((is_array($_tmp=$this->_tpl_vars['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  echo $this->_tpl_vars['lang']['_mobile_separator'];  echo '<a href="?action=todo_view_mobile_dialog&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;task_id=';  echo ((is_array($_tmp=$this->_tpl_vars['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;target_state=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['target_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a><br />';  endif;  echo '</p>'; ?>