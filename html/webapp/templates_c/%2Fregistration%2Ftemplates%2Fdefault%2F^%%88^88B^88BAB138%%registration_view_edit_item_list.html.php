<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from registration_view_edit_item_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'registration_view_edit_item_list.html', 5, false),array('modifier', 'get_themes_image', 'registration_view_edit_item_list.html', 13, false),array('modifier', 'sprintf', 'registration_view_edit_item_list.html', 33, false),)), $this); ?>
<?php echo '';  echo '<div class="outerdiv"><div class="nowrap bold">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['registration']['registration_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</div><div class="top_description">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_item_list_text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</div><div class="registration_item_add"><a id="registration_add_item';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="syslink" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_add_item_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="registrationCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showItem(event);return false;"><img src="';  echo ((is_array($_tmp="add.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" alt="" title="" />';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_add_item'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a></div><table id="registration_item_list';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="registration_item_list" summary="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_item_list_summary'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['items'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
 echo '<tr id="registration_item_row';  echo ((is_array($_tmp=$this->_tpl_vars['item']['item_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '}>"><td class="comp_draganddrop"></td><td>';  echo ((is_array($_tmp=$this->_tpl_vars['item']['item_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (((is_array($_tmp=$this->_tpl_vars['item']['require_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON):  echo '<span class="require">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_require_text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>';  endif;  echo '<span class="registration_type">';  if (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_TEXT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_CHECKBOX)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_checkbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_checkbox'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_RADIO)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_radio'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_radio'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_SELECT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_select'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_select'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_TEXTAREA)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_textarea'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_textarea'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_EMAIL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  elseif (((is_array($_tmp=$this->_tpl_vars['item']['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=@REGISTRATION_TYPE_FILE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_parenthesis'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_file'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['registration_type_file'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '</span></td><td class="registration_item_list_manage"><a class="syslink" href="#" title="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_edit_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['item_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['item_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="registrationCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].showItem(event, ';  echo ((is_array($_tmp=$this->_tpl_vars['item']['item_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');return false;">';  echo $this->_tpl_vars['lang']['_edit'];  echo '</a>';  echo $this->_tpl_vars['lang']['_separator'];  echo '<a class="syslink" href="#" title="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['item_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['item_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick="registrationCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].deleteItem(';  echo ((is_array($_tmp=$this->_tpl_vars['item']['item_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ', \'';  echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['_del_confirm'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['item']['item_name'])) : sprintf($_tmp, ($this->_tpl_vars['item']['item_name']))))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');return false;">';  echo $this->_tpl_vars['lang']['_delete'];  echo '</a></td></tr>';  endforeach; endif; unset($_from);  echo '</table><div class="btn-bottom"><input class="btn-width" type="button" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_activate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="registrationCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].setblock(\'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['registration']['registration_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', ';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');return false;" /><input class="lined_btn btn-width" type="button" value="';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'registration_view_edit_registration_list\');return false;" /></div></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../registration_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">registrationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].registration_id = "';  echo ((is_array($_tmp=$this->_tpl_vars['action']['registration']['registration_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '";dropZone = Class.create();dropZone.prototype = Object.extend((new compDropzone), {showHover: function(event) {this.showChgSeqHover(event);},hideHover: function(event) {this.hideChgSeqHover(event);},accept: function(draggableObjects) {this.acceptChgSeq(draggableObjects);},save: function(draggableObjects) {if(this.ChgSeqPosition == null) {return false;}var drag = draggableObjects[0].getHTMLElement();var drop = this.getHTMLElement();var id = this.getParams();registrationCls[id].changeItemSequence(drag.id, drop.id, this.ChgSeqPosition);return true;}});var dragArea = $("registration_item_list';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");dragDrop = new compDragAndDrop();dragDrop.registerDraggableRange(dragArea);var rows = dragArea.getElementsByTagName("tr");for (var i = 0; i < rows.length; i++) {dragDrop.registerDraggable(new compDraggable(rows[i], rows[i].firstChild));dragDrop.registerDropZone(new dropZone(rows[i], "';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));}commonCls.focus($("registration_add_item';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));dropZone = null;dragArea = null;dragDrop = null;rows = null;</script>'; ?>