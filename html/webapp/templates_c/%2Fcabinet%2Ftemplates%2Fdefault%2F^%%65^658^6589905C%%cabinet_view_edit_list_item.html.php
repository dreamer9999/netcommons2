<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from cabinet_view_edit_list_item.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cabinet_view_edit_list_item.html', 3, false),array('modifier', 'sprintf', 'cabinet_view_edit_list_item.html', 13, false),array('modifier', 'timezone_date_format', 'cabinet_view_edit_list_item.html', 21, false),)), $this); ?>
<?php echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'change_disp' )):  echo '<label for="cabinet_current';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="display-block"><input id="cabinet_current';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="change_disp" type="radio" value="';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick=\'cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeCurrent("';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");\' /></label>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'cabinet_name' )):  echo '<label for="cabinet_current';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="display-block">';  echo $this->_tpl_vars['cabinet']['cabinet_name'];  echo '</label>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'total_size' )):  echo '<label for="cabinet_current';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="display-block">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['cabinet_size_value'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet']['total_size_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['cabinet']['total_size'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet']['total_size_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['cabinet']['total_size'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</label>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'creator' )):  echo '<label for="cabinet_current';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="display-block">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_handle.html", 'smarty_include_vars' => array('handle' => $this->_tpl_vars['handle'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</label>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'create_date' )):  echo '<label for="cabinet_current';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="display-block">';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet']['insert_time'])) ? $this->_run_mod_handler('timezone_date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : timezone_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_date_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</label>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'manage' )):  echo '<a href="#" class="syslink" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_ref_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick=\'cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].referCab(event,"';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  echo $this->_tpl_vars['lang']['_ref'];  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a href="#" class="syslink" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_edit_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick=\'cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].modifyCab("';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a href="#" class="syslink" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_del_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick=\'cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].deleteCab("';  echo ((is_array($_tmp=$this->_tpl_vars['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '", "';  echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['cabinet_name'])) : sprintf($_tmp, ($this->_tpl_vars['cabinet_name']))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a>';  endif;  echo ''; ?>