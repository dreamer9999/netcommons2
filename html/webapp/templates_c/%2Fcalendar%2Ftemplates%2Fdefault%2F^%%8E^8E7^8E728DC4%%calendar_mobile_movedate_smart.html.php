<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from calendar_mobile_movedate_smart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'calendar_mobile_movedate_smart.html', 3, false),array('modifier', 'substr', 'calendar_mobile_movedate_smart.html', 7, false),)), $this); ?>
<?php echo '<form method="get" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><fieldset data-role="fieldcontain"><label for="year">';  echo $this->_tpl_vars['lang']['_mobile_year_label'];  echo '</label><input type="text" id="year" name="year" value="';  echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['calendar_mobile']['current_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4));  echo '" maxlength=4  /></fieldset>';  if (( ((is_array($_tmp=$_SESSION['calendar_mobile']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != CALENDAR_YEARLY )):  echo '<fieldset data-role="fieldcontain"><label for="month">';  echo $this->_tpl_vars['lang']['_mobile_month_label'];  echo '</label>';  $this->assign('current_month', ((is_array($_tmp=($_SESSION['calendar_mobile']['current_date']))) ? $this->_run_mod_handler('substr', true, $_tmp, 4, 2) : substr($_tmp, 4, 2)));  echo '<select id="month" name="month">';  unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['start'] = (int)1;
$this->_sections['month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
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
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['current_month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select></fieldset>';  endif;  echo '';  if (( ((is_array($_tmp=$_SESSION['calendar_mobile']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != CALENDAR_YEARLY && ((is_array($_tmp=$_SESSION['calendar_mobile']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != CALENDAR_S_MONTHLY && ((is_array($_tmp=$_SESSION['calendar_mobile']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != CALENDAR_L_MONTHLY )):  echo '<fieldset data-role="fieldcontain"><label for="day">';  echo $this->_tpl_vars['lang']['_mobile_day_label'];  echo '</label>';  $this->assign('current_day', ((is_array($_tmp=($_SESSION['calendar_mobile']['current_date']))) ? $this->_run_mod_handler('substr', true, $_tmp, 6, 2) : substr($_tmp, 6, 2)));  echo '<select id="day" name="day">';  unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['start'] = (int)1;
$this->_sections['day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
if ($this->_sections['day']['start'] < 0)
    $this->_sections['day']['start'] = max($this->_sections['day']['step'] > 0 ? 0 : -1, $this->_sections['day']['loop'] + $this->_sections['day']['start']);
else
    $this->_sections['day']['start'] = min($this->_sections['day']['start'], $this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] : $this->_sections['day']['loop']-1);
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = min(ceil(($this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] - $this->_sections['day']['start'] : $this->_sections['day']['start']+1)/abs($this->_sections['day']['step'])), $this->_sections['day']['max']);
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['current_day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</option>';  endfor; endif;  echo '</select></fieldset>';  endif;  echo '<br /><input type="submit" name="move" value="';  echo $this->_tpl_vars['lang']['calendar_move'];  echo '"><input type="hidden" name="action" value="calendar_action_mobile_movedate">';  echo $this->_tpl_vars['token_form'];  echo '';  echo $this->_tpl_vars['session_form'];  echo '</form><br /><div style="text-align:right"><a href="?action=calendar_view_mobile_init';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div>'; ?>
