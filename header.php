<?php include 'config.php'; ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<style type="text/css">

.menu_lateral {
	margin-right: 15px;
	margin-top: 0x;
	float: left;
	width: 200px;
	background-color: #e8f1ed;
	border: 1px solid #cae1d7;
	height: 100%;
}

.menu_lateral a {
	text-decoration: none;
	background: #e8f1ed;
	border-left: 5px solid #cae1d7;
	border-top: 1px solid #ffffff;
	color: #4F8A75;
	margin-bottom: 1px;
	padding: 6px;
	display: block;
}

.menu_lateral a:hover {
	background: #e8f1ed;
	color: #4F8A75;
	border-top: 1px solid #ffffff;
	border-left: 5px solid #4F8A75;
}

.menu_lateral a:active {
	background: #cae1d7;
	color: #4F8A75;
	border-top: 1px solid #4F8A75;
	border-left: 5px solid #4F8A75;
	font-weight: bold;
}

.menu_lateral_item_ativo {
	background-color: #cae1d7;
	color: #4F8A75;
	border-top: 1px solid #4F8A75;
	border-left: 5px solid #4F8A75;
	font-weight: bold;
}

.menu_lateral_item_ativo a {
	background-color: #cae1d7;
}

.ondas {
	float: right;
	width: 100%;
	padding: 0 0 5px;
	background: #ccc;
	_margin-right: -3px;
	margin-bottom: 10px;
}
.logo_titulo {
	float: left;
	width: 100%;
	height: 18px;
	font-size: 12px;
	padding-left: 10px;
	color: #425b6b;
	font-weight: bold;
}
.version {
	float: left;
	width: 100%;
	font-size: 10px;
	padding-left: 11px;
	color: #777;
	font-weight: bold;
}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>img/forms.css">
</head>

<div class="ondas">
							<div class="logos">
								<div class="logo_sistema">
									<a href="<?php echo BASE_URL; ?>level1.php"><img
										src="<?php echo BASE_URL; ?>img/lock.png" alt="Template"
										title="Template" /> </a>
								</div>
								<div class="logo_titulo">Mohr - Security Systems</div>
								<span class="version">versão 0.1 release 1</span>
							</div>

						</div> <!--ondas-->

<div class="menu_lateral">
	<a href="<?php echo BASE_URL; ?>level1.php">Home</a> 
	<a href="<?php echo BASE_URL; ?>change.php">Alterar Dados</a> 
	<a href="<?php echo BASE_URL; ?>novo.php?id=1">Novo Cadastro</a> 
	<a style="display:none;" href="<?php echo BASE_URL; ?>root/admin.php">Admin</a>
	<a href="<?php echo BASE_URL; ?>level1.php?sair=1">Sair</a>
</div>
