<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:38
         compiled from whatsnew_view_edit_init.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'whatsnew_view_edit_init.html', 3, false),array('modifier', 'string_format', 'whatsnew_view_edit_init.html', 51, false),array('modifier', 'explode', 'whatsnew_view_edit_init.html', 67, false),array('modifier', 'sprintf', 'whatsnew_view_edit_init.html', 69, false),)), $this); ?>
<?php echo '<form id="whatsnew_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" action="#" onsubmit="return false;"><table class="outer" summary="';  echo ((is_array($_tmp=@_SUMMARY_SETTINGFORM)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><tr class="row"><th class="nowrap" scope="row">';  echo $this->_tpl_vars['lang']['whatsnew_display_type'];  echo '</th><td><label for="whatsnew_display_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><select id="whatsnew_display_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="display_type" onchange=\'whatsnewCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].switchDisplayType(this.form);\'><option value="';  echo ((is_array($_tmp=@WHATSNEW_DEF_FLAT)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == WHATSNEW_DEF_FLAT )):  echo ' selected="selected"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['whatsnew_display_type_flat'];  echo '</option><option value="';  echo ((is_array($_tmp=@WHATSNEW_DEF_MODULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == WHATSNEW_DEF_MODULE )):  echo ' selected="selected"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['whatsnew_display_type_module'];  echo '</option><option value="';  echo ((is_array($_tmp=@WHATSNEW_DEF_ROOM)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == WHATSNEW_DEF_ROOM )):  echo ' selected="selected"';  endif;  echo ' />';  echo $this->_tpl_vars['lang']['whatsnew_display_type_room'];  echo '</option></select></label><br /><label for="whatsnew_select_room';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_select_room';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="select_room" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['select_room'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' onclick="if (this.checked) { commonCls.displayVisible($(\'whatsnew_select_room_link';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')); commonCls.sendPopupView(event, {\'action\':\'whatsnew_view_edit_selectroom\',\'prefix_id_name\':\'popup_whatsnew\'},{\'top_el\':$(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'),\'modal_flag\':true}); } else { commonCls.displayNone($(\'whatsnew_select_room_link';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\')); }" />';  echo $this->_tpl_vars['lang']['whatsnew_select_room'];  echo '</label>&nbsp;&nbsp;<span id="whatsnew_select_room_link';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['select_room'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON )):  echo ' class="display-none"';  endif;  echo '><a class="syslink" href="#" onclick="commonCls.sendPopupView(event, {\'action\':\'whatsnew_view_edit_selectroom\',\'prefix_id_name\':\'popup_whatsnew\'},{\'top_el\':$(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'),\'modal_flag\':true}); return false;">';  echo $this->_tpl_vars['lang']['whatsnew_select_room_link'];  echo '</a></span></td></tr><tr class="row"><th scope="row"><label for="whatsnew_display_day';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_day';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" name="display_flag" value="';  echo ((is_array($_tmp=@_)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" onclick="whatsnewCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].changeDisplayType(';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');"/>';  echo $this->_tpl_vars['lang']['whatsnew_display_days'];  echo '</label></th><td><select id="whatsnew_display_days';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="display_days">';  unset($this->_sections['days']);
$this->_sections['days']['name'] = 'days';
$this->_sections['days']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['days']['start'] = (int)0;
$this->_sections['days']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['days']['show'] = true;
$this->_sections['days']['max'] = $this->_sections['days']['loop'];
if ($this->_sections['days']['start'] < 0)
    $this->_sections['days']['start'] = max($this->_sections['days']['step'] > 0 ? 0 : -1, $this->_sections['days']['loop'] + $this->_sections['days']['start']);
else
    $this->_sections['days']['start'] = min($this->_sections['days']['start'], $this->_sections['days']['step'] > 0 ? $this->_sections['days']['loop'] : $this->_sections['days']['loop']-1);
if ($this->_sections['days']['show']) {
    $this->_sections['days']['total'] = min(ceil(($this->_sections['days']['step'] > 0 ? $this->_sections['days']['loop'] - $this->_sections['days']['start'] : $this->_sections['days']['start']+1)/abs($this->_sections['days']['step'])), $this->_sections['days']['max']);
    if ($this->_sections['days']['total'] == 0)
        $this->_sections['days']['show'] = false;
} else
    $this->_sections['days']['total'] = 0;
if ($this->_sections['days']['show']):

            for ($this->_sections['days']['index'] = $this->_sections['days']['start'], $this->_sections['days']['iteration'] = 1;
                 $this->_sections['days']['iteration'] <= $this->_sections['days']['total'];
                 $this->_sections['days']['index'] += $this->_sections['days']['step'], $this->_sections['days']['iteration']++):
$this->_sections['days']['rownum'] = $this->_sections['days']['iteration'];
$this->_sections['days']['index_prev'] = $this->_sections['days']['index'] - $this->_sections['days']['step'];
$this->_sections['days']['index_next'] = $this->_sections['days']['index'] + $this->_sections['days']['step'];
$this->_sections['days']['first']      = ($this->_sections['days']['iteration'] == 1);
$this->_sections['days']['last']       = ($this->_sections['days']['iteration'] == $this->_sections['days']['total']);
 echo '';  $this->assign('days', ((is_array($_tmp=$this->_sections['days']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['days'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['days'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_days'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' selected="selected"';  endif;  echo '>';  if (( ((is_array($_tmp=$this->_tpl_vars['days'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == '0' )):  echo '';  echo $this->_tpl_vars['lang']['whatsnew_days_today'];  echo '';  else:  echo '';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['days'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('string_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['whatsnew_days_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : smarty_modifier_string_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['whatsnew_days_format'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '';  endif;  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr class="row"><th scope="row"><label for="whatsnew_display_num_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_num_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" name="display_flag" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"  onclick="whatsnewCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].changeDisplayType(';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');" />';  echo $this->_tpl_vars['lang']['whatsnew_the_number_of_display'];  echo '</label></th><td><select id="whatsnew_the_number_of_display';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" name="display_number" >';  $this->assign('test', ((is_array($_tmp="|")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=@WHATSNEW_THE_NUMBER_OF_DISPLAY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : explode($_tmp, ((is_array($_tmp=@WHATSNEW_THE_NUMBER_OF_DISPLAY)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))));  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['test'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['number'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['number']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['num']):
        $this->_foreach['number']['iteration']++;
 echo '<option value="';  echo ((is_array($_tmp=$this->_tpl_vars['num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" ';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo 'selected="selected"';  endif;  echo '>';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['whatsnew_display_number'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['num'])) : sprintf($_tmp, ($this->_tpl_vars['num'])));  echo '</option>';  endforeach; endif; unset($_from);  echo '</select></td></tr><tr class="row"><th scope="row">';  echo $this->_tpl_vars['lang']['whatsnew_display_items'];  echo '</th><td class="nowrap"><label for="whatsnew_display_title';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_title';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_title" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" checked="checked" disabled="disabled" /><span class="disable_lbl">';  echo $this->_tpl_vars['lang']['whatsnew_display_title'];  echo '</span></label><br /><label for="whatsnew_display_description';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_description';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_description" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' /><span>';  echo $this->_tpl_vars['lang']['whatsnew_display_description'];  echo '</span></label><br /><label for="whatsnew_display_room_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_room_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_room_name" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_room_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' /><span>';  echo $this->_tpl_vars['lang']['whatsnew_display_room_name'];  echo '</span></label><br /><label for="whatsnew_display_module_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_module_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_module_name" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' /><span>';  echo $this->_tpl_vars['lang']['whatsnew_display_module_name'];  echo '</span></label><br /><label for="whatsnew_display_user_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_user_name';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_user_name" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' /><span>';  echo $this->_tpl_vars['lang']['whatsnew_display_user_name'];  echo '</span></label><br /><label for="whatsnew_display_insert_time';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_insert_time';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_insert_time" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_insert_time'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' /><span>';  echo $this->_tpl_vars['lang']['whatsnew_display_insert_time'];  echo '</span></label></td></tr>';  if (( ((is_array($_tmp=$_SESSION['_space_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _SPACE_TYPE_PUBLIC || ((is_array($_tmp=$this->_tpl_vars['action']['myportal_user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != '0' )):  echo '<tr class="row"><th scope="row">';  echo $this->_tpl_vars['lang']['whatsnew_allow_rss_feed'];  echo '</th><td><label for="whatsnew_allow_rss_feed_off';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_allow_rss_feed_off';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" name="allow_rss_feed" value="';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['allow_rss_feed'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF )):  echo ' checked="checked"';  endif;  echo ' onclick=\'commonCls.displayNone($("whatsnew_rss_title_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '")); commonCls.displayNone($("whatsnew_rss_description_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));\' />';  echo $this->_tpl_vars['lang']['whatsnew_allow_rss_feed_off'];  echo '</label>&nbsp;&nbsp;<label for="whatsnew_allow_rss_feed_on';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_allow_rss_feed_on';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="radio" name="allow_rss_feed" value="';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['allow_rss_feed'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _ON )):  echo ' checked="checked"';  endif;  echo ' onclick=\'commonCls.displayVisible($("whatsnew_rss_title_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '")); commonCls.displayVisible($("whatsnew_rss_description_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"));\' />';  echo $this->_tpl_vars['lang']['whatsnew_allow_rss_feed_on'];  echo '</label><div id="whatsnew_rss_title_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['allow_rss_feed'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF )):  echo ' class="display-none"';  endif;  echo '><div class="hr"></div><label for="whatsnew_rss_title';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['whatsnew_rss_title'];  echo '</label><br /><input id="whatsnew_rss_title';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="mail_subject" name="rss_title" type="text" value="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['rss_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" /></div><div id="whatsnew_rss_description_area';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['allow_rss_feed'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == _OFF )):  echo ' class="display-none"';  endif;  echo '><div class="hr"></div><label for="whatsnew_rss_description';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['whatsnew_rss_description'];  echo '</label><br /><textarea id="whatsnew_rss_description';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="mail_body" name="rss_description">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['rss_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</textarea><div class="note">';  echo $this->_tpl_vars['lang']['whatsnew_note'];  echo '</div></div></td></tr>';  endif;  echo '<tr class="row"><th scope="row">';  echo $this->_tpl_vars['lang']['whatsnew_default_module'];  echo '</th><td><table summary="';  echo ((is_array($_tmp=@_SUMMARY_TARGETMODULE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  $this->assign('line', 2);  echo '';  $_from = ((is_array($_tmp=$this->_tpl_vars['action']['modules'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['module'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['module']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_id'] => $this->_tpl_vars['module']):
        $this->_foreach['module']['iteration']++;
 echo '';  $this->assign('loop_num', ((is_array($_tmp=$this->_foreach['module']['iteration']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  if (( ( ((is_array($_tmp=$this->_tpl_vars['loop_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % ((is_array($_tmp=$this->_tpl_vars['line'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) == 0 )):  echo '<tr>';  endif;  echo '<td class="nowrap"><label for="whatsnew_display_modules';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['module_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><input id="whatsnew_display_modules';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['module_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" type="checkbox" name="display_modules[';  echo ((is_array($_tmp=$this->_tpl_vars['loop_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ']" value="';  echo ((is_array($_tmp=$this->_tpl_vars['module_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['modules'][$this->_tpl_vars['module_id']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo ' checked="checked"';  endif;  echo ' />';  echo ((is_array($_tmp=$this->_tpl_vars['module']['module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</label></td>';  if (( ((is_array($_tmp=($this->_foreach['module']['iteration'] == $this->_foreach['module']['total']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  $this->assign('remainder', ((is_array($_tmp=$this->_tpl_vars['line']-$this->_tpl_vars['loop_num']%$this->_tpl_vars['line'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['remainder'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0 )):  echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['remainder']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<td>&nbsp;</td>';  endfor; endif;  echo '';  endif;  echo '';  endif;  echo '';  if (( ( ((is_array($_tmp=$this->_tpl_vars['loop_num'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) % ((is_array($_tmp=$this->_tpl_vars['line'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) ) == ((is_array($_tmp=$this->_tpl_vars['line']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=($this->_foreach['module']['iteration'] == $this->_foreach['module']['total']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '</tr>';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</table></td></tr></table><div class="btn-bottom"><input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_regist'];  echo '" onclick=\'whatsnewCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeStyle(this.form); return false;\' />&nbsp;<input class="btn-width" type="button" value="';  echo $this->_tpl_vars['lang']['_cancel'];  echo '" onclick="commonCls.sendView(\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'whatsnew_view_main_init\'); return false;" /></div></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../whatsnew_script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<script class="nc_script" type="text/javascript">if(';  echo ((is_array($_tmp=$this->_tpl_vars['action']['whatsnew_obj']['display_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ' == 0){$("whatsnew_display_day';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '").checked = true;whatsnewCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeDisplayType(';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');}else{$("whatsnew_display_num_type';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '").checked = true;whatsnewCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].changeDisplayType(';  echo ((is_array($_tmp=@_OFF)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');}whatsnewCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].switchDisplayType($("whatsnew_form';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"),';  echo ((is_array($_tmp=@_ON)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo ');</script>'; ?>