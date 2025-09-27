<?php
    require 'conexao.php';
    $id_livro = $_POST['id_livro']; //colocar o id para não atualizar 2 tabelas
    $novo_titulo = $_POST['titulo'];
    $novo_genero = $_POST['genero'];
    $novo_autor = $_POST['autor'];
    $novo_ano = $_POST['ano'];
    $novo_pag = $_POST['paginas'];    

    $sql = "UPDATE livros 
        SET titulo = :novo_titulo, autor = :novo_autor, genero = :novo_genero, ano = :novo_ano, paginas = :novo_pag
    WHERE id_livro = :id_livro";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id_livro', $id_livro);
    $stmt->bindParam(':novo_titulo', $novo_titulo);
    $stmt->bindParam(':novo_genero', $novo_genero);
    $stmt->bindParam(':novo_autor', $novo_autor);
    $stmt->bindParam(':novo_ano', $novo_ano);
    $stmt->bindParam(':novo_pag', $novo_pag);

    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!<br>";
        echo '<a href="index.php" class="btn btn-danger">Voltar</a>';        
    } else {
        echo "Erro ao atualizar livro!!!💥.<br>";
        echo '<a href="index.php" class="btn btn-danger">Voltar</a>';
    }

    
?>
