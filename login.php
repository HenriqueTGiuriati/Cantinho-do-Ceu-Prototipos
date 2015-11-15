<hmtl>

<head>
	<title>LOGIN - Cantinho do Ceu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php
		include"includes/includecss.php";
	?>	

	

	
</head>

<body class="hold-transition login-page">


	<div class="login-box">	
	  <div class="login-logo">
	    <img id="logo" src = "images/cantinho.jpg" alt="logomarca"/> <br />
	  </div>
	  <!-- /.login-logo -->
	  <div class="login-box-body">
	    <p class="login-box-msg">Bem vindo ao Sistema de Gerenciamento de Paciente</p>

	    <form name="signup" method ="post" action="autenticandousuario.php">
	      <div class="form-group has-feedback">
	        <input name="usuario" class="form-control" placeholder="Usuário">
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input name="senha" class="form-control" placeholder="Senha" type="password">
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <div class="row">
	        <!-- /.col -->
	        <div class="col-xs-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
	        </div>
	        <!-- /.col -->
	      </div>
	    </form>

	    <a href="register.html" class="text-center">Cadastrar novo funcionário</a>

  	</div>
  	<!-- /.login-box-body -->
  	
	
</body>

</html>

