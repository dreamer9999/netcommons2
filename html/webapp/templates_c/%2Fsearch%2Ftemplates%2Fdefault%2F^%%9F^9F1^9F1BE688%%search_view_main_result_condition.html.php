<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:37
         compiled from search_view_main_result_condition.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search_view_main_result_condition.html', 10, false),array('modifier', 'sprintf', 'search_view_main_result_condition.html', 13, false),)), $this); ?>
<?php echo '<h2>';  echo $this->_tpl_vars['lang']['search_result_title'];  echo '</h2><div><span class="search_result_condition_label">';  echo $this->_tpl_vars['lang']['search_condition'];  echo '</span>';  if (( ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$this->_tpl_vars['action']['fm_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$this->_tpl_vars['action']['to_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '';  if (( ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<span class="search_result_condition_title">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['search_condition_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['search_keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['search_keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span}><span class="search_result_condition_value">';  echo ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>&nbsp;&nbsp;&nbsp;';  endif;  echo '';  if (( ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<span class="search_result_condition_title">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['search_condition_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['search_handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['search_handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span}><span class="search_result_condition_value">';  echo ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['handle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>&nbsp;&nbsp;&nbsp;';  endif;  echo '';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['fm_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) || ((is_array($_tmp=$this->_tpl_vars['action']['to_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) )):  echo '<span class="search_result_condition_title">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['search_condition_title'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['search_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) : sprintf($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['search_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))));  echo '</span><span class="search_result_condition_value">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['fm_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo $this->_tpl_vars['lang']['search_target_date_separator'];  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['action']['to_target_date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>&nbsp;&nbsp;&nbsp;';  endif;  echo '';  echo $this->_tpl_vars['lang']['search_result'];  echo '';  else:  echo '';  echo $this->_tpl_vars['lang']['search_no_condition'];  echo '';  endif;  echo '</div><div class="hr"></div>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['init_flag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != _ON )):  echo '';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['target_modules'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '';  $this->assign('module_id', ((is_array($_tmp=$_SESSION['search_select'][$this->_tpl_vars['block_id']]['target_modules'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')));  echo '<div id="search_result_content';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '_';  echo ((is_array($_tmp=$this->_tpl_vars['module_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" class="search_result_contents"></div>';  endfor; endif;  echo '';  endif;  echo ''; ?>