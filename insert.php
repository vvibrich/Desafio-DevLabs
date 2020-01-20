<?php  
require('conecta.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);




try{
  $stmt = $pdo->prepare('INSERT INTO tabela1 (nome, email, senha) VALUES(?,?,?)');

  $stmt->bindValue(1, $nome);
  $stmt->bindValue(2, $email);
  $stmt->bindValue(3, $senha);
  $stmt->execute();
  header('Location: read.php');
} catch(PDOException $error){  
  $_SESSION['error'] = 'Falha ao cadastrar usuário!';
}  
  
  
?>
