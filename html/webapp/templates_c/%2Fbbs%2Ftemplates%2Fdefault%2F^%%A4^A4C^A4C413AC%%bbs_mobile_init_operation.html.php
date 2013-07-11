<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from bbs_mobile_init_operation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bbs_mobile_init_operation.html', 4, false),)), $this); ?>
<?php echo '';  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['topicCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<form method="get" action=".';  echo ((is_array($_tmp=@INDEX_FILE_NAME)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><div data-role="controlgroup" data-type="horizontal" style="margin-bottom:0px;"><input type="hidden" name="action" value="bbs_view_main_init"><input type="hidden" name="block_id" value="';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"><select name="visible">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bbs_mobile_visible_row_option.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</select><input data-icon="refresh" data-iconpos="right" type="submit" name="switch" value="';  echo $this->_tpl_vars['lang']['_mobile_switch'];  echo '">';  echo $this->_tpl_vars['session_form'];  echo '</div></form>';  if (( ((is_array($_tmp=$this->_tpl_vars['action']['pageEnd'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 1 )):  echo '<div data-role="navbar" data-type="horizontal">';  echo ((is_array($_tmp=$this->_tpl_vars['lang']['_mobile_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['pageStart'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) > 0):  echo '..';  endif;  echo '';  unset($this->_sections['page']);
$this->_sections['page']['name'] = 'page';
$this->_sections['page']['start'] = (int)((is_array($_tmp=$this->_tpl_vars['action']['pageStart'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));
$this->_sections['page']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['pageEnd'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page']['show'] = true;
$this->_sections['page']['max'] = $this->_sections['page']['loop'];
$this->_sections['page']['step'] = 1;
if ($this->_sections['page']['start'] < 0)
    $this->_sections['page']['start'] = max($this->_sections['page']['step'] > 0 ? 0 : -1, $this->_sections['page']['loop'] + $this->_sections['page']['start']);
else
    $this->_sections['page']['start'] = min($this->_sections['page']['start'], $this->_sections['page']['step'] > 0 ? $this->_sections['page']['loop'] : $this->_sections['page']['loop']-1);
if ($this->_sections['page']['show']) {
    $this->_sections['page']['total'] = min(ceil(($this->_sections['page']['step'] > 0 ? $this->_sections['page']['loop'] - $this->_sections['page']['start'] : $this->_sections['page']['start']+1)/abs($this->_sections['page']['step'])), $this->_sections['page']['max']);
    if ($this->_sections['page']['total'] == 0)
        $this->_sections['page']['show'] = false;
} else
    $this->_sections['page']['total'] = 0;
if ($this->_sections['page']['show']):

            for ($this->_sections['page']['index'] = $this->_sections['page']['start'], $this->_sections['page']['iteration'] = 1;
                 $this->_sections['page']['iteration'] <= $this->_sections['page']['total'];
                 $this->_sections['page']['index'] += $this->_sections['page']['step'], $this->_sections['page']['iteration']++):
$this->_sections['page']['rownum'] = $this->_sections['page']['iteration'];
$this->_sections['page']['index_prev'] = $this->_sections['page']['index'] - $this->_sections['page']['step'];
$this->_sections['page']['index_next'] = $this->_sections['page']['index'] + $this->_sections['page']['step'];
$this->_sections['page']['first']      = ($this->_sections['page']['iteration'] == 1);
$this->_sections['page']['last']       = ($this->_sections['page']['iteration'] == $this->_sections['page']['total']);
 echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['pageNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_sections['page']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<span class="ui-btn-up-d ui-btn-corner-all ui-btn ui-btn-inline" style="padding:12px 3px;cursor:default;">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['pageNumber']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</span>';  else:  echo '<a data-role="button" data-inline="true" class="ui-btn-corner-all " href="?action=bbs_view_main_init&amp;block_id=';  echo ((is_array($_tmp=$this->_tpl_vars['block_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '&amp;page=';  echo ((is_array($_tmp=$this->_sections['page']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['session_param'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '" style="padding-left:3px;padding-right:3px;">';  echo ((is_array($_tmp=$this->_sections['page']['index']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>&nbsp;';  endif;  echo '';  endfor; endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['pageEnd'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) < ((is_array($_tmp=$this->_tpl_vars['action']['pageCount'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '..';  endif;  echo '</div>';  endif;  echo '';  endif;  echo ''; ?>