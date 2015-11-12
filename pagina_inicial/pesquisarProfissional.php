<html>

	<head>
		<title>  Cadastro Paciente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="style.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		

		
		  
	</head>
	<body>
		<?php
		include"designSistema.php";
		?>
		

		<div class="container" >
			<div class="panel-group">
			  
				<div class="panel panel-default">
				
					<div class="panel-heading"><h3><center>PESQUISAR PROFISSIONAL</center></h3></div>
					<div class="panel-body">
					
					<div class="container">
					
					<center><h5> (Escolha um ou mais campos abaixo para realizar a busca)</h5></center><br />
					
					<div class="row">
					<div class="col-sm-1"></div>
						<div class="col-sm-2 form-group">
							<label for="inputUser" class="control-label">Nome:</label>
								<input type="text" class="form-control" id="nomePaciente" placeholder="">
						</div> <!-- form-group -->										

						<div class="col-sm-2 form-group">
							<label for="inputUser" class="col-sm-3">Status</label>
								
								<select class="form-control" id="inputRaca">
										<option>Selecione...</option>
										<option>Ativo</option>
										<option>Inativo</option>
										<option>Geral (ativo e inativo)</option>
								</select>		
						</div> <!-- form-group -->
						
					

					</div>

					<div class="row">
						<table class="table">
							<thead>
								<th>Nome</th>
								<th>RG</th>
								<th>Cargo</th>
								<th></th>
							</thead>
							<tbody>
								<td>João da Silva</td>
								<td>123.123.123-2</td>
								<td>Recursos Humanos</td>
								<td>
									<a href="cadastroProfissional.php"><i class="fa fa-eye" data-toggle="tooltip" title="Ver Cadastro"></i></a>
								</td>
							</tbody>
						</table>
					</div>
					
				</div>
				
			</div>
				
		</div>
		
	</body>
</html>

		                           
					  