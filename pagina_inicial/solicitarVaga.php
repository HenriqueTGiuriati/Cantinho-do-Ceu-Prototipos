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
				
					<div class="panel-heading"><h3><center>SOLICITAÇÃO DE VAGA</center><h3></div>
					<div class="panel-body">
					
					<div class="container" style="background-color:#fff">
					<br />
					
						<form class="form-horizontal">
                  					<div class="col-sm-12 form-group">
                    					<center> 
								<img src="download.jpg"/>
                     						<p><small>300x200   PNG, JPG</small></p>

								<div class="col-sm-4">
								</div>

								<div class="col-sm-4">
                      							<input type="file" class="form-control" id="fotoProfissional" placeholder="">
                    						</div>

								<div class="col-sm-4">
								</div>
	
								</center>
                  					</div>
				
					
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Nome:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nomePaciente" placeholder="">
							</div>
						</div> <!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Data de Nascimento:</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="dataNasc" placeholder="">
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Sexo:</label>
							<div class="col-sm-1 radio">
							<label>
								<input type="radio" name="optionsRadios" class="" id="sexo" >Feminino
							</label>
							
							<label>
							  <input type="radio" name="optionsRadios" class="" id="sexo">Masculino
							</label>
							</div>                            
						</div> <!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">RG:</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="rgPaciente" placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">CPF:</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="rgPaciente" placeholder="">
							</div>
						</div> <!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Raça/Cor:</label>
							<div class="col-sm-3">
								<select class="form-control" id="inputRaca">
									<option>Branco</option>
									<option>Negro</option>
									<option>Pardo</option>
									<option>Amarelo</option>
								</select>
							</div>				

							<label for="inputUser" class="col-sm-2 control-label">Estado Civil:</label>
							<div class="col-sm-3">
								<select class="form-control" id="input">
									<option>Solteiro(a)</option>
									<option>Casado(a)</option>
									<option>Divorciado(a)</option>
									<option>Viúvo(a)</option>
								</select>
							</div>                           
						</div> <!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Naturalidade:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="naturalidade" placeholder="">
							</div>                            
						</div> <!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Nome da Mãe:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nomePaciente" placeholder="">
							</div>
						</div><!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Nome do Pai:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nomePaciente" placeholder="">
							</div>
						</div><!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Responsável:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nomePaciente" placeholder="">
							</div>
						</div><!-- form-group -->
						
											  
						<div class="col-sm-12">
						</div>
					  
						<div class="col-sm-12">
							<h4>Contato</h4> 
						</div>

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Logradouro:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="ruaPaciente" placeholder="">
							</div>

							<label for="inputUser" class="col-sm-1 control-label">Número:</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="numeroPaciente" placeholder="">
							</div>
						</div> <!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Bairro:</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="bairroPaciente" placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Complemento:</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="bairroPaciente" placeholder="">
							</div>

							<label for="inputMunicipio" class="col-sm-1 control-label">Cidade:</label>
							<div class="col-sm-2">
								<select class="form-control" id="inputMunicipio">
									<option>Batatais</option>
									<option>Cravinhos</option>
									<option>Jaboticabal</option>
									<option>Ribeirão Preto</option>
									<option>Sertãozinho</option>
								</select>
						  </div>
						</div> <!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputMunicipio" class="col-sm-2 control-label">Estado:</label>
							<div class="col-sm-2">
								<select class="form-control" id="inputMunicipio">
									<option>SP</option>
								</select>
							</div>

							<label for="inputUser" class="col-sm-4 control-label">CEP:</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="cepPaciente" placeholder="">
							</div>
						</div> <!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Telefone:</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="fonePaciente" placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Celular:</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="celPaciente" placeholder="">
							</div>
						</div> <!-- form-group -->
					   
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Período Solicitado:</label>
							<div class="col-sm-1 radio">
								<label>
									<input type="radio" name="optionsRadios" class="" > Integral
								</label>
								<label>
									<input type="radio" name="optionsRadios" class=""> Diário
								</label>
							</div>    <br />                        
						</div> <!-- form-group -->
						
						
						<div class="col-sm-12 form-group">
							<div class="col-sm-4"> </div>

							<label for="inputUser" class="col-sm-2 control-label">Histórico do Caso:</label>
			
							<div class="col-sm-6"> </div>


							<div class="col-sm-2"> </div>

							<div class="col-sm-10">
								<textarea rows="15" cols="140" maxlength="1000"></textarea>	
								
							</div>
							<div class="col-sm-1"> </div>
						</div><!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<div class="col-sm-4"> </div>

							<div class="col-sm-2"><br /><br />
								<input type="submit" class="btn btn-primary" value="Enviar para análise"/><br /><br /> 
								
							</div>
						</div><!-- form-group -->
						
							
					</form>

					</div>
					</div>	
								 
				</div>
			</div>			
		</div>		
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>