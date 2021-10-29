{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
<form method="post" action="edit.php">
<input type="hidden" name="id" value="{$users.id}" />
	<table width="550" border="1">
		<tr>
			<td colspan="2" align="center"><strong>Edit Record</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" value="{$users.name}" /></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" id="age" value="{$users.age}" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" id="password" value="{$users.password}" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit Record" /></td>
		</tr>
	</table>
</form>
{include file="footer.tpl"}
