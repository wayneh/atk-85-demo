<?php /* Smarty version 2.6.30, created on 2020-07-09 11:26:19
         compiled from ./atk/themes/badpenguin7/templates/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'atkconfig', './atk/themes/badpenguin7/templates/login.tpl', 1, false),array('function', 'atkthemeimg', './atk/themes/badpenguin7/templates/login.tpl', 3, false),array('function', 'atktext', './atk/themes/badpenguin7/templates/login.tpl', 22, false),)), $this); ?>
<?php echo smarty_function_atkconfig(array('var' => 'theme_login_logo','smartyvar' => 'login_logo'), $this);?>

<?php if (! $this->_tpl_vars['login_logo']): ?><?php echo smarty_function_atkconfig(array('var' => 'theme_logo','smartyvar' => 'login_logo'), $this);?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['login_logo']): ?><?php ob_start(); ?><?php echo smarty_function_atkthemeimg(array('id' => "login_logo.jpg"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('login_logo', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
<?php if (! $this->_tpl_vars['login_logo']): ?><?php ob_start(); ?><?php echo smarty_function_atkthemeimg(array('id' => "logo.jpg"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('login_logo', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
<?php echo '
<style type="text/css">
body
{
'; ?>

  background: #f3f3f3;
	padding: 50px 24px 24px 24px;
<?php echo '
}
</style>
'; ?>



<div class="LoginHeader"><img src="<?php echo smarty_function_atkthemeimg(array('id' => "contentheaderright.jpg"), $this);?>
" align="right"></div>
<div id='loginform'>
<form action="<?php echo $this->_tpl_vars['formurl']; ?>
" method="post">
<div id='logologin'><img src="<?php echo $this->_tpl_vars['login_logo']; ?>
" alt="Logo">
    <?php if ($this->_tpl_vars['auth_enablepasswordmailer']): ?><p align="right"><input name="login" class="button" type="button" value="<?php echo smarty_function_atktext(array('id' => 'password_forgotten'), $this);?>
"><?php endif; ?>
</div>

  <div id="loginform-title"><?php echo smarty_function_atktext(array('id' => 'login_form'), $this);?>
</div>
  <div id="loginform-content">
  <?php if (isset ( $this->_tpl_vars['auth_max_loginattempts_exceeded'] )): ?>
    <?php echo $this->_tpl_vars['auth_max_loginattempts_exceeded']; ?>

  <?php else: ?>
    <?php echo $this->_tpl_vars['atksessionformvars']; ?>

    <?php if (isset ( $this->_tpl_vars['auth_mismatch'] )): ?><span class="error"><?php echo $this->_tpl_vars['auth_mismatch']; ?>
</span><br><?php endif; ?>
    <?php if (isset ( $this->_tpl_vars['auth_account_locked'] )): ?><span class="error"><?php echo $this->_tpl_vars['auth_account_locked']; ?>
</span><br><?php endif; ?>
    <table cellpadding="0" cellspacing="0" border="0"><tr>
    <td class="loginformLabel"><?php echo smarty_function_atktext(array('id' => 'username'), $this);?>
:</td><td class="loginformField"><?php echo $this->_tpl_vars['userfield']; ?>
</td>
    </tr><tr>
    <td class="loginformLabel"><?php echo smarty_function_atktext(array('id' => 'password'), $this);?>
:</td><td class="loginformField"><input class="loginform" type="password" size="15" name="auth_pw" value=""></td>
    </tr><tr>
    <td class="loginformLabel"></td><td>
    <input name="login" class="button atkdefaultbutton" type="submit" value="<?php echo smarty_function_atktext(array('id' => 'login'), $this);?>
">
    </td>
    </tr>
    
    
    </table>
  <?php endif; ?>
  </div>
  
</form>
</div>
<div class="LoginFooter"><img src="<?php echo smarty_function_atkthemeimg(array('id' => "contentfooterright.jpg"), $this);?>
" align="right"></div>