<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from cabinet_view_main_explorer_folder_recursive.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cabinet_view_main_explorer_folder_recursive.html', 3, false),array('modifier', 'get_modules_image', 'cabinet_view_main_explorer_folder_recursive.html', 7, false),)), $this); ?>
<?php echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['folder_list'][$this->_tpl_vars['parent_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['folder_list'][$this->_tpl_vars['parent_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file_id'] => $this->_tpl_vars['folder']):
 echo '<div class="nowrap">';  $_from = ((is_array($_tmp=$this->_tpl_vars['folder']['branches'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['branch']):
 echo '<img class="cabinet_branch" src="';  echo ((is_array($_tmp=($this->_tpl_vars['branch']).".gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '" title="" alt="" />';  endforeach; endif; unset($_from);  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['folder_list'][$this->_tpl_vars['file_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<a class="link hover_highlight" href="#" onclick=\'cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].switchBranch("';  echo ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");return false;\'><img id="cabinet_branch_image';  echo ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="cabinet_branch" src="';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['folder_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || in_array ( ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) , ((is_array($_tmp=$this->_tpl_vars['action']['current_parent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) )):  echo '';  echo ((is_array($_tmp="branch_minus.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '';  else:  echo '';  echo ((is_array($_tmp="branch_plus.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '';  endif;  echo '" alt="" title="" /></a>';  else:  echo '<img id="cabinet_branch_image';  echo ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="cabinet_branch" src="';  if (( ((is_array($_tmp=$this->_tpl_vars['folder']['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 1 )):  echo '';  echo ((is_array($_tmp="B.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '';  else:  echo '';  echo ((is_array($_tmp="-.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '';  endif;  echo '" alt="" title="" />';  endif;  echo '<img id="cabinet_folder_image';  echo ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="icon" src="';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['folder_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || in_array ( ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) , ((is_array($_tmp=$this->_tpl_vars['action']['current_parent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) )):  echo '';  echo ((is_array($_tmp="open_folder.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '';  else:  echo '';  echo ((is_array($_tmp="close_folder.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '';  endif;  echo '" alt="" title="" />';  if (( ((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'cabinet_view_main_move' )):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_main_filename.html", 'smarty_include_vars' => array('file_id' => ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'file_name' => ((is_array($_tmp=$this->_tpl_vars['folder']['file_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'explorer_pos' => 'move')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  else:  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_main_filename.html", 'smarty_include_vars' => array('file_id' => ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'file_name' => ((is_array($_tmp=$this->_tpl_vars['folder']['file_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'explorer_pos' => 'left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</div><div id="cabinet_children_folder';  echo ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['folder_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ! in_array ( ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) , ((is_array($_tmp=$this->_tpl_vars['action']['current_parent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) )):  echo 'display-none ';  endif;  echo '';  if (( ! ((is_array($_tmp=$this->_tpl_vars['action']['folder_list'][$this->_tpl_vars['file_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo 'cabinet_nochild';  endif;  echo '">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_main_explorer_folder_recursive.html", 'smarty_include_vars' => array('parent_id' => ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endforeach; endif; unset($_from);  echo '';  endif;  echo ''; ?>
