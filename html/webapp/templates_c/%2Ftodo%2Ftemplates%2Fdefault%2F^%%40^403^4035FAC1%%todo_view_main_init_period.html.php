<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from todo_view_main_init_period.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'todo_view_main_init_period.html', 3, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['task']['edit_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'todo_view_main_init'):  echo '<a class="link display-block" href="#" title="';  echo $this->_tpl_vars['lang']['todo_period_edit'];  echo '" onclick="todoCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showPopup(\'';  echo ((is_array($_tmp=$this->_tpl_vars['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=@TODO_PERIOD)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', event);return false;" onfocus="this.onmouseover(event);" onmouseover="commonCls.blockNotice(event);">';  endif;  echo '';  if (! empty ( $this->_tpl_vars['task']['period'] )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['task']['display_period_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo $this->_tpl_vars['lang']['todo_period_none'];  echo '';  endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['task']['edit_authority'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'todo_view_main_init'):  echo '</a>';  endif;  echo ''; ?>
		