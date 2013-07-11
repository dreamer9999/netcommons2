<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:33
         compiled from journal_mobile_post_smart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'journal_mobile_post_smart.html', 3, false),array('modifier', 'substr', 'journal_mobile_post_smart.html', 3, false),array('modifier', 'intval', 'journal_mobile_post_smart.html', 30, false),array('modifier', 'string_format', 'journal_mobile_post_smart.html', 37, false),array('modifier', 'html_to_text', 'journal_mobile_post_smart.html', 74, false),)), $this); ?>
<?php echo '';  $this->assign('month', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 4, 2) : substr($_tmp, 4, 2)));  echo '';  $this->assign('day', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 6, 2) : substr($_tmp, 6, 2)));  echo '<fieldset data-role="fieldcontain" ><fieldset data-role="controlgroup" data-type="horizontal"><legend>';  echo $this->_tpl_vars['lang']['journal_post_date'];  echo '</legend><input type="text" name="year" value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4));  echo '" maxlength="4" style="width:4em;display:inline;" /><select id="month" name="month">';  unset($this->_sections['month']);
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
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['month'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['month']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo '</option>';  endfor; endif;  echo '</select><select id="day" name="day">';  unset($this->_sections['day']);
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
 echo '<option value="';  echo ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (((is_array($_tmp=$this->_tpl_vars['day'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_sections['day']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo '</option>';  endfor; endif;  echo '</select></fieldset></fieldset>';  $this->assign('hour', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 8, 2) : substr($_tmp, 8, 2)));  echo '';  $this->assign('minute', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['journal_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('substr', true, $_tmp, 10, 2) : substr($_tmp, 10, 2)));  echo '';  $this->assign('minute_index', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minute']/5)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)));  echo '<fieldset data-role="fieldcontain" ><fieldset data-role="controlgroup" data-type="horizontal" class="time_control"><legend>';  echo $this->_tpl_vars['lang']['journal_post_time'];  echo '</legend><select name="journal_hour">';  unset($this->_sections['hour']);
$this->_sections['hour']['name'] = 'hour';
$this->_sections['hour']['start'] = (int)0;
$this->_sections['hour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hour']['show'] = true;
$this->_sections['hour']['max'] = $this->_sections['hour']['loop'];
$this->_sections['hour']['step'] = 1;
if ($this->_sections['hour']['start'] < 0)
    $this->_sections['hour']['start'] = max($this->_sections['hour']['step'] > 0 ? 0 : -1, $this->_sections['hour']['loop'] + $this->_sections['hour']['start']);
else
    $this->_sections['hour']['start'] = min($this->_sections['hour']['start'], $this->_sections['hour']['step'] > 0 ? $this->_sections['hour']['loop'] : $this->_sections['hour']['loop']-1);
if ($this->_sections['hour']['show']) {
    $this->_sections['hour']['total'] = min(ceil(($this->_sections['hour']['step'] > 0 ? $this->_sections['hour']['loop'] - $this->_sections['hour']['start'] : $this->_sections['hour']['start']+1)/abs($this->_sections['hour']['step'])), $this->_sections['hour']['max']);
    if ($this->_sections['hour']['total'] == 0)
        $this->_sections['hour']['show'] = false;
} else
    $this->_sections['hour']['total'] = 0;
if ($this->_sections['hour']['show']):

            for ($this->_sections['hour']['index'] = $this->_sections['hour']['start'], $this->_sections['hour']['iteration'] = 1;
                 $this->_sections['hour']['iteration'] <= $this->_sections['hour']['total'];
                 $this->_sections['hour']['index'] += $this->_sections['hour']['step'], $this->_sections['hour']['iteration']++):
$this->_sections['hour']['rownum'] = $this->_sections['hour']['iteration'];
$this->_sections['hour']['index_prev'] = $this->_sections['hour']['index'] - $this->_sections['hour']['step'];
$this->_sections['hour']['index_next'] = $this->_sections['hour']['index'] + $this->_sections['hour']['step'];
$this->_sections['hour']['first']      = ($this->_sections['hour']['iteration'] == 1);
$this->_sections['hour']['last']       = ($this->_sections['hour']['iteration'] == $this->_sections['hour']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['hour'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['hour']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_hour'];  echo '</option>';  endfor; endif;  echo '</select><select name="journal_minute">';  unset($this->_sections['min']);
$this->_sections['min']['name'] = 'min';
$this->_sections['min']['start'] = (int)0;
$this->_sections['min']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['min']['step'] = ((int)5) == 0 ? 1 : (int)5;
$this->_sections['min']['show'] = true;
$this->_sections['min']['max'] = $this->_sections['min']['loop'];
if ($this->_sections['min']['start'] < 0)
    $this->_sections['min']['start'] = max($this->_sections['min']['step'] > 0 ? 0 : -1, $this->_sections['min']['loop'] + $this->_sections['min']['start']);
else
    $this->_sections['min']['start'] = min($this->_sections['min']['start'], $this->_sections['min']['step'] > 0 ? $this->_sections['min']['loop'] : $this->_sections['min']['loop']-1);
if ($this->_sections['min']['show']) {
    $this->_sections['min']['total'] = min(ceil(($this->_sections['min']['step'] > 0 ? $this->_sections['min']['loop'] - $this->_sections['min']['start'] : $this->_sections['min']['start']+1)/abs($this->_sections['min']['step'])), $this->_sections['min']['max']);
    if ($this->_sections['min']['total'] == 0)
        $this->_sections['min']['show'] = false;
} else
    $this->_sections['min']['total'] = 0;
if ($this->_sections['min']['show']):

            for ($this->_sections['min']['index'] = $this->_sections['min']['start'], $this->_sections['min']['iteration'] = 1;
                 $this->_sections['min']['iteration'] <= $this->_sections['min']['total'];
                 $this->_sections['min']['index'] += $this->_sections['min']['step'], $this->_sections['min']['iteration']++):
$this->_sections['min']['rownum'] = $this->_sections['min']['iteration'];
$this->_sections['min']['index_prev'] = $this->_sections['min']['index'] - $this->_sections['min']['step'];
$this->_sections['min']['index_next'] = $this->_sections['min']['index'] + $this->_sections['min']['step'];
$this->_sections['min']['first']      = ($this->_sections['min']['iteration'] == 1);
$this->_sections['min']['last']       = ($this->_sections['min']['iteration'] == $this->_sections['min']['total']);
 echo '<option value="';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '" ';  if (((is_array($_tmp=$this->_sections['min']['iteration'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['minute_index']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_sections['min']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, '%02d') : smarty_modifier_string_format($_tmp, '%02d'));  echo '';  echo $this->_tpl_vars['lang']['_mobile_minute'];  echo '</option>';  endfor; endif;  echo '</select></fieldset></fieldset><fieldset data-role="fieldcontain" ><label for="title">';  echo $this->_tpl_vars['lang']['journal_mobile_post_title'];  echo '</label><input type="text" id="title" name="title" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"></fieldset><fieldset data-role="fieldcontain" ><label for="cat_id">';  echo $this->_tpl_vars['lang']['journal_mobile_post_category'];  echo '</label><select id="cat_id" name="cat_id" size="1"><option value="0"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['post']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '0' )):  echo 'selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['lang']['journal_mobile_nocategory'];  echo '</option>';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['categories'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['cat']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['post']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['cat']['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo 'selected="selected"';  endif;  echo '>';  echo $this->_tpl_vars['cat']['category_name'];  echo '</option>';  endforeach; endif; unset($_from);  echo '</select></fieldset><div data-role="fieldcontain" ><label for="content">';  echo $this->_tpl_vars['lang']['journal_mobile_post_content'];  echo '</label><textarea id="content" name="content" rows="5">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['post']['content'])) ? $this->_run_mod_handler('html_to_text', true, $_tmp) : html_to_text($_tmp));  echo '</textarea></div><div data-role="fieldcontain" >';  if (! empty ( $this->_tpl_vars['action']['post']['mobile_image'] )):  echo '';  echo $this->_tpl_vars['lang']['journal_mobile_post_image_now'];  echo '<br />';  echo $this->_tpl_vars['action']['post']['mobile_image'];  echo '<br />';  endif;  echo '';  if (((is_array($_tmp=$_SESSION['_allow_attachment_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ALLOW_ATTACHMENT_NO):  echo '<label for="journal_mobile_images">';  echo $this->_tpl_vars['lang']['journal_mobile_post_image'];  echo '</label><input id="journal_mobile_images" name="journal_mobile_images" type="file" value="" /><br />';  endif;  echo '</div>'; ?>