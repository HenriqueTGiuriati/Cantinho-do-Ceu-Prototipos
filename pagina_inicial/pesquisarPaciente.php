<html>

	<head>
		<title> Cadastro Paciente</title>
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
				
					<div class="panel-heading"><h3><center>PESQUISAR PACIENTE</center></h3></div>
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
							<label for="inputUser" class="control-label">ID:</label>
								<input type="text" class="form-control" id="idPaciente" placeholder="">
						</div> <!-- form-group -->

						<div class="col-sm-2 form-group">
							<label for="inputUser" class="control-label">Idade:</label>
								<input type="text" class="form-control" id="idadePaciente" placeholder="">
						</div> <!-- form-group -->
					

						<div class="col-sm-2 form-group">
							<label for="inputUser" class="control-label">Atendimento</label>
								
								<select class="form-control" id="inputRaca">
										<option>Selecione...</option>
										<option>Integral</option>
										<option>Diário</option>
								</select>		
						</div> <!-- form-group -->
						
						<div class="form-group col-sm-2">
						  <label>Data de entrada</label>

						  <input class="form-control">

						</div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<center><button class="btn btn-primary">Pesquisar</button></center>
						</div>
						<div class="col-md-4"></div>
					</div>

					<div class="row">
						<table class="table">
							<thead>
								<th>Posição</th>
								<th>Id</th>
								<th>Nome</th>
								<th>RG</th>
								<th>Data de entrada</th>
								<th></th>
							</thead>
							<tbody>
								<td>1</td>
								<td>132</td>
								<td>Teste</td>
								<td>123.123.123-2</td>
								<td>29/02/2015</td>
								<td>
									<a href="cadastroPaciente.php"><i class="fa fa-check" data-toggle="tooltip" title="Aprovar"></i></a>
									<a href="#"><i class="fa fa-times" data-toggle="tooltip" title="Rejeitar"></i></a>
								</td>
							</tbody>
						</table>
					</div>

					</div>

					</div>
				</div>
				
			</div>
				
		</div>
		
	</body>
</html>

		                           
					