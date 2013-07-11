<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from reservation_view_edit_location_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reservation_view_edit_location_init.html', 4, false),array('modifier', 'get_themes_image', 'reservation_view_edit_location_init.html', 5, false),)), $this); ?>
<?php echo '<div class="top_description align-right"><a class="syslink" href="#" title="';  echo $this->_tpl_vars['lang']['reservation_add_category_title'];  echo '" onclick=\'reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].showPopup(this); return false;\'><img class="icon" src="';  echo ((is_array($_tmp="add.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '" alt="" title="" />';  echo $this->_tpl_vars['lang']['reservation_add_category'];  echo '</a>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_view_edit_add_category.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div><div id="reservation';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="reservation_location_range">';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['category_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category_id'] => $this->_tpl_vars['category_name']):
        $this->_foreach['category_list']['iteration']++;
 echo '<div class="nowrap reservation_move_category_block reservation_category_id';  echo ((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_view_edit_location_init_category.html", 'smarty_include_vars' => array('category_id' => ((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')),'category_name' => $this->_tpl_vars['category_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<div class="reservation_category_display">';  $this->assign('location_list', ((is_array($_tmp=$this->_tpl_vars['action']['location_list'][$this->_tpl_vars['category_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['location_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<div class="nowrap reservation_move_location_block reservation_location_id';  echo ((is_array($_tmp=$this->_tpl_vars['location_list'][$this->_sections['i']['index']]['location_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reservation_view_edit_location_init_location.html", 'smarty_include_vars' => array('location' => ((is_array($_tmp=$this->_tpl_vars['location_list'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</div>';  endfor; endif;  echo '</div></div>';  endforeach; endif; unset($_from);  echo '</div>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../reservation_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].initLocation();reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].message["details_title"] = "';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['reservation_details'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '";reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].message["edit_title"] = "';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_edit_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '";reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].message["del_title"] = "';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_del_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '";reservationCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].message["del_confirm"] = "';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_del_confirm'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));  echo '";</script>'; ?>