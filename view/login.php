<h2><?=$a['title']?></h2>

<form name="billing" method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
<input type="hidden" name="load" value="login">

	<table class="list">
                <tfoot><tr>
			<td class="left2"><input type="submit" value="Ingresar"></td>
			<td class="right2">&nbsp;</td>
	        </tr></tfoot>
		<tbody>
		<tr>
			<td>Usuário:</td>
			<td><input type="text" name="username" value="" size='12'></td>
		</tr><tr>
			<td>Senha:</td>
			<td><input type="password" name="password" value="" size='12'></td>
		</tr>
		</tbody>
	</table>
	
</form>


