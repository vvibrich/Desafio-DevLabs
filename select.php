<?php
include("conecta.php");

$sql = $pdo->query("SELECT nome_func, sobrenome_func FROM funcionarios GROUP BY nome_func,sobrenome_func ORDER BY nome_func ASC");
$result = $sql->fetch(PDO::FETCH_ASSOC);
// $sql = "SELECT `nome_func`, `sobrenome_func` FROM `funcionarios` GROUP BY nome_func,sobrenome_func ORDER BY nome_func ASC;";
// $result = mysql_query($sql, $conecta);

// header('Content-type: text/html; charset=ISO-8859-1');

   print "Nome: ".$result->nome_func." ".$result->sobrenome_func."</br>";

?>
