<?php /* Smarty version 2.6.30, created on 2020-07-09 11:26:31
         compiled from ./atk/themes/default/templates/datagrid.tpl */ ?>
<table border="0" cellspacing="0" cellpadding="2">
    <?php if (! empty ( $this->_tpl_vars['top'] )): ?>
        <tr>
            <td align="left" valign="top" colspan="2">
                <?php echo $this->_tpl_vars['top']; ?>

            </td>
        </tr>
    <?php endif; ?>
    <?php if (! empty ( $this->_tpl_vars['index'] ) || ! empty ( $this->_tpl_vars['editcontrol'] )): ?>
        <tr>
            <td align="left" valign="top">
            <?php if (! empty ( $this->_tpl_vars['editcontrol'] )): ?><?php echo $this->_tpl_vars['editcontrol']; ?>
<?php endif; ?> <?php if (! empty ( $this->_tpl_vars['index'] )): ?><?php echo $this->_tpl_vars['index']; ?>
<?php endif; ?>
        </td>
    </tr>
<?php elseif (! empty ( $this->_tpl_vars['paginator'] ) || ! empty ( $this->_tpl_vars['limit'] ) || ! empty ( $this->_tpl_vars['summary'] )): ?>
    <tr>
        <td align="left" valign="middle">
            <?php if (! empty ( $this->_tpl_vars['editcontrol'] )): ?><?php echo $this->_tpl_vars['editcontrol']; ?>
<?php endif; ?> <?php if (! empty ( $this->_tpl_vars['paginator'] )): ?><?php echo $this->_tpl_vars['paginator']; ?>
<?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['summary'] )): ?><?php echo $this->_tpl_vars['summary']; ?>
<?php endif; ?> <?php if (! empty ( $this->_tpl_vars['limit'] )): ?><?php echo $this->_tpl_vars['limit']; ?>
<?php endif; ?>
        </td>
    </tr>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['list'] )): ?>
    <tr>
        <td align="left" valign="top" colspan="2">
            <?php echo $this->_tpl_vars['list']; ?>

        </td>
    </tr>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['norecordsfound'] )): ?>
    <tr>
        <td align="left" valign="top">
            <i><?php echo $this->_tpl_vars['norecordsfound']; ?>
</i>
        </td>
    </tr>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['paginator'] ) || ! empty ( $this->_tpl_vars['summary'] )): ?>
    <tr>
        <td align="left" valign="middle">
            <?php if (! empty ( $this->_tpl_vars['paginator'] )): ?><?php echo $this->_tpl_vars['paginator']; ?>
<?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['summary'] )): ?><?php echo $this->_tpl_vars['summary']; ?>
<?php endif; ?>
        </td>
    </tr>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['bottom'] )): ?>
    <tr>
        <td align="left" valign="top" colspan="2">
            <?php echo $this->_tpl_vars['bottom']; ?>

        </td>
    </tr>
<?php endif; ?>
</table>