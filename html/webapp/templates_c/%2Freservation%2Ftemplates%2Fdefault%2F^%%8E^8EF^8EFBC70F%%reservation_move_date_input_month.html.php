<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_move_date_input_month.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_move_date_input_month.html', 4, false),array('modifier', 'substr', 'reservation_move_date_input_month.html', 7, false),array('modifier', 'sprintf', 'reservation_move_date_input_month.html', 12, false),array('modifier', 'explode', 'reservation_move_date_input_month.html', 20, false),array('modifier', 'string_format', 'reservation_move_date_input_month.html', 24, false),)), $this); ?>
<?php echo '<form action="#" onsubmit="return false;"><input type="hidden" name="id" value="';  echo ((is_array($_tmp=$_SESSION['reservation']['_id'][$this->_tpl_vars['block_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /><label for="reservation_select_year';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $this->assign('view_year', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['view_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4)));  echo '<select id="reservation_select_year';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="move_year">';  unset($this->_sections['year']);
$this->_sections['year']['name'] = 'year';
$this->_sections['year']['loop'] = is_array($_loop=((is_array($_tmp=@RESERVATION_SELECT_MAX_YEAR)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['year']['start'] = (int)((is_array($_tmp=@RESERVATION_SELECT_MIN_YEAR)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));
$this->_sections['year']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['year']['show'] = true;
$this->_sections['year']['max'] = $this->_sections['year']['loop'];
if ($this->_sections['year']['start'] < 0)
    $this->_sections['year']['start'] = max($this->_sections['year']['step'] > 0 ? 0 : -1, $this->_sections['year']['loop'] + $this->_sections['year']['start']);
else
    $this->_sections['year']['start'] = min($this->_sections['year']['start'], $this->_sections['year']['step'] > 0 ? $this->_sections['year']['loop'] : $this->_sections['year']['loop']-1);
if ($this->_sections['year']['show']) {
    $this->_sections['year']['total'] = min(ceil(($this->_sections['year']['step'] > 0 ? $this->_sections['year']['loop'] - $this->_sections['year']['start'] : $this->_sections['year']['start']+1)/abs($this->_sections['year']['step'])), $this->_sections['year']['max']);
    if ($this->_sections['year']['total'] == 0)
        $this->_sections['year']['show'] = false;
} else
    $this->_sections['year']['total'] = 0;
if ($this->_sections['year']['show']):

            for ($this->_sections['year']['index'] = $this->_sections['year']['start'], $this->_sections['year']['iteration'] = 1;
                 $this->_sections['year']['iteration'] <= $this->_sections['year']['total'];
                 $this->_sections['year']['index'] += $this->_sections['year']['step'], $this->_sections['year']['iteration']++):
$this->_sections['year']['rownum'] = $this->_sections['year']['iteration'];
$this->_sections['year']['index_prev'] = $this->_sections['year']['index'] - $this->_sections['year']['step'];
$this->_sections['year']['index_next'] = $this->_sections['year']['index'] + $this->_sections['year']['step'];
$this->_sections['year']['first']      = ($this->_sections['year']['iteration'] == 1);
$this->_sections['year']['last']       = ($this->_sections['year']['iteration'] == $this->_sections['year']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['year']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_sections['year']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['view_year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_year_format'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_sections['year']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_sections['year']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</option>';  endfor; endif;  echo '</select></label><label for="reservation_select_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $this->assign('view_month', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['view_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 4, 2) : substr($_tmp, 4, 2)));  echo '';  $this->assign('month_array', ((is_array($_tmp="|")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_month_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['_month_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));  echo '<select id="reservation_select_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="move_month">';  unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['start'] = (int)0;
$this->_sections['month']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
if ($this->_sections['month']['start'] < 0)
    $this->_sections['month']['start'] = max($this->_sections['month']['step'] > 0 ? 0 : -1, $this->_sections['month']['loop'] + $this->_sections['month']['start']);
else
    $this->_sections['month']['start'] = min($this->_sections['month']['start'], $this->_sections['month']['step'] > 0 ? $this->_sections['month']['loop'] : $this->_sections['month']['loop']-1);
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = min(ceil(($this->_sections['month']['step'] > 0 ? $this->_sections['month']['loop'] - $this->_sections['month']['start'] : $this->_sections['month']['start']+1)/abs($this->_sections['month']['step'])), $this->_sections['month']['max']);
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
 echo '';  $this->assign('sec_month', ((is_array($_tmp=((is_array($_tmp=$this->_sections['month']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['sec_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['sec_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['view_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  $this->assign('index', ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['month_array'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select></label><input type="button" value="';  echo $this->_tpl_vars['lang']['reservation_move'];  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].moveDate(this.form); return false;\' />&nbsp;&nbsp;<a id="reservation_move_this_month';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="hover_highlight" href="#" title="';  echo $this->_tpl_vars['lang']['_show_month'];  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$_SESSION['reservation']['_id'][$this->_tpl_vars['block_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeReservation("';  echo ((is_array($_tmp=$this->_tpl_vars['action']['today'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  echo $this->_tpl_vars['lang']['reservation_move_this_month'];  echo '</a><span class="highlight">';  echo $this->_tpl_vars['lang']['reservation_this_month'];  echo '</span></form>'; ?>
