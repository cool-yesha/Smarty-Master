<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-29 15:21:52
  from 'G:\Software\XAMPP_Server\htdocs\programs\smarty-master\smarty-master\demo\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617bf5700fe8c3_26751826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34384fb6205b98c11553242d4bd2b9d87343e35f' => 
    array (
      0 => 'G:\\Software\\XAMPP_Server\\htdocs\\programs\\smarty-master\\smarty-master\\demo\\templates\\login.tpl',
      1 => 1635513336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_617bf5700fe8c3_26751826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<form method="post" action="login.php">
	<table width="550" border="1">
		<tr>
			<td colspan="2" align="center"><strong>Login</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" id="password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Login" /></td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
