<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:35
         compiled from multidatabase_view_main_init_page.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'multidatabase_view_main_init_page.html', 3, false),array('modifier', 'get_themes_image', 'multidatabase_view_main_init_page.html', 5, false),)), $this); ?>
<?php echo '<span class="mdb_page_switch">';  if (((is_array($_tmp=$this->_tpl_vars['action']['prev_link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a class="syslink" href="#" title="';  echo $this->_tpl_vars['lang']['mdb_back'];  echo '';  echo $this->_tpl_vars['lang']['mdb_page_link_title'];  echo '" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].toPage(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['now_page']-1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'\'); return false;"><img class="icon" alt="" src="';  echo ((is_array($_tmp="previous.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '"/>';  echo $this->_tpl_vars['lang']['mdb_back'];  echo '</a>';  endif;  echo '';  unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['action']['link_array'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
 echo '<a class="syslink';  if (((is_array($_tmp=$this->_tpl_vars['action']['now_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ((is_array($_tmp=$this->_tpl_vars['action']['link_array'][$this->_sections['cnt']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo ' current';  endif;  echo '" href="#" title="';  echo ((is_array($_tmp=$this->_tpl_vars['action']['link_array'][$this->_sections['cnt']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '';  echo $this->_tpl_vars['lang']['mdb_page_link_title'];  echo '" onclick="';  if (((is_array($_tmp=$this->_tpl_vars['action']['now_page'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) != ((is_array($_tmp=$this->_tpl_vars['action']['link_array'][$this->_sections['cnt']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo 'mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].toPage(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['link_array'][$this->_sections['cnt']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'\');';  endif;  echo ' return false;">';  echo ((is_array($_tmp=$this->_tpl_vars['action']['link_array'][$this->_sections['cnt']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '</a>';  endfor; endif;  echo '';  if (((is_array($_tmp=$this->_tpl_vars['action']['next_link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))):  echo '<a class="syslink" href="#" title="';  echo $this->_tpl_vars['lang']['mdb_next'];  echo '';  echo $this->_tpl_vars['lang']['mdb_page_link_title'];  echo '" onclick="mdbCls[\'';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\'].toPage(this, \'';  echo ((is_array($_tmp=$this->_tpl_vars['action']['now_page']+1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '\', \'\'); return false;">';  echo $this->_tpl_vars['lang']['mdb_next'];  echo '<img class="icon" alt="" src="';  echo ((is_array($_tmp="next.gif")) ? $this->_run_mod_handler('get_themes_image', true, $_tmp) : get_themes_image($_tmp));  echo '"/></a>';  endif;  echo '</span>'; ?>