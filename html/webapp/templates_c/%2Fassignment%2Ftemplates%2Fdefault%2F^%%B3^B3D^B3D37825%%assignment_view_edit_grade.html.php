<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:29
         compiled from assignment_view_edit_grade.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'assignment_view_edit_grade.html', 9, false),array('modifier', 'sprintf', 'assignment_view_edit_grade.html', 19, false),)), $this); ?>
<?php echo '';  echo '<div class="top_description">';  echo $this->_tpl_vars['lang']['assignment_set_grade_value_desc'];  echo '</div><div class="align-center outerdiv"><form id="assignment_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onsubmit="return false;"><input type="hidden" name="action" value="assignment_action_edit_setGrade" /><table class="outer" summary="';  echo $this->_tpl_vars['lang']['assignment_summary'];  echo '">';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=10) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['start'] = (int)0;
$this->_sections['i']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '';  $this->assign('i', ((is_array($_tmp=$this->_sections['i']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '<tr class="row">';  echo '<th class="nowrap" scope="row"><label for="assignment_grade_value';  echo ((is_array($_tmp=$this->_tpl_vars['i'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['assignment_set_grade_value_label'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_sections['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_sections['i']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</label></th>';  echo '<td><input id="assignment_grade_value';  echo ((is_array($_tmp=$this->_tpl_vars['i'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="grade_value[';  echo ((is_array($_tmp=$this->_tpl_vars['i'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" class="text" type="text" value="';  if (( ! empty ( $this->_tpl_vars['action']['gradeValues'][$this->_tpl_vars['i']] ) )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['gradeValues'][$this->_tpl_vars['i']]['grade_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  endif;  echo '" /></td></tr>';  endfor; endif;  echo '</table>';  echo '<div class="btn-bottom"><input name="regist_btn" type="button" class="btn-width lined_btn" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick="assignmentCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].setGradeValue(this.form); return false;" /><input name="cancel_btn" type="button" class="btn-width lined_btn" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\',{\'action\':\'assignment_view_main_init\'}); return false;" /></div></form></div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../assignment_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">commonCls.focus($("assignment_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));</script>'; ?>