<html>

<head>
<title>Estabelecendo conexao</title>
</head>
<body>


<?php
// Dados para a conexao com o banco de dados

$host = 'localhost';
$user = 'root';
$pass = '';
$banco = 'login';

//Executa a conexao com o MYSQL
$conexao = @mysql_connect($host, $user, $pass);

//seleciona o banco que desejamos utilizar
$select = @mysql_select_db($banco);
	
 // Criação da expressao que vai inserir os dados no banco
$nome = $_POST["nome"];
$foto = $_FILES["foto"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


if($foto != NULL) { 
	$nomeFinal = time().'.jpg'; 
	if (move_uploaded_file($foto['tmp_name'], $nomeFinal)) { 
		$tamanhoImg = filesize($nomeFinal); 
		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
		//mysql_connect($host,$username,$password) or die("Impossível Conectar");
		//@mysql_select_db($db) or die("Impossível Conectar"); 
		//mysql_query("INSERT INTO CADASTRO (foto) VALUES ('$mysqlImg')") or die("O sistema não foi capaz de executar a query");
		unlink($nomeFinal); 
		
	} 
} else { echo"Você não realizou o upload de forma satisfatória."; } 

$sql = "INSERT INTO CADASTRO(nome, foto, sobrenome, email, usuario, senha)VALUE('$nome', '$foto','$sobrenome', '$email', '$usuario', '$senha')";

//Executa a expressao SQL e armazena o resultado
$result = mysql_query($sql);
echo "<center>A CADASTRO FOI FEITO COM SUCESSO!<center>";
?>

<form name="logar" method ="post"  action="login.php">
	<input type="button" value="LOGAR" onClick="history.go(-2)">
</form>
</body>
</html>

