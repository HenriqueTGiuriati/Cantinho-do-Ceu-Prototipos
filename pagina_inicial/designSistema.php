<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="home.php" class="navbar-brand"><b>Cantinho</b> do céu</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paciente<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="solicitarVaga.php">Solicitar vaga</a></li>
              <li><a href="pesquisarPaciente.php">Pesquisar Paciente</a></li>
              <li><a href="pesquisarPaciente.php">Lista de espera</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acompanhamento<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="historicoSemanal.php">Histórico Semanal</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profissional<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="cadastroProfissional.php">Cadastrar Profissional</a></li>
              <li><a href="#">Pesquisar Profissional</a></li>
              <li><a href="#">Editar Profissional</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulta<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Nova Consulta</a></li>
              <li><a href="#">Pesquisar Consulta</a></li>
              <li><a href="#">Editar Consulta</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">90 Pacientes em espera</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <div style="position: relative; overflow: hidden; width: auto; height: 200px;" class="slimScrollDiv"><ul style="overflow: hidden; width: 100%; height: 200px;" class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-user text-aqua"></i> José
                    </a>
                    <a href="#">
                      <i class="fa fa-user text-aqua"></i> Maria
                    </a>
                    <a href="#">
                      <i class="fa fa-user text-aqua"></i> José
                    </a>
                    <a href="#">
                      <i class="fa fa-user text-aqua"></i> Maria
                    </a>
                    <a href="#">
                      <i class="fa fa-user text-aqua"></i> José
                    </a>
                    <a href="#">
                      <i class="fa fa-user text-aqua"></i> Maria
                    </a>
                  </li>
                  <!-- end notification -->
                </ul><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
              </li>
              <li class="footer"><a href="#">Ver todos</a></li>
            </ul>
          </li>

          <li class="notifications-menu">
            <!-- Menu toggle button -->
            <a href="../login.php" class="dropdown-toggle">
              <i class="fa fa-sign-out"></i>
            </a>
            
          </li>

        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>