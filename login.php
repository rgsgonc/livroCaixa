<?php
session_start();
set_time_limit(0);
$pagina_login = 1;
include 'config.php';
include 'functions.php';
if (isset($_GET['sair'])) {
    $_SESSION['logado'] = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/caixa.css" rel="stylesheet" />
        <title id='titulo'>Livro caixa <?php echo $lc_titulo ?></title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <script language="javascript" src="scripts.js"></script>
    </head>
    
	<body style="padding:10px">	
		<?php 
		include ("cabecalho.php");
		include ("login-formulario.php");
		include ("rodape.php");
		?>
	</body>
</html>
