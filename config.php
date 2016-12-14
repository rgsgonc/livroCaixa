<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
//Configuração do Banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$d_b = "livro_caixa";

//Título do seu livro Caixa, geralmente seu nome
$lc_titulo="Rafael";

//Autenticação simples
$usuario="admin";
$senha="123";

//////////////////////////////////////
//Não altere a partir daqui!
//////////////////////////////////////

$conn = mysql_connect($host, $user, $pass) or die("Erro na conexÐ³o com a base de dados");
$db = mysql_select_db($d_b, $conn) or die("Erro na seleÐ·Ð³o da base de dados");

if (isset($_SESSION['logado']))
    $logado = $_SESSION['logado'];
else
    $logado = "";

$senha_ = md5($senha);

if (isset($_POST['login']) && $_POST['login'] != '') {

    if ($_POST['login'] == $usuario && $_POST['senha'] == $senha) {
        $logado = $_SESSION['logado'] = md5($_POST['senha']);
        header("Location: ./");
        exit();
    }
}

if ($logado != $senha_ && !isset($pagina_login)) {

    header("Location: login.php");

    exit();
}
?>
