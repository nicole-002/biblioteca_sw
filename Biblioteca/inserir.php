<?php
    require 'conexao.php';

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];
    $autor = $_POST['autor'];
    $paginas = $_POST['pag'];

    $sql = "INSERT INTO livros (titulo, genero, ano, autor,  paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
        echo "Livro inserido com sucesso!<br>";
    } else {
        echo "Erro ao inserir livro.<br>";
    }
?>