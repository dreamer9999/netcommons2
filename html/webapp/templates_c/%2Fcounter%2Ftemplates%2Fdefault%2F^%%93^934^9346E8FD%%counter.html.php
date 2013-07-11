<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:31
         compiled from counter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'counter.html', 4, false),array('modifier', 'get_image_url', 'counter.html', 13, false),)), $this); ?>
<?php echo '<table border="0" cellspacing="0" cellpadding="0"><tr>';  if (((is_array($_tmp=$this->_tpl_vars['action']['counter']['show_char_before'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<td class="align-left nowrap bold">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['counter']['show_char_before'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</td>';  endif;  echo '<td  class="align-right widthmax nowrap counter_main">';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['imgSrcs'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
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
 echo '<img src="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['imgSrcs'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="icon" alt="" title="" />';  endfor; endif;  echo '<img src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/common/blank.gif" alt="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['counter']['counter_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" title="" /></td>';  if (((is_array($_tmp=$this->_tpl_vars['action']['counter']['show_char_after'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<td class="align-left nowrap bold">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['counter']['show_char_after'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</td>';  endif;  echo '</tr>';  if (((is_array($_tmp=$this->_tpl_vars['action']['counter']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ''):  echo '<tr><td class="note counter_note" colspan="2">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['counter']['comment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</td></tr>';  endif;  echo '</table>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "counter_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>