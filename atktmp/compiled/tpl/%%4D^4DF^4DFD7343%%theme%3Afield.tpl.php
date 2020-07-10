<?php /* Smarty version 2.6.30, created on 2020-07-10 05:02:31
         compiled from theme:field.tpl */ ?>

<!-- START [./atk/themes/steelblue/templates/field.tpl] -->
<tr<?php if ($this->_tpl_vars['field']['rowid'] != ""): ?> id="<?php echo $this->_tpl_vars['field']['rowid']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['field']['initial_on_tab'] != 'yes'): ?> style="display: none"<?php endif; ?> class="<?php echo $this->_tpl_vars['field']['tab']; ?>
">
    <?php if (isset ( $this->_tpl_vars['field']['line'] ) && $this->_tpl_vars['field']['line'] != ""): ?>
        <td colspan="2" valign="top" nowrap="nowrap" class="field"><?php echo $this->_tpl_vars['field']['line']; ?>
</td>
    <?php else: ?>
    <?php if ($this->_tpl_vars['field']['label'] !== 'AF_NO_LABEL'): ?><td valign="top" class="<?php if (isset ( $this->_tpl_vars['field']['error'] )): ?>errorlabel<?php else: ?>fieldlabel<?php endif; ?>"><?php if ($this->_tpl_vars['field']['label'] != ""): ?><b><?php echo $this->_tpl_vars['field']['label']; ?>
</b>:  <?php if (isset ( $this->_tpl_vars['field']['obligatory'] )): ?><?php echo $this->_tpl_vars['field']['obligatory']; ?>
<?php endif; ?><?php endif; ?></td><?php endif; ?>
    <td valign="top" id="<?php echo $this->_tpl_vars['field']['id']; ?>
" <?php if ($this->_tpl_vars['field']['label'] === 'AF_NO_LABEL'): ?>colspan="2"<?php endif; ?> class="field"><?php echo $this->_tpl_vars['field']['full']; ?>
</td>
<?php endif; ?>
</tr>
<!-- END [./atk/themes/steelblue/templates/field.tpl] -->