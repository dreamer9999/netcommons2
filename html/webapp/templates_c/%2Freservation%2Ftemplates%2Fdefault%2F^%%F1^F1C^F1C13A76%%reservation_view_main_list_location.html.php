<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_view_main_list_location.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_view_main_list_location.html', 3, false),array('modifier', 'sprintf', 'reservation_view_main_list_location.html', 10, false),array('modifier', 'cat', 'reservation_view_main_list_location.html', 10, false),array('modifier', 'get_image_url', 'reservation_view_main_list_location.html', 15, false),)), $this); ?>
<?php echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['reserve_data'][$this->_tpl_vars['location_id']][$this->_tpl_vars['view_date']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '';  $this->assign('reserve', $this->_tpl_vars['action']['reserve_data'][$this->_tpl_vars['location_id']][$this->_tpl_vars['view_date']][$this->_sections['i']['index']]);  echo '';  ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_main_set_reserve_class.html", 'smarty_include_vars' => array('reserve_flag' => ((is_array($_tmp=$this->_tpl_vars['reserve']['reserve_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'bg_flag' => ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('reserve_class', ob_get_contents()); ob_end_clean();
  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['reserve_class'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<div class="reservation_reserve ';  echo ((is_array($_tmp=$this->_tpl_vars['reserve_class'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' reservation_reserve_time" style="width:';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo 'px;">';  $this->assign('reserve_anchor', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['reservation_fmto_format'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['reserve']['start_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['reserve']['end_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['reserve']['start_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=$this->_tpl_vars['reserve']['end_time_str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))))) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['reserve']['reserve_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == RESERVATION_MEMBERS || in_array ( $this->_tpl_vars['reserve']['room_id'] , ((is_array($_tmp=$this->_tpl_vars['action']['room_id_arr'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) )):  echo '<a class="reservation_reserve_title hover_highlight" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['reserve_anchor'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_reserve_link_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['reserve']['short_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['reserve']['short_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].showReserveDetails(event, "';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['reserve_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  if (((is_array($_tmp=$this->_tpl_vars['reserve']['title_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ""):  echo '<img class="icon" src="';  echo ((is_array($_tmp="")) ? $this->_run_mod_handler('get_image_url', true, $_tmp) : get_image_url($_tmp));  echo '/images/comp/textarea/';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['title_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" alt="" />';  endif;  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['short_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  else:  echo '<a class="reservation_reserve_title hover_highlight" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['reserve_anchor'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick=\'commonCls.showUserDetail(event, "';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['insert_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['insert_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endif;  echo '</div>';  else:  echo '<div class="reservation_reserve_dummy" style="width:';  echo ((is_array($_tmp=$this->_tpl_vars['reserve']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo 'px;">&nbsp;</div>';  endif;  echo '';  endfor; endif;  echo ''; ?>
