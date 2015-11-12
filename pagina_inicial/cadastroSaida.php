<html>

  <head>
    <title> Cadastro de Saida de Medicamentos</title>
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
        
          <div class="panel-heading"><h3><center>CADASTRO DE SAÍDA DE MEDICAMENTOS</center><h3></div>
          <div class="panel-body">
          
          <div class="container" style="background-color:#fff">
          <br />
          
            <form class="form-horizontal">
              
              <div class="col-sm-12 form-group">
                <label for="inputUser" class="col-sm-2 control-label">Remédio:</label>
                <div class="col-sm-4">
                  <select class="form-control" id="input">
                    <option>Dipirona</option>
                    <option>Loratradina</option>
                    <option>Nimesulida</option>
                    <option>Fernegan</option>
                  </select>
                </div>

                <div class="col-sm-1">
                  <input type="submit" class="btn btn-primary" value="Add"/><br /><br /> 
                </div>

                <label for="inputUser" class="col-sm-1 control-label">Lote:</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="input">
                      <option>2</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                    </select>
                 </div>
              </div> <!-- form-group -->

              <div class="col-sm-12 form-group">
                <label for="inputUser" class="col-sm-2 control-label">Quantidade:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="quantidade" placeholder="">
                </div>

                  <div class="col-sm-2">
                    <select class="form-control" id="input">
                      <option>Caixa(s)</option>
                      <option>Comprimido(s)</option>
                      <option>Mililitros</option>
                      <option>Frasco(s)</option>
                    </select>
                 </div>
              </div> <!-- form-group -->

              <div class="col-sm-12 form-group">
                <label for="inputUser" class="col-sm-2 control-label">Data:</label>
                <div class="col-sm-3">
                  <input type="date" class="form-control" id="quantidade" placeholder="">
                </div>
              </div> <!-- form-group -->

              <div class="col-sm-12 form-group">
                <label for="inputUser" class="col-sm-2 control-label">Motivo:</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="input">
                      <option>Paciente</option>
                      <option>Danificado</option>
                      <option>Validade</option>
                    </select>
                 </div>
              </div> <!-- form-group -->

              <div class="col-sm-12 form-group">
                <label for="inputUser" class="col-sm-2 control-label">Paciente:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="quantidade" placeholder="">
                </div>

                <label for="inputUser" class="col-sm-1 control-label">Horário:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="quantidade" placeholder="">
                </div>

                (Caso tenha sido selecionado Paciente em Motivo)

              </div> <!-- form-group -->

              <div class="col-sm-12 form-group">
                <label for="inputUser" class="col-sm-2 control-label">Motivo da danificação:</label>

                <div class="col-sm-8">
                  <textarea rows="15" cols="100" maxlength="1000">(Caso tenha sido selecionado Danificado em Motivo)</textarea> 
                </div>
              </div> <!-- form-group -->

              <div class="col-sm-12 form-group">
                <div class="col-sm-5">
                </div>

                <div class="col-sm-2"><br /><br />
                  <input type="submit" class="btn btn-primary" value="Salvar"/><br /><br /> 
                </div>
            </div><!-- form-group -->

            </form>

          </div>
          </div>  
                 
        </div>
      </div>      
    </div>    
  </body>
</html>