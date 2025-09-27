<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Biblioteca</title>
</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>

    <h2 style = "text-align: center">Formulário para Cadastro de Livros</h2>

    <div class="container">
        <h2>Preencha os dados do Livro</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input placeholder="Título" type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input placeholder="Gênero" type="text" name="genero" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input placeholder="Autor" type="text" name="autor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input placeholder="Ano de Publicação" name="ano"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input placeholder="Quantidade de Páginas" type="text" name="pag" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>            
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="index.php" type="button" class="btn btn-danger">Voltar</a>      
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>