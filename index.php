<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dev Labs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">DevLabs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Create</a>
                    </li>
                    <li class="nav-item">
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
                            <?php 
                                if(isset($_SESSION['success'])){
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                    <?php
                                        echo $_SESSION['success'];
                                    ?>    
                                    </div>
                                    <?php
                                }elseif(isset($_SESSION['error'])){
                                        echo $_SESSION['error'];
                                }
                            ?>
                            <h2>Cadastrar: </h2>
                            <hr>                        
                            <form action="insert.php" method="POST">
                                <div class="form-group">
                                    <labe>Nome: </label>
                                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label>Email: </label>
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu email">
                                </div>            
                                <div class="form-group">
                                    <label>Senha: </label>
                                    <input type="password" name="senha" class="form-control" id="pass" placeholder="Senha">
                                </div>
                                <button type="submit" class="btn btn-success" href="/read.php">Enviar</button>
                                <button type="reset" class="btn btn-danger">Limpar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>
