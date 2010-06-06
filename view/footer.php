		<?if($_SESSION['id']):?>
		 <div id="toolbar">
			<a href="<?=$a['path']?>?load=user">(<?=$_SESSION['username']?>)</a> <a href="<?=$a['path']?>?logout">Sair</a><br />
			<?=date("d/m/y");?>
		 </div>
		<?endif;?>
	</div>
</div>
<?deb($a['debvar'])?>
</body> 
</html>
