<h2><?=$a['title']?></h2>

<form name="billing" method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
<input type="hidden" name="load" value="user">

	<table class="list">
                <tfoot><tr>
			<td class="left2"><input type="submit" value="Mudar Senha"></td>
			<td class="right2">&nbsp;</td>
	        </tr></tfoot>
		<tbody>
		<tr>
			<td>Senha:</td>
			<td><input type="password" name="password" value="" size='12'></td>
		</tr><tr>
			<td>Confirmar Senha:</td>
			<td><input type="password" name="password2" value="" size='12'></td>
		</tr>
		</tbody>
	</table>
	
</form>


