<?php /* Smarty version 2.6.30, created on 2020-07-09 11:26:15
         compiled from ./atk/themes/badpenguin7/templates/top.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'atkconfig', './atk/themes/badpenguin7/templates/top.tpl', 1, false),array('function', 'atkthemeimg', './atk/themes/badpenguin7/templates/top.tpl', 3, false),array('function', 'atktext', './atk/themes/badpenguin7/templates/top.tpl', 10, false),)), $this); ?>
<?php echo smarty_function_atkconfig(array('var' => 'theme_logo','smartyvar' => 'theme_logo'), $this);?>

<div id="banner">
  <div id="bannerLogo"><a href="index.php"><img border="0" src="<?php if (empty ( $this->_tpl_vars['theme_logo'] )): ?><?php echo smarty_function_atkthemeimg(array('id' => "logo.jpg"), $this);?>
<?php else: ?><?php echo $this->_tpl_vars['theme_logo']; ?>
<?php endif; ?>" alt="Logo" /></a></div>
  <div id="bannerCustomImage"></div>
  <div id="topLinks">
  
    <table id="topLinkTable" cellpadding="0" cellspacing="0">
      <tr>
        <td><span id="top-center"><?php $_from = $this->_tpl_vars['centerpiece_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (atkcount($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?><?php echo $this->_tpl_vars['link']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></span></td>
        <?php if ($this->_tpl_vars['user']): ?><td><span id="top-logout"><a href="index.php?atklogout=1" target="<?php echo $this->_tpl_vars['logouttarget']; ?>
"><?php echo smarty_function_atktext(array('id' => 'logout'), $this);?>
 <?php echo $this->_tpl_vars['user']; ?>
</a></span>&nbsp;&nbsp;</td><?php endif; ?>
        <?php if ($this->_tpl_vars['searchpiece']): ?><td id="topLinkSearch"><span id="top-search"><?php echo $this->_tpl_vars['searchpiece']; ?>
</span></td><?php endif; ?>
      </tr> 
    </table>
  </div>
</div>
<!-- TEMPLATE: top -->