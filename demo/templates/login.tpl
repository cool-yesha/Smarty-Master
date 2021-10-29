{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
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
{include file="footer.tpl"}
