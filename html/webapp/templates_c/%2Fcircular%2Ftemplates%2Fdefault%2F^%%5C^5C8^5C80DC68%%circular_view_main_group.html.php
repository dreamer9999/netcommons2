<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from circular_view_main_group.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'circular_view_main_group.html', 4, false),array('modifier', 'get_themes_image', 'circular_view_main_group.html', 34, false),)), $this); ?>
<?php echo '';  echo '<div class="outerdiv"><input type="hidden" name="group_id" id="group_id';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['group_info']['group_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><h4>';  echo $this->_tpl_vars['lang']['circular_add_favorite_group'];  echo '</h4><div class="circular_group_height"><span>';  echo $this->_tpl_vars['lang']['circular_group_name'];  echo '</span><input type="text" class="circular_group_value" name="group_name" id="group_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" value="';  echo $this->_tpl_vars['action']['group_info']['group_name'];  echo '" /></div><div><span>';  echo $this->_tpl_vars['lang']['circular_group_member'];  echo '</span>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "circular_select_member_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><div class="circular_group_height"><span>';  echo $this->_tpl_vars['lang']['circular_group_edit'];  echo '</span><select class="circular_group_value" size="1" name="group_list" id="group_list';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onchange="circularCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].setGroupInfo(); return false;" /><option value="0">';  echo $this->_tpl_vars['lang']['circular_group_edit_default'];  echo '</option>';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['group_member_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_list']):
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['group_list']['group_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['action']['group_info']['group_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['group_list']['group_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['group_list']['group_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endforeach; endif; unset($_from);  echo '</select>';  if (((is_array($_tmp=$this->_tpl_vars['action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'circular_view_main_group_init'):  echo '<span class="circular_padding"><a href="#" onclick="circularCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].deleteGroup(\'';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['circular_group_delete_confirm'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;"><img class="icon" src="';  echo ((is_array($_tmp='trash.gif')) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" title="';  echo $this->_tpl_vars['lang']['circular_group_delete_title'];  echo '" alt="';  echo $this->_tpl_vars['lang']['circular_group_delete_title'];  echo '" /></a></span>';  endif;  echo '</div><div class="btn-bottom"><input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick="circularCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].entryGroupMember(); return false;" /><input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="commonCls.removeBlock(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;" /></div></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../circular_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>