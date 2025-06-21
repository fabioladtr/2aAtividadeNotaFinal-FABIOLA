<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'database.php';

    $descricao = $POST['descricao'] ?? '';
    $vencimento = $POST['vencimento'] ?? '';

    if (empty($descricao) && !empty($vencimento)){
        $stmt = $db->prepare("INSERT INTO tarefas (descricao ,  vencimento) VALUES (:descricao , :vencimento)");
        $stmt->bindValue(':descricao', $descricao , SQLITE3_TEXT);
        $stmt->bindValue(':vencimento' , $vencimento , SQLITE3_TEXT);
        $stmt->execute();
    }

    header('Location: index.php');
    exit;

}
?>