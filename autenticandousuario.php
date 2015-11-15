<html>
<head>
<title>Autenticando usuario</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">

function loginsuccessfully(){
	setTimeout("window.location = 'pagina_inicial/home.php'", 3000);
}

function loginfailed(){
	setTimeout("window.location='login.php'", 3000);
}

</script>

</head>
<body>

<div align="center">

<?php
// Dados para a conexao com o banco de dados
$host = 'mysql26.infobiojr.com.br';
$user = 'infobiojr24';
$pass = 'Ua5825b';
$banco = 'infobiojr24';

//Executa a conexao com o MYSQL
$conexao = @mysql_connect($host, $user, $pass);

//seleciona o banco que desejamos utilizar
$select = mysql_select_db($banco);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysql_query( "SELECT * FROM cadastro WHERE usuario = '$usuario' and senha ='$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);

if($row > 0){
	
	echo "<center>Você foi logado com sucesso!</center>";
	echo"<script>loginsuccessfully()</script>";
	
	
}else{
	echo "<center>Usuário ou senha inválidos</center>";	
	echo "<script>loginfailed()</script>";
}
?>

</div>
</body>

</html>