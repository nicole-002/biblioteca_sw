<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Biblioteca</title>
</head>
<body>
    <?php
        include_once 'pedaco.php';
        include_once 'conexao.php';

        $id_livro = $_GET['id_livro'];
        //echo "Valor do ID" . $id_livro;
        
    ?>

    <h2 style="text-align: center">Formulário para Atualização de Livros</h2>

    <div class="container">
        <h2>Preencha os dados do Livro</h2>
        <form action="atualizar.php" method="POST">

            <?php
                $sql = "SELECT * FROM livros WHERE id_livro = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id_livro, PDO::PARAM_INT);
                $stmt->execute();

                $livro = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>

            
            <input type="hidden" name="id_livro" value="<?php echo $livro['id_livro']; ?>">

            <div class="mb-3">
                <input type="text" name="titulo" 
                       value="<?php echo $livro['titulo']; ?>" 
                       class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Novo Gênero" type="text" name="genero" 
                       value="<?php echo $livro['genero']; ?>" 
                       class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Novo Autor" type="text" name="autor" 
                       value="<?php echo $livro['autor']; ?>" 
                       class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Novo Ano" type="text" name="ano" 
                       value="<?php echo $livro['ano']; ?>" 
                       class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Novo nº de Páginas" type="text" name="paginas" 
                       value="<?php echo $livro['paginas']; ?>" 
                       class="form-control">
            </div>            
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="listar.php" class="btn btn-danger">Voltar</a>       
        </form>        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
