<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:32
         compiled from linklist_view_main_category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'linklist_view_main_category.html', 3, false),array('modifier', 'sprintf', 'linklist_view_main_category.html', 13, false),)), $this); ?>
<?php echo '';  echo '<form class="popupClass" action="#" onsubmit="parent.linklistCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].enterCategory();return false;"><table class="outer" summary="';  echo ((is_array($_tmp=@_SUMMARY_SETTINGFORM)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><tr class="row"><th class="nowrap" scope="row"><label for="linklist_category_name_new';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['linklist_category_name'];  echo '</label></th><td class="nowrap"><input class="linklist_category_name" type="text" name="category_name" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['linklist_category_new_name'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['categoryNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['action']['categoryNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" /></td></tr></table><div class="btn-bottom"><input class="btn-width" type="submit" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" /><input class="btn-width lined_btn" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="parent.linklistCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].popup.closePopup();" /></div></form>'; ?>