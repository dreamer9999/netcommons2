<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from cabinet_view_main_explorer_folder_tree.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cabinet_view_main_explorer_folder_tree.html', 4, false),array('modifier', 'get_modules_image', 'cabinet_view_main_explorer_folder_tree.html', 6, false),)), $this); ?>
<?php echo '';  $this->assign('parent_id', '0');  echo '<div id="cabinet_explore_folder_tree';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="cabinet_explore_folder_tree"><div class="nowrap"><img class="icon" src="';  echo ((is_array($_tmp="cabinet.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" title="" alt="" />';  if (( ((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'cabinet_view_main_move' )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_main_filename.html", 'smarty_include_vars' => array('file_id' => ((is_array($_tmp=$this->_tpl_vars['parent_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'file_name' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinet']['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'explorer_pos' => 'move')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_main_filename.html", 'smarty_include_vars' => array('file_id' => ((is_array($_tmp=$this->_tpl_vars['parent_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'file_name' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinet']['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'explorer_pos' => 'left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_main_explorer_folder_recursive.html", 'smarty_include_vars' => array('parent_id' => ((is_array($_tmp=$this->_tpl_vars['parent_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>'; ?>
