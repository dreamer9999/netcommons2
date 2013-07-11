<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from todo_view_main_sequence.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'todo_view_main_sequence.html', 4, false),)), $this); ?>
<?php echo '';  echo '<div class="todo_head"><a class="syslink todo_head" href="#" title="';  echo $this->_tpl_vars['lang']['todo_change_sequence_mode_end_title'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', {\'action\':\'todo_view_main_init\'});return false;">';  echo $this->_tpl_vars['lang']['todo_change_sequence_mode_end'];  echo '</a></div><table id="todo_task_list';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="todo_task_sequence" summary="';  echo $this->_tpl_vars['lang']['todo_task_list_summary'];  echo '">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['tasks'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['task']):
 echo '<tr id="todo_task_row';  echo ((is_array($_tmp=$this->_tpl_vars['task']['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><td class="comp_draganddrop"></td><td class="todo_priority">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "todo_view_main_init_priority.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="todo_state align-center">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "todo_view_main_init_state.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="todo_period">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "todo_view_main_init_period.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td><td class="todo_task_value">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "todo_view_main_init_task_value.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '</table>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../todo_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">dropZone = Class.create();dropZone.prototype = Object.extend((new compDropzone), {showHover: function(event) {this.showChgSeqHover(event);},hideHover: function(event) {this.hideChgSeqHover(event);},accept: function(draggableObjects) {this.acceptChgSeq(draggableObjects);},save: function(draggableObjects) {if(this.ChgSeqPosition == null) {return false;}var drag = draggableObjects[0].getHTMLElement();var drop = this.getHTMLElement();var id = this.getParams();todoCls[id].changeSequence(drag.id, drop.id, this.ChgSeqPosition);return true;}});var dragArea = $("todo_task_list';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '");dragDrop = new compDragAndDrop();dragDrop.registerDraggableRange(dragArea);var rows = dragArea.getElementsByTagName("tr");for (var i = 0; i < rows.length; i++) {dragDrop.registerDraggable(new compDraggable(rows[i], rows[i].firstChild));dragDrop.registerDropZone(new dropZone(rows[i], "';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));}dropZone = null;dragArea = null;dragDrop = null;rows = null;</script>'; ?>