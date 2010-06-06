<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?=$a['title']?> <?=$a['appname']?></title>
	
	<!-- generic files  --> 
	<link rel="stylesheet" type="text/css" href="<?=$a['path']?>/public/view.css" media="all">
	<!-- link calendar files  --> 
	<script language="JavaScript" src="<?=$a['path']?>/public/calendar_db.js"></script> 
	<link rel="stylesheet" href="<?=$a['path']?>/public/calendar.css">
</head>
<body>
<div id="wrap">
	<div id="main">
		<?if($_SESSION['username']):?>
		<div class="menu">
		 <ul>
			<li><a href="?load=list_billing" title="Lista de Vencimentos">Vencimentos</a></li>
			<li><a href="?load=list_services" title="Lista de Serviços">Serviços</a></li>
			<li><a href="?load=list_company" title="Lista de Clientes">Empresas</a></li>
                       	<li><a href="?load=list_statics" title="Ver tabela de ingressos e gastos">Estatística</a></li>
			<?if(mselect($_SESSION['id'], 'ugroup', 'seller')==1):?>
				<li><a href="?load=billing" title="Adicionar NF">+NF</a></li>
				<li><a href="?load=company" title="Adicionar novo Cliente">+Empresas</a></li>
				<li><a href="?load=services" title="Adicionar novo Serviço">+Serviço</a></li>
			<?endif;?>
		 </ul>
		</div>
		<?endif;?>
