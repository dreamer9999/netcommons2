<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from questionnaire_view_print.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_themes_image', 'questionnaire_view_print.html', 5, false),array('modifier', 'escape', 'questionnaire_view_print.html', 5, false),)), $this); ?>
<?php echo '';  echo '<div class="align-right print_preview_none"><a href="#" class="link" onclick="commonCls.print(Element.getParentElement(this, 2));return false;"><img src="';  echo ((is_array($_tmp="print.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_print_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_print_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></a></div>'; ?>