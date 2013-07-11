<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_style_disp_interval.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_style_disp_interval.html', 4, false),array('modifier', 'sprintf', 'reservation_style_disp_interval.html', 12, false),)), $this); ?>
<?php echo '<th class="nowrap" scope="row"><label for="reservation_interval';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['reservation_interval_lbl'];  echo '</label></th><td class="nowrap"><select name="display_interval">';  unset($this->_sections['interval']);
$this->_sections['interval']['name'] = 'interval';
$this->_sections['interval']['loop'] = is_array($_loop=25) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['interval']['start'] = (int)4;
$this->_sections['interval']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['interval']['show'] = true;
$this->_sections['interval']['max'] = $this->_sections['interval']['loop'];
if ($this->_sections['interval']['start'] < 0)
    $this->_sections['interval']['start'] = max($this->_sections['interval']['step'] > 0 ? 0 : -1, $this->_sections['interval']['loop'] + $this->_sections['interval']['start']);
else
    $this->_sections['interval']['start'] = min($this->_sections['interval']['start'], $this->_sections['interval']['step'] > 0 ? $this->_sections['interval']['loop'] : $this->_sections['interval']['loop']-1);
if ($this->_sections['interval']['show']) {
    $this->_sections['interval']['total'] = min(ceil(($this->_sections['interval']['step'] > 0 ? $this->_sections['interval']['loop'] - $this->_sections['interval']['start'] : $this->_sections['interval']['start']+1)/abs($this->_sections['interval']['step'])), $this->_sections['interval']['max']);
    if ($this->_sections['interval']['total'] == 0)
        $this->_sections['interval']['show'] = false;
} else
    $this->_sections['interval']['total'] = 0;
if ($this->_sections['interval']['show']):

            for ($this->_sections['interval']['index'] = $this->_sections['interval']['start'], $this->_sections['interval']['iteration'] = 1;
                 $this->_sections['interval']['iteration'] <= $this->_sections['interval']['total'];
                 $this->_sections['interval']['index'] += $this->_sections['interval']['step'], $this->_sections['interval']['iteration']++):
$this->_sections['interval']['rownum'] = $this->_sections['interval']['iteration'];
$this->_sections['interval']['index_prev'] = $this->_sections['interval']['index'] - $this->_sections['interval']['step'];
$this->_sections['interval']['index_next'] = $this->_sections['interval']['index'] + $this->_sections['interval']['step'];
$this->_sections['interval']['first']      = ($this->_sections['interval']['iteration'] == 1);
$this->_sections['interval']['last']       = ($this->_sections['interval']['iteration'] == $this->_sections['interval']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['interval']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_sections['interval']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['display_interval'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_interval_val'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_sections['interval']['index'])) : sprintf($_tmp, ($this->_sections['interval']['index'])));  echo '</option>';  endfor; endif;  echo '</select></td>'; ?>