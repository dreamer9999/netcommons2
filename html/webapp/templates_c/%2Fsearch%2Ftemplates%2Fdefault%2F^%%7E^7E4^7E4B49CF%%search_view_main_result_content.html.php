<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from search_view_main_result_content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search_view_main_result_content.html', 4, false),array('modifier', 'sprintf', 'search_view_main_result_content.html', 4, false),array('modifier', 'strtotime', 'search_view_main_result_content.html', 21, false),array('modifier', 'date', 'search_view_main_result_content.html', 22, false),)), $this); ?>
<?php echo '<div class="search_result_title"><a href="';  echo ((is_array($_tmp=$this->_tpl_vars['item']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_ref_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" class="search_subject">';  echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  if (( ((is_array($_tmp=$this->_tpl_vars['item']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '';  echo $this->_tpl_vars['lang']['search_user_name_prefix'];  echo '<a href="#" title="';  if (((is_array($_tmp=$_SESSION['_login_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ''):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['search_add_user_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  else:  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_user_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '" class="link search_user_name" onclick=\'commonCls.showUserDetail(event,"';  echo ((is_array($_tmp=$this->_tpl_vars['item']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");return false;\'>';  echo ((is_array($_tmp=$this->_tpl_vars['item']['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo '</div><div class="search_result_content"><span class="search_description">';  echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>';  if (( ((is_array($_tmp=$this->_tpl_vars['item']['pubDate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  echo $this->_tpl_vars['lang']['search_time_prefix'];  echo '<span class="search_time">';  $this->assign('strtotime', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['pubDate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp)));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_full_date_format'])) ? $this->_run_mod_handler('date', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['strtotime'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : date($_tmp, ((is_array($_tmp=$this->_tpl_vars['strtotime'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span>';  endif;  echo '</div>'; ?>