<html>

	<head>
		<title> Cadastro Paciente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="style.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		  
	</head>
		
	<body>
		<?php
		include"designSistema.php";
		?>
		
		<div class="container">
			<div class="panel-group">
			  
				<div class="panel panel-default">
				
					<div class="panel-heading"><h3><center>HISTÓRICO SEMANAL</center><h3></div>
					<div class="panel-body">
					
					<div class="container" style="background-color:#fff">
					<br />
					
					<div class="col-sm-12 form-group">
						<label for="inputUser" class="col-sm-2 control-label">Nome do Paciente:</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="nomePaciente" placeholder="">
						</div>
					</div>

					<div class="col-sm-12 form-group">
						<label for="inputUser" class="col-sm-2 control-label">Data:</label>
						
						<div class="col-sm-3">
							<input type="date" class="form-control" id="nomePaciente" placeholder="">
						</div>

					</div>


					<div class="col-sm-12 form-group">
						
						<div class="col-sm-5">

								<label>
									<input type="checkbox" name="optionsRadios" class="" > Receberá visita na instituição.
								</label>

						</div>

					</div>

					<div class="col-sm-12 form-group">

						<div class="col-sm-5">
								<label>
									<input type="checkbox" name="optionsRadios" class=""> Voltará para casa no fim de semana.
								</label>
						</div>

					</div>

					<div class="col-sm-12 form-group">

						<div class="col-sm-5">
								<label>
									<input type="checkbox" name="optionsRadios" class=""> Passeio com voluntário.
								</label>
						</div>

					</div>

					<div class="col-sm-12 form-group">
						<label for="inputUser" class="col-sm-2 control-label">Observações:</label>		

					</div>


					<div class="col-sm-12 form-group">
						<div class="col-sm-10">
								<textarea rows="15" cols="140" maxlength="1000"></textarea>	
								
						</div>

					</div>
					
					<div class="col-sm-12 form-group">
							<div class="col-sm-4"> </div>

							<div class="col-sm-2"><br /><br />
								<input type="submit" class="btn btn-primary" value="Salvar"/><br /><br /> 
								
							</div>
						</div><!-- form-group -->
				</div>
				</div>
			</div>
		</div>