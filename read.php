
<?php
require('conecta.php');

$sql = "SELECT * FROM tabela1 order by id";
$stm = $pdo->prepare($sql);
$stm->execute();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dev Labs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=$

</head>
    <body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">DevLabs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navig$
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Create</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/read.php">Read</a>
                    </li>
                </ul>
            </div>
        </nav>
	<div class="container mt-4 align-self-center">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container mt-4 align-self-center">
			   <h2>Visualizar: </h2>
			   <table class="table table-striped">
    	   		      <thead class="thead-dark">
				<tr>
       		   		  <th>#</td>
        	   		  <th>Nome</td>
        	   		  <th>Email</td>
		   		  <th>Senha</td>
		   		  <th>Ultima Alteração</td>
    				</tr>
	 		      </thead>
   <?php
	foreach($dados as $reg):  
            echo "<tr>" .
                "<td>" . $reg->id . "</td>" .
                "<td>" . $reg->nome . "</td>" .
                "<td>" . $reg->email . "</td>" .
		"<td>" . $reg->senha . "</td>" .
		"<td>" . $reg->ultima_alteracao . "</td>" .
                "</tr>";
	 endforeach;
    ?>
	</table>
                     	  </div> 
      	       	      </div>
       	       	  </div>
      	        </div>
       	    </div>

   </body>
</html>
