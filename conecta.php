<?php
// $conecta = mysql_connect("mysql.eduardo.machado.kinghost.net", "eduardo", "mudar5555") or print (mysql_error());
// mysql_select_db("eduardo", $conecta) or print(mysql_error());

   $hostname = 'mysql.vibrich.kinghost.net';
   $username = 'vibrich11';
   $password = 'rockandroll123';
   $database = 'vibrich11';

try {
   $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
//   echo 'Conexao efetuada com sucesso!';
}catch(PDOException $e){
   echo $e->getMessage();
}
?>
