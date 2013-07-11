<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:34
         compiled from journal_view_main_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'journal_view_main_init.html', 5, false),array('modifier', 'get_themes_image', 'journal_view_main_init.html', 13, false),)), $this); ?>
<?php echo '<div class="outerdiv">';  echo '<div class="nowrap bold">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['journal_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</div><table class="journal_head_table"><tr><td class="nowrap journal_top journal_right_space">';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['has_post_auth'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) && ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['active_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a class="syslink" href="#" title="';  echo $this->_tpl_vars['lang']['journal_new_title'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', {\'action\':\'journal_view_main_post\'}, {\'loading_el\':this}); return false;"><img class="icon" alt="" src="';  echo ((is_array($_tmp="edit.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '"/>';  echo $this->_tpl_vars['lang']['journal_new'];  echo '</a>';  endif;  echo '</td><td class="nowrap align-right">';  if (((is_array($_tmp=$this->_tpl_vars['action']['pager']['total_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 1):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "journal_view_main_init_page.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "journal_view_main_init_control.html", 'smarty_include_vars' => array('position' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr></table>';  if (((is_array($_tmp=$this->_tpl_vars['action']['journal_count'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 0):  echo '';  echo $this->_tpl_vars['lang']['journal_none_post'];  echo '';  else:  echo '<div class="outerdiv">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['journal_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
 echo '<div id="journal_detail';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['post']['post_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "journal_view_main_item.html", 'smarty_include_vars' => array('item' => $this->_tpl_vars['post'],'from' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endforeach; endif; unset($_from);  echo '</div><table class="journal_head_table"><tr><td class="nowrap"/><td class="nowrap align-right">';  if (((is_array($_tmp=$this->_tpl_vars['action']['pager']['total_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 1):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "journal_view_main_init_page.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "journal_view_main_init_control.html", 'smarty_include_vars' => array('position' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr></table>';  endif;  echo '<input type="hidden" id="journal_id';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['journal_obj']['journal_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></div>';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../journal_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if (! empty ( $this->_tpl_vars['action']['trackback_result'] )):  echo '<script class="nc_script" type="text/javascript">commonCls.alert(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['trackback_result'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');</script>';  endif;  echo ''; ?>