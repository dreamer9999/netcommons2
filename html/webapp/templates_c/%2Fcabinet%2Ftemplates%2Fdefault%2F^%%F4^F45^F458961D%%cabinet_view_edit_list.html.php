<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from cabinet_view_edit_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'cabinet_view_edit_list.html', 4, false),array('modifier', 'escape', 'cabinet_view_edit_list.html', 4, false),)), $this); ?>
<?php echo '<div class="top_description">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_list_desc'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['cabinet_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</div><div id="cabinet_list';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><form action="#" method="post" onsubmit="return false;"><table class="grid_header" cellspacing="0" summary=""><tr><th class="grid_change_disp" scope="col">&nbsp;</th><th class="_sort_cabinet_name grid_name" scope="col">';  echo $this->_tpl_vars['lang']['cabinet_title'];  echo '</th><th class="_sort_total_size cabinet_total_size" scope="col">';  echo $this->_tpl_vars['lang']['cabinet_total_size'];  echo '</th><th class="_sort_insert_user_name grid_creator" scope="col">';  echo $this->_tpl_vars['lang']['_creator'];  echo '</th><th class="_sort_insert_time grid_create_date" scope="col">';  echo $this->_tpl_vars['lang']['_create_date'];  echo '</th><th class="grid_manage" scope="col">';  echo $this->_tpl_vars['lang']['_manage'];  echo '</th></tr></table><table class="grid cabinet_grid_table" cellspacing="0" summary="';  echo ((is_array($_tmp=@_SUMMARY_LIST)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['cabinets'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '<tr id="cabinet_current_row';  echo ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']]['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="grid_row"><td class="grid_change_disp">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_edit_list_item.html", 'smarty_include_vars' => array('item_type' => 'change_disp','cabinet' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="grid_name">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_edit_list_item.html", 'smarty_include_vars' => array('item_type' => 'cabinet_name','cabinet' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="cabinet_total_size">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_edit_list_item.html", 'smarty_include_vars' => array('item_type' => 'total_size','cabinet' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="grid_creator">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_edit_list_item.html", 'smarty_include_vars' => array('item_type' => 'creator','handle' => $this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']]['insert_user_name'],'user_id' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']]['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="grid_create_date">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_edit_list_item.html", 'smarty_include_vars' => array('item_type' => 'create_date','cabinet' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="grid_manage">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabinet_view_edit_list_item.html", 'smarty_include_vars' => array('item_type' => 'manage','cabinet_name' => $this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']]['cabinet_name'],'cabinet_id' => ((is_array($_tmp=$this->_tpl_vars['action']['cabinets'][$this->_sections['i']['index']]['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  endfor; endif;  echo '</table></form></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../cabinet_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].initCabList(';  echo ((is_array($_tmp=$this->_tpl_vars['action']['visibleRows'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ', ';  echo ((is_array($_tmp=$this->_tpl_vars['action']['cabinetCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].cabinet_id = "';  echo ((is_array($_tmp=$this->_tpl_vars['action']['cabinet_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].checkCurrent();</script>'; ?>