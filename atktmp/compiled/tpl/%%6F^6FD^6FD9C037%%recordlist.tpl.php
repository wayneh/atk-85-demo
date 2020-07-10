<?php /* Smarty version 2.6.30, created on 2020-07-09 11:26:31
         compiled from ./atk/themes/steelblue/templates/recordlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'atkconfig', './atk/themes/steelblue/templates/recordlist.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_atkconfig(array('var' => 'recordlist_onclick','smartyvar' => 'recordlist_onclick'), $this);?>

<?php echo smarty_function_atkconfig(array('var' => 'mra_position','smartyvar' => 'mra_position'), $this);?>


<?php if (isset ( $this->_tpl_vars['formstart'] )): ?><?php echo $this->_tpl_vars['formstart']; ?>
<?php endif; ?>

<div class="recordListContainer">

    <?php if ($this->_tpl_vars['mra'] != '' && $this->_tpl_vars['mra_position'] == 'top'): ?>
        <!-- multirecord actions -->
        <?php if ($this->_tpl_vars['editing']): ?>
            <?php echo $this->_tpl_vars['mra']; ?>

        <?php else: ?>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="bottom"><img src="<?php echo $this->_tpl_vars['atkroot']; ?>
atk/images/arrowdown.gif" border="0"></td>
                    <td style="padding-bottom: 10px; padding-left: 5px">
                        <?php echo $this->_tpl_vars['mra']; ?>

                    </td>
                </tr>
            </table>
        <?php endif; ?>

    <?php endif; ?>

    <table id="<?php echo $this->_tpl_vars['listid']; ?>
" class="table table-condensed recordList">
        <!-- header -->
        <tr>
            <?php unset($this->_sections['headerloop']);
$this->_sections['headerloop']['name'] = 'headerloop';
$this->_sections['headerloop']['loop'] = is_array($_loop=$this->_tpl_vars['header']) ? atkcount($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['headerloop']['show'] = true;
$this->_sections['headerloop']['max'] = $this->_sections['headerloop']['loop'];
$this->_sections['headerloop']['step'] = 1;
$this->_sections['headerloop']['start'] = $this->_sections['headerloop']['step'] > 0 ? 0 : $this->_sections['headerloop']['loop']-1;
if ($this->_sections['headerloop']['show']) {
    $this->_sections['headerloop']['total'] = $this->_sections['headerloop']['loop'];
    if ($this->_sections['headerloop']['total'] == 0)
        $this->_sections['headerloop']['show'] = false;
} else
    $this->_sections['headerloop']['total'] = 0;
if ($this->_sections['headerloop']['show']):

            for ($this->_sections['headerloop']['index'] = $this->_sections['headerloop']['start'], $this->_sections['headerloop']['iteration'] = 1;
                 $this->_sections['headerloop']['iteration'] <= $this->_sections['headerloop']['total'];
                 $this->_sections['headerloop']['index'] += $this->_sections['headerloop']['step'], $this->_sections['headerloop']['iteration']++):
$this->_sections['headerloop']['rownum'] = $this->_sections['headerloop']['iteration'];
$this->_sections['headerloop']['index_prev'] = $this->_sections['headerloop']['index'] - $this->_sections['headerloop']['step'];
$this->_sections['headerloop']['index_next'] = $this->_sections['headerloop']['index'] + $this->_sections['headerloop']['step'];
$this->_sections['headerloop']['first']      = ($this->_sections['headerloop']['iteration'] == 1);
$this->_sections['headerloop']['last']       = ($this->_sections['headerloop']['iteration'] == $this->_sections['headerloop']['total']);
?>
                <th valign="<?php echo $this->_tpl_vars['vorientation']; ?>
" <?php if (isset ( $this->_tpl_vars['header'][$this->_sections['headerloop']['index']]['htmlattributes'] )): ?><?php echo $this->_tpl_vars['header'][$this->_sections['headerloop']['index']]['htmlattributes']; ?>
<?php endif; ?>
                        <?php if ($this->_sections['headerloop']['index'] === 0): ?>class="recordListThFirst"<?php else: ?>class="recordListTh"<?php endif; ?>>
                    <?php if ($this->_tpl_vars['header'][$this->_sections['headerloop']['index']]['content'] != ""): ?><?php echo $this->_tpl_vars['header'][$this->_sections['headerloop']['index']]['content']; ?>
<?php else: ?>&nbsp;<?php endif; ?>
                </th>
            <?php endfor; endif; ?>
        </tr>

        <?php if (count ( $this->_tpl_vars['sort'] )): ?>
            <!-- sort row -->
            <tr>
                <?php echo $this->_tpl_vars['sortstart']; ?>

                <?php $_from = $this->_tpl_vars['sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
                    <th valign="<?php echo $this->_tpl_vars['vorientation']; ?>
" <?php if (isset ( $this->_tpl_vars['col']['htmlattributes'] )): ?><?php echo $this->_tpl_vars['col']['htmlattributes']; ?>
<?php endif; ?>>
                        <?php if ($this->_tpl_vars['col']['content'] != ""): ?><?php echo $this->_tpl_vars['col']['content']; ?>
<?php else: ?>&nbsp;<?php endif; ?>
                    </th>
                <?php endforeach; endif; unset($_from); ?>
                <?php echo $this->_tpl_vars['sortend']; ?>

            </tr>
        <?php endif; ?>

        <?php if (count ( $this->_tpl_vars['search'] )): ?>
            <!-- search row -->
            <tr>
                <?php echo $this->_tpl_vars['searchstart']; ?>

                <?php $_from = $this->_tpl_vars['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
                    <th class="recordListSearch"
                        valign="<?php echo $this->_tpl_vars['vorientation']; ?>
" <?php if (isset ( $this->_tpl_vars['col']['htmlattributes'] )): ?><?php echo $this->_tpl_vars['col']['htmlattributes']; ?>
<?php endif; ?>>
                        <?php if ($this->_tpl_vars['col']['content'] != ""): ?><?php echo $this->_tpl_vars['col']['content']; ?>
<?php else: ?>&nbsp;<?php endif; ?>
                    </th>
                <?php endforeach; endif; unset($_from); ?>
                <?php echo $this->_tpl_vars['searchend']; ?>

            </tr>
        <?php endif; ?>

        <!-- records -->
        <?php echo $this->_tpl_vars['liststart']; ?>

        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
            <tr id="<?php echo $this->_tpl_vars['row']['id']; ?>
" class="<?php echo $this->_tpl_vars['row']['class']; ?>
"
                <?php if ($this->_tpl_vars['row']['background'] != ""): ?>style="background-color:<?php echo $this->_tpl_vars['row']['background']; ?>
" <?php endif; ?>
                    <?php if ($this->_tpl_vars['recordlist_onclick']): ?>
                        onmouseover="highlightrow(this, '<?php echo $this->_tpl_vars['row']['highlight']; ?>
')"
                        onmouseout="resetrow(this)"
                        onclick="selectrow(this, '<?php echo $this->_tpl_vars['listid']; ?>
', <?php echo $this->_tpl_vars['row']['rownum']; ?>
)"
                    <?php endif; ?>>
                <?php unset($this->_sections['colloop']);
$this->_sections['colloop']['name'] = 'colloop';
$this->_sections['colloop']['loop'] = is_array($_loop=$this->_tpl_vars['row']['cols']) ? atkcount($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['colloop']['show'] = true;
$this->_sections['colloop']['max'] = $this->_sections['colloop']['loop'];
$this->_sections['colloop']['step'] = 1;
$this->_sections['colloop']['start'] = $this->_sections['colloop']['step'] > 0 ? 0 : $this->_sections['colloop']['loop']-1;
if ($this->_sections['colloop']['show']) {
    $this->_sections['colloop']['total'] = $this->_sections['colloop']['loop'];
    if ($this->_sections['colloop']['total'] == 0)
        $this->_sections['colloop']['show'] = false;
} else
    $this->_sections['colloop']['total'] = 0;
if ($this->_sections['colloop']['show']):

            for ($this->_sections['colloop']['index'] = $this->_sections['colloop']['start'], $this->_sections['colloop']['iteration'] = 1;
                 $this->_sections['colloop']['iteration'] <= $this->_sections['colloop']['total'];
                 $this->_sections['colloop']['index'] += $this->_sections['colloop']['step'], $this->_sections['colloop']['iteration']++):
$this->_sections['colloop']['rownum'] = $this->_sections['colloop']['iteration'];
$this->_sections['colloop']['index_prev'] = $this->_sections['colloop']['index'] - $this->_sections['colloop']['step'];
$this->_sections['colloop']['index_next'] = $this->_sections['colloop']['index'] + $this->_sections['colloop']['step'];
$this->_sections['colloop']['first']      = ($this->_sections['colloop']['iteration'] == 1);
$this->_sections['colloop']['last']       = ($this->_sections['colloop']['iteration'] == $this->_sections['colloop']['total']);
?>
                    <<?php if ($this->_tpl_vars['row']['type'] == 'subtotal'): ?>th<?php else: ?>td<?php endif; ?>
                            class="<?php if ($this->_sections['colloop']['index'] === 0): ?>recordListTdFirst<?php else: ?>recordListTd<?php endif; ?><?php if ($this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['type'] == 'data' && $this->_tpl_vars['recordlist_onclick']): ?> clickable<?php endif; ?>
                                    row-type-<?php echo $this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['type']; ?>
"
                            valign="<?php echo $this->_tpl_vars['vorientation']; ?>
"  <?php if (isset ( $this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['htmlattributes'] )): ?><?php echo $this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['htmlattributes']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['type'] == 'data' && $this->_tpl_vars['recordlist_onclick']): ?> onclick="rl_try('<?php echo $this->_tpl_vars['listid']; ?>
', event, <?php echo $this->_tpl_vars['row']['rownum']; ?>
, ['select', 'edit', 'view'
                    ], false);"<?php endif; ?>>
                        <?php if ($this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['content'] != ""): ?><?php echo $this->_tpl_vars['row']['cols'][$this->_sections['colloop']['index']]['content']; ?>
<?php else: ?>&nbsp;<?php endif; ?>
                    </<?php if ($this->_tpl_vars['row']['type'] == 'subtotal'): ?>th<?php else: ?>td<?php endif; ?>>
                <?php endfor; endif; ?>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php echo $this->_tpl_vars['listend']; ?>


        <?php if (count ( $this->_tpl_vars['total'] )): ?>
            <!-- totals row -->
            <tr>
                <?php $_from = $this->_tpl_vars['total']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
                    <th class="recordListTotal" valign="<?php echo $this->_tpl_vars['vorientation']; ?>
" <?php if (isset ( $this->_tpl_vars['col']['htmlattributes'] )): ?><?php echo $this->_tpl_vars['col']['htmlattributes']; ?>
<?php endif; ?>>
                        <?php if ($this->_tpl_vars['col']['content'] != ""): ?><?php echo $this->_tpl_vars['col']['content']; ?>
<?php else: ?>&nbsp;<?php endif; ?>
                    </th>
                <?php endforeach; endif; unset($_from); ?>
            </tr>
        <?php endif; ?>
    </table>

    <?php if ($this->_tpl_vars['mra'] != '' && $this->_tpl_vars['mra_position'] == 'bottom'): ?>
        <!-- multirecord actions -->
        <?php if ($this->_tpl_vars['editing']): ?>
            <?php echo $this->_tpl_vars['mra']; ?>

        <?php else: ?>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top" style="padding: 4px 0px"><img src="<?php echo $this->_tpl_vars['atkroot']; ?>
atk/images/arrow.gif" border="0"></td>
                    <td style="padding-top: 6px; padding-left: 5px">
                        <?php echo $this->_tpl_vars['mra']; ?>

                    </td>
                </tr>
            </table>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php if (isset ( $this->_tpl_vars['formend'] )): ?><?php echo $this->_tpl_vars['formend']; ?>
<?php endif; ?>