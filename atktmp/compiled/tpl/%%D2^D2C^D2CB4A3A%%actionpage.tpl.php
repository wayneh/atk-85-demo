<?php /* Smarty version 2.6.30, created on 2020-07-09 11:26:31
         compiled from ./atk/themes/badpenguin7/templates/actionpage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'atkmessages', './atk/themes/badpenguin7/templates/actionpage.tpl', 1, false),array('function', 'stacktrace', './atk/themes/badpenguin7/templates/actionpage.tpl', 10, false),)), $this); ?>
<?php echo smarty_function_atkmessages(array(), $this);?>

<?php if (count ( $this->_tpl_vars['atkmessages'] )): ?>
<div class="atkmessages">
  <?php $_from = $this->_tpl_vars['atkmessages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
    <div class="atkmessages_<?php echo $this->_tpl_vars['message']['type']; ?>
"><?php echo $this->_tpl_vars['message']['message']; ?>
</div>
  <?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>
<div class="actionpageWrapper">
<?php echo smarty_function_stacktrace(array(), $this);?>

<?php if (count ( $this->_tpl_vars['stacktrace'] ) > 1): ?>  
  <div class="stacktrace">
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['stacktrace']) ? atkcount($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
      <?php if ($this->_sections['i']['index'] >= $this->_sections['i']['loop'] -4): ?>
       <?php if ($this->_sections['i']['last']): ?>
         <span class="stacktrace_end"><?php echo $this->_tpl_vars['stacktrace'][$this->_sections['i']['index']]['title']; ?>
</span>
       <?php else: ?>           
         <a href="<?php echo $this->_tpl_vars['stacktrace'][$this->_sections['i']['index']]['url']; ?>
" class="stacktrace"><?php echo $this->_tpl_vars['stacktrace'][$this->_sections['i']['index']]['title']; ?>
</a> &raquo;
       <?php endif; ?>
      <?php else: ?>
        <?php if ($this->_sections['i']['index'] == 0): ?>... &raquo;<?php endif; ?>
      <?php endif; ?>
    <?php endfor; endif; ?>
    &nbsp;&nbsp;
    </div>    
<?php endif; ?>
<?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
  <?php echo $this->_tpl_vars['block']; ?>

<?php endforeach; endif; unset($_from); ?>
</div>