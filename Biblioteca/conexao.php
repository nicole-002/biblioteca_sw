<?php
    $host = 'localhost';
    $dbname = 'biblioteca_';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        // Habilita erros do PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão bem-sucedida! <br><hr>";
    } catch (PDOException $e) {
        echo "Erro na conexão: <br>" . $e->getMessage();
    }
?>

