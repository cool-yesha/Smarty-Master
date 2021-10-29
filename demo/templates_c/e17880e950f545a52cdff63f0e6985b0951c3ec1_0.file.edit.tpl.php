<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-29 14:57:09
  from 'G:\Software\XAMPP_Server\htdocs\programs\smarty-master\smarty-master\demo\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617befa5ca8861_21258088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e17880e950f545a52cdff63f0e6985b0951c3ec1' => 
    array (
      0 => 'G:\\Software\\XAMPP_Server\\htdocs\\programs\\smarty-master\\smarty-master\\demo\\templates\\edit.tpl',
      1 => 1635512224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_617befa5ca8861_21258088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<form method="post" action="edit.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
" />
	<table width="550" border="1">
		<tr>
			<td colspan="2" align="center"><strong>Edit Record</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['name'];?>
" /></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" id="age" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['age'];?>
" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['password'];?>
" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit Record" /></td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
