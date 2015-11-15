<html>

	<head>
		<title> Cadastro Paciente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" media="screen">
		<link rel="stylesheet" type="text/css" href="../bootstrap/AdminLTE.css" media="screen">
		<link rel="stylesheet" type="text/css" href="../bootstrap/skins/_all-skins.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	  
	</head>
		
	<body class="skin-blue layout-top-nav">
		<?php
		include"designSistema.php";
		?>
		<br/>
		<div class="container">
			<div class="panel-group">
			  
				<div class="panel panel-default">
				
					<div class="panel-heading"><h3><center>HISTÓRICO SEMANAL</center><h3></div>
					<div class="panel-body">
					
					<div class="container" style="background-color:#fff">
					<br />
					
					<div class="col-sm-5 form-group">
						<label for="inputUser" class="col-sm-5 control-label">Nome do Paciente:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nomePaciente" placeholder="">
						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>