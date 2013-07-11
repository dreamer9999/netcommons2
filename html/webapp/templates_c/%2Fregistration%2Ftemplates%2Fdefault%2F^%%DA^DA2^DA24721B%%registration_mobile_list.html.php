<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from registration_mobile_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'registration_mobile_list.html', 4, false),array('modifier', 'truncate', 'registration_mobile_list.html', 11, false),)), $this); ?>
<?php echo '<h3>';  echo ((is_array($_tmp=$this->_tpl_vars['current_module_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</h3><ul>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['reg_list'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<li><a href="?action=registration_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['action']['reg_list'][$this->_sections['i']['index']]['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['reg_list'][$this->_sections['i']['index']]['registration_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=@_MOBILE_TITLE_LENGTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=@_MOBILE_TITLE_LENGTH)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), ((is_array($_tmp=@_SEARCH_MORE)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')), true));  echo '</a></li>';  endfor; endif;  echo '</ul><br /><div style="text-align:right"><a href=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '?action=menu_view_mobile_init';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '">';  echo $this->_tpl_vars['lang']['_btn_prev_arrow'];  echo '</a></div>'; ?>