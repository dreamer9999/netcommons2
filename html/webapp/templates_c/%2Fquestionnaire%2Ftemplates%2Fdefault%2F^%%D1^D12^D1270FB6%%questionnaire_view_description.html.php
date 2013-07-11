<?php /* Smarty version 2.6.12, created on 2013-07-11 09:01:36
         compiled from questionnaire_view_description.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'wysiwig_convert_url', 'questionnaire_view_description.html', 5, false),)), $this); ?>
<?php echo '';  echo '<div class="questionnaire_description">';  if (! empty ( $this->_tpl_vars['question']['description'] )):  echo '';  echo ((is_array($_tmp=$this->_tpl_vars['question']['description'])) ? $this->_run_mod_handler('wysiwig_convert_url', true, $_tmp) : wysiwig_convert_url($_tmp));  echo '<br class="float-clear" />';  endif;  echo '</div>'; ?>