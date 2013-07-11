<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from whatsnew_view_recursive_room.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'whatsnew_view_recursive_room.html', 3, false),array('modifier', 'str_repeat', 'whatsnew_view_recursive_room.html', 18, false),)), $this); ?>
<?php echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['room_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '';  $this->assign('room_obj', $this->_tpl_vars['room_list'][$this->_sections['i']['index']]);  echo '';  $this->assign('room_name', $this->_tpl_vars['room_obj']['page_name']);  echo '';  $this->assign('parent_room_name', $this->_tpl_vars['room_obj']['parent_page_name']);  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['room_obj']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _SPACE_TYPE_GROUP || ((is_array($_tmp=$this->_tpl_vars['room_obj']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ( ((is_array($_tmp=$this->_tpl_vars['room_obj']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON || ((is_array($_tmp=$this->_tpl_vars['room_obj']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON && ((is_array($_tmp=$this->_tpl_vars['room_obj']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != 0 ) )):  echo '';  $this->assign('room_id', ((is_array($_tmp=$this->_tpl_vars['room_obj']['page_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['room_obj']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_GROUP && ((is_array($_tmp=$this->_tpl_vars['room_obj']['private_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON )):  echo '';  $this->assign('indent', ((is_array($_tmp=$this->_tpl_vars['room_obj']['thread_num']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  else:  echo '';  $this->assign('indent', ((is_array($_tmp=$this->_tpl_vars['room_obj']['thread_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  endif;  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['room_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp="&nbsp;&nbsp;&nbsp;")) ? $this->_run_mod_handler('str_repeat', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['indent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : str_repeat($_tmp, ((is_array($_tmp=$this->_tpl_vars['indent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['room_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (( ! empty ( $this->_tpl_vars['parent_room_name'] ) )):  echo '(';  echo ((is_array($_tmp=$this->_tpl_vars['parent_room_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ')';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['room_obj']['space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_PUBLIC )):  echo '';  echo $this->_tpl_vars['lang']['whatsnew_public_room'];  echo '';  endif;  echo '</option>';  endif;  echo '';  endfor; endif;  echo ''; ?>