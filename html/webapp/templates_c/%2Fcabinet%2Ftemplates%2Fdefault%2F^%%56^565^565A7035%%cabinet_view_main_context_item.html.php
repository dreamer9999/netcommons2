<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:30
         compiled from cabinet_view_main_context_item.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cabinet_view_main_context_item.html', 3, false),)), $this); ?>
<?php echo '<a class="link" href="#" onclick=\'parent.cabinetCls["';  echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"].actionContext("';  echo ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=$this->_tpl_vars['file_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=$this->_tpl_vars['file_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['file_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '","';  echo ((is_array($_tmp=$this->_tpl_vars['action']['reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  echo '"); return false;\'>';  if (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'edit' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_edit'];  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'move' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_move'];  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'delete' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_delete'];  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'compress_download' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_compression_download'];  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'compress' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_compression'];  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'decompress' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_decompression'];  echo '</div>';  elseif (( ((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == 'property' )):  echo '<div class="contextRow">';  echo $this->_tpl_vars['lang']['cabinet_property'];  echo '</div>';  endif;  echo '</a>'; ?>