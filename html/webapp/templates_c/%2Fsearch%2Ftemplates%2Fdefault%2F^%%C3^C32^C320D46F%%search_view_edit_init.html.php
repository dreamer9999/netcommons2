<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from search_view_edit_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search_view_edit_init.html', 8, false),)), $this); ?>
<?php echo '<div class="top_description">';  echo $this->_tpl_vars['lang']['search_description'];  echo '</div><div class="outerdiv"><form onsubmit="return false;"><table class="outer" summary="';  echo ((is_array($_tmp=@_SUMMARY_SETTINGFORM)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><tr class="row"><th scope="row" class="nowrap">';  echo '';  echo $this->_tpl_vars['lang']['search_show_mode'];  echo '</th><td class="nowrap"><select size=\'1\' name=\'show_mode\'><option value=\'';  echo ((is_array($_tmp=@SEARCH_SHOW_MODE_NORMAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['search_blocks']['show_mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == SEARCH_SHOW_MODE_NORMAL )):  echo ' selected="selected"';  endif;  echo '>';  echo '';  echo $this->_tpl_vars['lang']['search_normal_mode'];  echo '</option><option value=\'';  echo ((is_array($_tmp=@SEARCH_SHOW_MODE_SIMPLE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['search_blocks']['show_mode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == SEARCH_SHOW_MODE_SIMPLE )):  echo ' selected="selected"';  endif;  echo '>';  echo '';  echo $this->_tpl_vars['lang']['search_simple_mode'];  echo '</option></select></td></tr><tr class="row"><th scope="row" class="nowrap">';  echo '';  echo $this->_tpl_vars['lang']['search_default_target_module'];  echo '</th><td class="nowrap">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['modules'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['module'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['module']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module']):
        $this->_foreach['module']['iteration']++;
 echo '<label for="search_target_module';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['module']['module_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="search_target_module';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['module']['module_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type=\'checkbox\' name=\'target_modules[]\' value=\'';  echo ((is_array($_tmp=$this->_tpl_vars['module']['dir_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\' ';  if (((is_array($_tmp=$this->_tpl_vars['module']['target_module_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'checked="checked" ';  endif;  echo '/>';  echo ((is_array($_tmp=$this->_tpl_vars['module']['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</label>';  if (( ! ((is_array($_tmp=($this->_foreach['module']['iteration'] == $this->_foreach['module']['total']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<br />';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</td></tr></table><div class="align-center"><input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick="searchCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].registStyle(this.form); return false;"></div></form></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../search_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>