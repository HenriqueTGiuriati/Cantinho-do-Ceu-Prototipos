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
			
				<div class="panel-heading"><h3><center>CADASTRO DO PACIENTE</center><h3></div>
				<div class="panel-body">
				
				<div class="container" style="background-color:#fff" >
				          
          <form class="form-horizontal">
            <div class="tabbable"> <!-- Only required for left/right tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Informações Pessoais</a></li>
                <li><a href="#tab2" data-toggle="tab">Contatos</a></li>
                <li><a href="#tab3" data-toggle="tab">Documentos</a></li>
                <li><a href="#tab4" data-toggle="tab">Familia</a></li>
              </ul>
              <div class="tab-content">

                <!-- TAB1 - Informações Pessoais-->
                <div class="tab-pane active" id="tab1" style="padding-top:30px">
                <div class="col-sm-12 form-group">
                    	<center> <img src="download.jpg"/>
                     	<p><small>300x200   PNG, JPG</small></p></center>
                  </div>

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="nomePaciente" placeholder="">
                    </div>
                      </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Data de Nascimento:</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="dataNasc" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">Sexo:</label>
                    <div class="col-sm-1 radio">
                      <label>
                        <input type="radio" name="optionsRadios" class="" id="sexo" >
                        Feminino
                      </label>
                      <label>
                        <input type="radio" name="optionsRadios" class="" id="sexo">
                        Masculino
                      </label>
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

                        <label for="inputUser" class="col-sm-2 control-label">Escolaridade:</label>
                      <div class="col-sm-3">
                          <select class="form-control" id="escolaridade">
                            <option>Ensino Fundamental I</option>
                            <option>Ensino Fundamental I Incompleto</option>
                            <option>Ensino Fundamental II</option>
                            <option>Ensino Fundamental II Incompleto</option>
                            <option>Ensino Médio I</option>
                            <option>Ensino Médio II</option>
                            <option>Ensino Médio III</option>
                            <option>Ensino Médio Incompleto</option>
                            <option>Graduação</option>
                          </select>
                        </div>
                      </div> <!-- form-group -->

            <div class="col-sm-12 form-group">
              <label for="inputUser" class="col-sm-2 control-label">Naturalidade:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="naturalidade" placeholder="">
              </div>

              <label for="inputUser" class="col-sm-2 control-label">Nacionalidade:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="nacionalidade" placeholder="">
              </div>                            
            </div> <!-- form-group -->
        

            <div class="col-sm-12 form-group">
                        <label for="inputUser" class="col-sm-2 control-label">Religião:</label>
                        <div class="col-sm-3">
                          <select class="form-control" id="religiao">
                            <option>Evangélico</option>
                            <option>Católico</option>
                            <option>Adventista do Sétimo Dia</option>                            
                            <option>Testemunha de Jeová</option>
                            <option>Espírita</option>    
                            <option>Ubanda</option>                        
                            <option>Outros</option>
                           
                          </select>
                        </div>
                      </div> <!-- form-group -->


                    <div class="col-sm-12 form-group">
                      <label for="inputUser" class="col-sm-2 control-label">Ocupação:</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="ocupacao" placeholder="">
                      </div>             
                    </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">RG:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="rgPaciente" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">CPF:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="cpf" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                                      <label for="inputUser" class="col-sm-2 control-label">Nº Hygia:</label>
                                      <div class="col-sm-3">
                                        <input type="text" class="form-control" id="hygia" placeholder="">
                                      </div>

                                      <label for="inputUser" class="col-sm-2 control-label">SUS:</label>
                                      <div class="col-sm-3">
                                        <input type="text" class="form-control" id="sus" placeholder="">
                                      </div>
                    </div> <!-- form-group -->                                    

                  <div class="col-sm-12 form-group">
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
                </div>

                <!-- TAB2 -Contatos--> 
                <div class="tab-pane" id="tab2" style="padding-top:30px">


                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Logradouro:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="ruaPaciente" placeholder="">
                    </div>

                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">

                    <label for="inputUser" class="col-sm-2 control-label">Número:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="numeroPaciente" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-1 control-label">Bairro:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="bairroPaciente" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">Complemento:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" id="bairroPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputMunicipio" class="col-sm-2 control-label">Cidade:</label>
                    <div class="col-sm-2">
                      <select class="form-control" id="inputMunicipio">
                        <option>Araçatuba</option>
                        <option>Batatais</option>
                        <option>Catanduva</option>
                        <option>Cravinhos</option>
                        <option>Franca</option>
                        <option>Jaboticabal</option>
                        <option>Jales</option>
                        <option>Ribeirão Preto</option>
                        <option>São José do Rio Preto</option>
                        <option>Sertãozinho</option>
                        <option>Taquaritinga</option>
                      </select>
                    </div>

                    <label for="inputMunicipio" class="col-sm-1 control-label">Estado:</label>
                    <div class="col-sm-2">
                      <select class="form-control" id="inputMunicipio">
                        <option>SP</option>
                      </select>
                    </div>

                    <label for="inputUser" class="col-sm-1 control-label">CEP:</label>
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
                </div>

                <!-- TAB3 -Documentos--> 
                <div class="tab-pane" id="tab3" style="padding-top:30px">
                  <div class="col-sm-12">
                    <h5>RG:</h5> 
                  </div>


                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Número:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="numeroRGPaciente" placeholder="">
                    </div>

                    <label for="inputMunicipio" class="col-sm-1 control-label">Estado:</label>
                    <div class="col-sm-2">
                      <select class="form-control" id="inputMunicipio">
                        <option>SP</option>
                      </select>
                    </div>

                    <label for="inputUser" class="col-sm-1 control-label">Orgão Emissor:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="orgaoRGPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Data Emissão:</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control" id="dataEmiRGPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->      

               

                  
                    <div class="col-sm-12 form-group">
                      <div class="col-sm-12">
                       <h5>Carteira de Trabalho:</h5> 
                     </div>

                    </div> <!-- form-group -->


                  <div class="col-sm-12 form-group"> 
                      <label for="inputUser" class="col-sm-2 control-label">Série:</label>
                    <div class="col-sm-5">
                      <input type="text" class="control-label form-control" id="dataEmiCarTrabPaciente" placeholder="">
                    </div>
                      <label for="inputUser" class="col-sm-2 control-label col-sm-3 control-label">Estado:</label>
                    <div class="col-sm-2">
                      <input type="text" class="control-label form-control" id="dataEmiCarTrabPaciente" placeholder="">
                    </div>
                      <label for="inputUser" class="col-sm-6 control-label col-sm-3 control-label">Data Emissão:</label>
                        <div class="col-sm-6">
                          <input type="date" class="control-label form-control" id="dataEmiCarTrabPaciente" placeholder="">
                        </div>
                    </div> <!-- form-group -->



                      <div class="col-sm-3 form-group">
                        <label for="inputMunicipio" class="col-sm-3 control-label">Status do Paciente:</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="status">
                            <option>Ativado</option>
                            <option>Desativado - por alta</option>
                            <option>Desativado - por óbito</option>
                            <option>Desativado - outro motivo</option>
                          </select>
                        </div>
                      </div> <!-- form-group -->  

                  <div class="col-sm-12">                  
                   <h5>Renda</h5> 
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="inputUser" class="col-sm-3 control-label">Valor:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rendaPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group --> 
                </div>

                <!-- TAB4 -Familia--> 
                <div class="tab-pane" id="tab4" style="padding-top:30px">
                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-1 control-label">Nome:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="conjugePaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->


                        <div class="col-sm-12 form-group">
                        <label for="inputUser" class="col-sm-2 control-label">Grau de Parentesco:</label>
                        <div class="col-sm-7">
                          <select class="form-control" id="parentesco">
                            <option>Mãe</option>
                            <option>Pai</option>
                            <option>Irmão(a)</option>
                            <option>Tio(a)</option>
                            <option>Avô</option>
                            <option>Avó</option>
                            <option>Outros</option>
                          </select>
                        </div>
                      </div> <!-- form-group -->

               <div class="col-sm-6 form-group">
                      <label for="inputUser" class="col-sm-3 control-label">Telefone:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fonePaciente" placeholder="">
                      </div>
                    </div> <!-- form-group -->


              <div class="col-sm-12">                  
                   <h5>Renda</h5> 
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="inputUser" class="col-sm-3 control-label">Valor:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rendaParente" placeholder="">
                    </div>
                  </div> <!-- form-group --> 
                </div>

                </div>

              </div> <!--tab content -->
            </div>
	

            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-4">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </div><!-- form-group -->

            <br><br>
          </form>
          
          
						
				</div>
				</div>
				
			</div>
		</div>
	</div>	
			
    
            
<script src="../bootstrap/js/bootstrap.min.js"></script>
            
  </body>
</html>