<?php /* Smarty version 2.6.30, created on 2020-07-09 11:26:15
         compiled from ./atk/themes/badpenguin7/templates/box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'atkthemeimg', './atk/themes/badpenguin7/templates/box.tpl', 3, false),)), $this); ?>
<table class="panel" cellpadding="0" cellspacing="0">
  <tr>
    <td><div class="panelTitle"><span class="panelTitleText"><?php echo $this->_tpl_vars['title']; ?>
</span><div class="panelTitleRight"><img src="<?php echo smarty_function_atkthemeimg(array('id' => "tabRight.gif"), $this);?>
" alt="tabend"><div style="visibility: hidden" id="atkbusy"><img src="<?php echo smarty_function_atkthemeimg(array('id' => "spinner.gif"), $this);?>
" alt="Busy"/></div></div></div></td>
  </tr>
  <tr>
    <td class="panelHeader"><img src="<?php echo smarty_function_atkthemeimg(array('id' => "contentheaderright.jpg"), $this);?>
" alt="" align="right"></td>
  </tr>
  <tr>
    <td class="panelContent">
      <div class="panelContent2">
      <?php echo $this->_tpl_vars['content']; ?>

      </div>
    </td>
  </tr>
  <tr>
    <td class="panelFooter"><img src="<?php echo smarty_function_atkthemeimg(array('id' => "contentfooterright.jpg"), $this);?>
" alt="" align="right"></td>
  </tr>
</table>
<br class="clearfloat" />
<!-- TEMPLATE: box -->