<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from chat_main.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'chat_main.html', 3, false),array('modifier', 'get_modules_image', 'chat_main.html', 6, false),)), $this); ?>
<?php echo '<div class="chat_block_title">';  echo $this->_tpl_vars['lang']['chat_user'];  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['chat_login'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo $this->_tpl_vars['lang']['chat_item'];  echo '<div class="outerdiv"><a href="#" title="';  echo $this->_tpl_vars['lang']['chat_join_title'];  echo '" onclick="chatCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].openWindow(\'.';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '?action=chat_view_main_block&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;page_id=';  echo ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['chat_obj']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['chat_obj']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'); return false;"><img class="icon" alt="" src="';  echo ((is_array($_tmp="chat.gif")) ? $this->_run_mod_handler('get_modules_image', true, $_tmp) : get_modules_image($_tmp));  echo '"/><br />';  echo $this->_tpl_vars['lang']['chat_join'];  echo '</a></div></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "chat_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>