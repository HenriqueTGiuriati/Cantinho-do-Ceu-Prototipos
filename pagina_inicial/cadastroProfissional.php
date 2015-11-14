<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title> Cadastro Profissional</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

<script type="text/javascript" src="CadastrarProfissional.js"></script>
   
  </head>
  <body>
	<?php
	include"designSistema.php";
	?>
	
    <div class="container">
		
		
		<div class="panel-group">
		  
			<div class="panel panel-default">
			
				<div class="panel-heading"><h3><center>CADASTRO DO PROFISSIONAL</center><h3></div>
				<div class="panel-body">
				
				<div class="container" style="background-color:#fff" >
				          
          <form class="form-horizontal">
            <div class="tabbable"> <!-- Only required for left/right tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Informações Pessoais</a></li>
		            <li><a href="#tab2" data-toggle="tab">Informações Trabalho</a></li>
                <li><a href="#tab3" data-toggle="tab">Contatos</a></li>
                <li><a href="#tab4" data-toggle="tab">Documentos</a></li>
                <li><a href="#tab5" data-toggle="tab">Familia</a></li>
              </ul>
              <div class="tab-content">

                <!-- TAB1 - Informações Pessoais--> 
                <div class="tab-pane active" id="tab1" style="padding-top:30px">
                  <div class="col-sm-12 form-group">
                    	<center> <img src="download.jpg"/>
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
                      <input pattern="[a-zA-Z]+" title="Somente letras" type="text" class="form-control" id="nomeProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->
		
		<div class="col-sm-12 form-group">
		    <label for="inputUser" class="col-sm-2 control-label">Data Nascimento:</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="dataNascProfissional" placeholder="">
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
              <div class="col-sm-3">
                <input type="text" pattern="[a-zA-Z]+" title="Somente letras" class="form-control" id="naturalidade" placeholder="">
              </div>                            

              <label for="inputUser" class="col-sm-2 control-label">Nacionalidade:</label>
              <div class="col-sm-3">
                <input type="text" pattern="[a-zA-Z]+" title="Somente letras"  class="form-control" id="nacionalidade" placeholder="">
              </div>                            
            </div> <!-- form-group -->


                  <div class="col-sm-12 form-group">

			<label for="inputUser" class="col-sm-2 control-label">Escolaridade:</label>
                        <div class="col-sm-3">
                          <select class="form-control" id="escolaridade">
                            <option>Ensino Fundamental </option>
                            <option>Ensino Fundamental Incompleto</option>
                            <option>Ensino Médio </option>
                            <option>Ensino Médio Incompleto</option>
                            <option>Ensino Superior</option>
			    <option>Ensino Superior Incompleto</option>
                          </select>
                        </div>
                    </div>

		                      
                </div>

		<!-- TAB2  Informações Trabalho--> 
                <div class="tab-pane" id="tab2" style="padding-top:30px">

			<div class="col-sm-12 form-group">
		    		<label for="inputUser" class="col-sm-2 control-label">Data Contratação:</label>
                    		<div class="col-sm-3">
                      			<input type="date" class="form-control" id="dataContProfissional" placeholder="">
                    		</div>

				<div class="col-sm-1">
					<input type="checkbox" class="" id="inativo" placeholder="" name="inativo">
					Inativo
                    		</div>

            <label for="inputUser" class="col-sm-2 control-label">Fim de Experiência:</label>
          <div class="col-sm-3">
              <input type="date" class="form-control" id="dataFimEspProfissional" placeholder="">
          </div>

			</div> <!-- form-group -->

			<div class="col-sm-12 form-group">
		    		<label for="inputUser" class="col-sm-2 control-label">Identificação:</label>
                    		<div class="col-sm-4">
                      			<input type="text" pattern="[a-zA-Z0-9]+"  class="form-control" id="idProfissional" placeholder="">
                    		</div>

			</div> <!-- form-group -->
	
			<div class="col-sm-12 form-group">
        <div class="col-sm-12 form-group">
        </div>


        <label for="inputUser" class="col-sm-2 control-label">Cargo/Profissão:</label>
        <div class="col-sm-4">
        	<input type="text" pattern="[a-zA-Z]+" title="Somente letras" class="form-control" id="cargoProfissional" placeholder="">
        </div>

				<label for="inputUser" class="col-sm-1 control-label">Salário:</label>
        <div class="col-sm-2">
          <input type="text"  pattern="[0-9]+,[0-9]{2}$" class="form-control" id="salarioProfissional" placeholder="">
        </div>        
        
			</div> <!-- form-group -->      

            <div class="col-sm-12 form-group">
            <label for="inputUser" class="col-sm-3 control-label">Data Começo:</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="horarioProfissional" placeholder="">
                        </div>

            <label for="inputUser" class="col-sm-2 control-label">Data Término:</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="horarioProfissional" placeholder="">
                        </div>

           </div> <!-- form-group -->

            <div class="col-sm-12 form-group">
            <label for="inputUser" class="col-sm-3 control-label">Horário Entrada:</label>
                        <div class="col-sm-1">
                            <input type="text" pattern="[0-2][0-9]:[0-5][0-9]" class="form-control" id="horarioProfissional" placeholder="">
                        </div>

            <label for="inputUser" class="col-sm-2 control-label">Horário Saida:</label>
                        <div class="col-sm-1">
                            <input type="text" pattern="[0-2][0-9]:[0-5][0-9]" class="form-control" id="horarioProfissional" placeholder="">
                        </div>

            <div class="col-sm-2">
            </div>

            <div class="col-sm-1">
                   <center> <button type="submit" class="btn btn-primary">Adicionar</button> </center>
            </div>
            <div class="col-sm-1">
                   <center> <button type="submit" class="btn btn-primary">Excluir</button> </center>
            </div>

      </div> <!-- form-group -->

		</div>

                <!-- TAB3 -Contatos--> 
                <div class="tab-pane" id="tab3" style="padding-top:30px">

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Logradouro:</label>
                    <div class="col-sm-8">
                      <input type="text" pattern="[a-zA-Z0-9]+" class="form-control" id="ruaProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Número:</label>
                    <div class="col-sm-1">
                      <input type="text" pattern="[0-9]+" title="Somente números" class="form-control" id="numeroProfissional" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-1 control-label">Bairro:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="bairroProfissional" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">Complemento:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="complementoProfissional" placeholder="">
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
                      <input type="text" pattern="[0-9]{5}-[0-9]{3}" title="XXXXX-XXX" class="form-control" id="cepPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Telefone:</label>
                    <div class="col-sm-3">
                      <input type="text" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}"  title="(XX) XXXX-XXXX" class="form-control" id="fonePaciente" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">Celular:</label>
                    <div class="col-sm-3">
                      <input type="text" pattern="\([0-9]{2}\)[\s][0-9]{8,9}"  title="(XX) XXXXXXXXX" class="form-control" id="celPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->
                </div>

                <!-- TAB4 -Documentos--> 
                <div class="tab-pane" id="tab4" style="padding-top:30px">
                  
			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">RG:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="rgProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="rgArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">CPF:</label>
                    		<div class="col-sm-3">
                      			<input type="text" pattern="[0-9]{11}" class="form-control" id="cpfProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="cpfArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Carteira de Trabalho:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="reservistaProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="reservistaArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Titulo Eleitor:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="tituloProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="tituloArqProfissional" placeholder="">
                    		</div>
			
			</div> <!-- form-group -->
		
			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">COREN/Conselho:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="corenProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="corenArqProfissional" placeholder="">
                    		</div>
                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Inscrição PIS:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="pisProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="pisArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Certidão Nascimento:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="cerNascProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="cerNascArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Certidão Casamento:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="cerCasaProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="cerCasaArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Reservista:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="reservistaProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="reservistaArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Carteira Vacinação:</label>

				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="carVacProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-2 control-label">Exame Admissional:</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" id="exameArqProfissional" placeholder="">
        </div>
      </div> <!-- form-group -->

      <div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-2 control-label">Exames Anuais:</label>
        <div id="inserirExame" class="col-sm-offset-6 col-sm-2 btn btn-info">Inserir Exame </div>
        
      </div> <!-- form-group -->

      <div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-offset-1 col-sm-2 control-label">Data: </label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="reservistaProfissional" placeholder="">
        </div>
        <div class="col-sm-4">
          <input type="file" class="form-control" id="exameArqProfissional" placeholder="">
        </div>
      </div> <!-- form-group -->      

      <div id="novoExame" class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-offset-1 col-sm-2 control-label">Data: </label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="reservistaProfissional" placeholder="">
        </div>
        <div class="col-sm-4">          
          <input type="file" class="form-control " id="exameArqProfissional" placeholder="">
        </div>
      </div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Comprovante Residência:</label>

				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="comResiArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->
 
                </div>

                <!-- TAB5 -Familia--> 
                <div class="tab-pane" id="tab5" style="padding-top:30px">

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-7">
                      <input type="text" pattern="[a-zA-Z]+" title="Somente letras" class="form-control" id="nomePareProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->

		  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Data Nascimento:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="dtaPareProfissional" placeholder="">
                    </div>

                        <label for="inputUser" class="col-sm-2 control-label">Grau de Parentesco:</label>
                        <div class="col-sm-2">
                          <select class="form-control" id="parentesco">
                            <option>Conjuguê</option>
                            <option>Filho(a)</option>
                            <option>Mãe</option>
                            <option>Pai</option>
                            <option>Irmão(a)</option>
                          </select>
                        </div>

                      <label for="inputUser" class="col-sm-1 control-label">Telefone:</label>
                      <div class="col-sm-2">
                        <input type="text" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}"  title="(XX) XXXX-XXXX" class="form-control" id="fonePareProfissional" placeholder="">
                      </div>
                    </div> <!-- form-group -->

		<div class="col-sm-12 form-group">
                    <div class="col-sm-9">
                    </div>

		    <div class="col-sm-1">
			<input type="button" value="Adicionar" onclick="">
                    </div>


		    <div class="col-sm-1">
			<input type="button" value="Excluir" onclick="">
                    </div>

                  </div> <!-- form-group -->

		
                </div>

                </div>

              </div> <!--tab content -->
            </div>

            <div class="col-sm-12 form-group">
                   <center> <button type="submit" class="btn btn-primary">Salvar</button> </center>
            </div>  <!-- form-group --> 

            <br><br>
          </form>
          
          
						
				</div>
				</div>
				
			</div>
		</div>
	</div>	
			
    
            

            
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#novoExame').hide('fast');
  });


  $('#inserirExame').click(function(){
      $('#novoExame').show('fast');
  });
</script>