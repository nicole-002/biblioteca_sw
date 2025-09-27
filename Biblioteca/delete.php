<?php
require 'conexao.php';

// Verifica se o id_livro foi passado pela URL
if (isset($_GET['id_livro'])) {
    $id_livro = $_GET['id_livro'];

    // Prepara a query de DELETE
    $sql = "DELETE FROM livros WHERE id_livro = :id_livro";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_livro', $id_livro, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Livro deletado com sucesso!";        
    } else {
        echo "Erro ao deletar o livro!";
    }
} else {
    echo "Erro: nenhum livro selecionado para deletar.";
}
?>
