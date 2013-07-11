<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from todo_view_main_entry_progress.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'todo_view_main_entry_progress.html', 3, false),array('modifier', 'sprintf', 'todo_view_main_entry_progress.html', 7, false),)), $this); ?>
<?php echo '<label for="todo_progress';  echo ((is_array($_tmp=$this->_tpl_vars['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><select id="todo_progress';  echo ((is_array($_tmp=$this->_tpl_vars['task_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="todo_progress" name="progress"';  if (( ((is_array($_tmp=$this->_tpl_vars['onchange'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' onchange="todoCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].enterProgress(this.form,\'';  echo ((is_array($_tmp=$this->_tpl_vars['task']['period_class_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\');" onblur="todoCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].hideEnterProgress(this.form);" ';  endif;  echo '>';  unset($this->_sections['progress']);
$this->_sections['progress']['name'] = 'progress';
$this->_sections['progress']['loop'] = is_array($_loop=101) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['progress']['start'] = (int)0;
$this->_sections['progress']['step'] = ((int)((is_array($_tmp=@TODO_PROGRESS_INTERVAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) == 0 ? 1 : (int)((is_array($_tmp=@TODO_PROGRESS_INTERVAL)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));
$this->_sections['progress']['show'] = true;
$this->_sections['progress']['max'] = $this->_sections['progress']['loop'];
if ($this->_sections['progress']['start'] < 0)
    $this->_sections['progress']['start'] = max($this->_sections['progress']['step'] > 0 ? 0 : -1, $this->_sections['progress']['loop'] + $this->_sections['progress']['start']);
else
    $this->_sections['progress']['start'] = min($this->_sections['progress']['start'], $this->_sections['progress']['step'] > 0 ? $this->_sections['progress']['loop'] : $this->_sections['progress']['loop']-1);
if ($this->_sections['progress']['show']) {
    $this->_sections['progress']['total'] = min(ceil(($this->_sections['progress']['step'] > 0 ? $this->_sections['progress']['loop'] - $this->_sections['progress']['start'] : $this->_sections['progress']['start']+1)/abs($this->_sections['progress']['step'])), $this->_sections['progress']['max']);
    if ($this->_sections['progress']['total'] == 0)
        $this->_sections['progress']['show'] = false;
} else
    $this->_sections['progress']['total'] = 0;
if ($this->_sections['progress']['show']):

            for ($this->_sections['progress']['index'] = $this->_sections['progress']['start'], $this->_sections['progress']['iteration'] = 1;
                 $this->_sections['progress']['iteration'] <= $this->_sections['progress']['total'];
                 $this->_sections['progress']['index'] += $this->_sections['progress']['step'], $this->_sections['progress']['iteration']++):
$this->_sections['progress']['rownum'] = $this->_sections['progress']['iteration'];
$this->_sections['progress']['index_prev'] = $this->_sections['progress']['index'] - $this->_sections['progress']['step'];
$this->_sections['progress']['index_next'] = $this->_sections['progress']['index'] + $this->_sections['progress']['step'];
$this->_sections['progress']['first']      = ($this->_sections['progress']['iteration'] == 1);
$this->_sections['progress']['last']       = ($this->_sections['progress']['iteration'] == $this->_sections['progress']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['progress'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['todo_percent'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_sections['progress']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select></label>'; ?>