<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:50
         compiled from header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header.html', 4, false),array('modifier', 'strip', 'header.html', 9, false),array('modifier', 'lower', 'header.html', 25, false),array('modifier', 'get_image_url', 'header.html', 50, false),array('modifier', 'implode', 'header.html', 57, false),)), $this); ?>

<?php echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_language'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" lang="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_language'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><head><meta http-equiv="content-type" content="text/html; charset=';  echo ((is_array($_tmp=@_CHARSET)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  if (((is_array($_tmp=$this->_tpl_vars['header_field']['meta_language'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<meta http-equiv="content-language" content="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_language'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  endif;  echo '<meta name="robots" content="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_robots'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><meta name="keywords" content="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['header_field']['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp));  echo '" /><meta name="description" content="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['header_field']['meta_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp));  echo '" /><meta name="rating" content="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_rating'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><meta name="author" content="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_author'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><meta name="copyright" content="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['meta_copyright'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><meta http-equiv="content-script-type" content="text/javascript" /><meta http-equiv="content-style-type" content="text/css" />';  echo '<link rel="canonical" href="';  echo ((is_array($_tmp=@PERMALINK_URL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  echo '<title>';  if (! isset ( $_SESSION['_page_title'] )):  echo '';  echo $this->_tpl_vars['module_obj']['module_name'];  echo ' - ';  else:  echo '';  echo ((is_array($_tmp=$_SESSION['_page_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (((is_array($_tmp=$_SESSION['_page_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo ' - ';  endif;  echo '';  endif;  echo '';  if (((is_array($_tmp=$_SESSION['_site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == "" || ((is_array($_tmp=$_SESSION['_site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == NULL):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['sitename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo ((is_array($_tmp=$_SESSION['_site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '</title><script type="text/javascript">_nc_lang_name = "';  echo ((is_array($_tmp=$_SESSION['_lang'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";_nc_layoutmode = "';  if (isset ( $this->_tpl_vars['layoutmode'] )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  else:  echo '';  echo ((is_array($_tmp=$_SESSION['_layoutmode'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '";';  if (((is_array($_tmp=((is_array($_tmp=$_SERVER['HTTPS'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'on'):  echo '_nc_base_url = "';  echo @BASE_URL_HTTPS;  echo '";';  else:  echo '_nc_base_url = "';  echo @BASE_URL;  echo '";';  endif;  echo '';  if (((is_array($_tmp=((is_array($_tmp=$_SERVER['HTTPS'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'on' && BASE_URL == CORE_BASE_URL):  echo '_nc_core_base_url = "';  echo @BASE_URL_HTTPS;  echo '";';  else:  echo '_nc_core_base_url = "';  echo @CORE_BASE_URL;  echo '";';  endif;  echo '_nc_index_file_name = "';  echo @INDEX_FILE_NAME;  echo '";_nc_current_url = \'';  echo ((is_array($_tmp=@CURRENT_URL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_allow_attachment = \'';  echo ((is_array($_tmp=$_SESSION['_allow_attachment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_allow_htmltag = \'';  echo ((is_array($_tmp=$_SESSION['_allow_htmltag_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_allow_video = \'';  echo ((is_array($_tmp=$_SESSION['_allow_video_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_main_page_id = \'';  echo ((is_array($_tmp=$_SESSION['_main_page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_user_id = \'';  echo ((is_array($_tmp=$_SESSION['_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_debug = ';  if (((is_array($_tmp=$_SESSION['_php_debug'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON || ((is_array($_tmp=$_SESSION['_sql_debug'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '1';  else:  echo '0';  endif;  echo ';';  echo '_nc_ajaxFlag = false;_nc_dwScriptCount = 0;_nc_dwScriptList = Array();_nc_js_vs = \'';  echo ((is_array($_tmp=@_JS_VERSION)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';_nc_css_vs = \'';  echo ((is_array($_tmp=@_CSS_VERSION)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\';</script><link href="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/favicon.ico" rel="SHORTCUT ICON" />';  if (isset ( $this->_tpl_vars['header_field']['css_header_pagetheme'] )):  echo '';  $this->assign('css_header_pagetheme', $this->_tpl_vars['header_field']['css_header_pagetheme']);  echo '';  else:  echo '';  $this->assign('css_header_pagetheme', "");  echo '';  endif;  echo '';  $this->assign('css_header', ((is_array($_tmp="|")) ? $this->_run_mod_handler('implode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['header_field']['css_header'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : implode($_tmp, ((is_array($_tmp=$this->_tpl_vars['header_field']['css_header'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));  echo '';  if (isset ( $this->_tpl_vars['header_field']['css_header_block_id'] )):  echo '';  $this->assign('css_header_block_id', ((is_array($_tmp="|")) ? $this->_run_mod_handler('implode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['header_field']['css_header_block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : implode($_tmp, ((is_array($_tmp=$this->_tpl_vars['header_field']['css_header_block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));  echo '';  else:  echo '';  $this->assign('css_header_block_id', "");  echo '';  endif;  echo '<link class="_common_css" rel="stylesheet" type="text/css" media="all" href="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '?';  echo ((is_array($_tmp=@ACTION_KEY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '=common_download_css&amp;page_theme=';  echo ((is_array($_tmp=$this->_tpl_vars['css_header_pagetheme'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;dir_name=';  echo ((is_array($_tmp=$this->_tpl_vars['css_header'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;block_id_str=';  echo ((is_array($_tmp=$this->_tpl_vars['css_header_block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;system_flag=';  echo ((is_array($_tmp=$_SESSION['_system_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;vs=';  echo ((is_array($_tmp=@_CSS_VERSION)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  echo '';  echo $this->_tpl_vars['header_field']['script_header'];  echo '';  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['header_field']['rss_alternate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != "" )):  echo '<link rel="alternate" type="application/rss+xml" title="RSS" href="';  echo ((is_array($_tmp=$this->_tpl_vars['header_field']['rss_alternate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" />';  endif;  echo '';  if (isset ( $this->_tpl_vars['add_header_fields'] )):  echo '';  $_from = $this->_tpl_vars['add_header_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['add_string']):
 echo '';  echo $this->_tpl_vars['add_string'];  echo '';  endforeach; endif; unset($_from);  echo '';  endif;  echo '</head><body style="';  echo ((is_array($_tmp=$this->_tpl_vars['body_style'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  if (((is_array($_tmp=$this->_tpl_vars['main_action_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == DEFAULT_ACTION && ! ((is_array($_tmp=$_SESSION['_mobile_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<noscript><div class="errorHeaderMsg">';  echo ((is_array($_tmp=@_NOJAVASCRIPT_ERROR)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</div></noscript>';  if (ini_get ( 'session.cookie_httponly' ) != true):  echo '<script type="text/javascript">if (document.cookie == "") {document.write(unescape(\'%3Cdiv class="errorHeaderMsg"%3E';  echo ((is_array($_tmp=@_NOCOOKIE_ERROR)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '%3C/div%3E\'));}</script>';  endif;  echo '';  endif;  echo ''; ?>
