<?php

if (issset($_GET['id'])) {
    require 'database.php';

    $id = intval($_GET['id']);
    $db->exec("UPDATE tarefas SET concluida = 1 WHERE id = $id");

    header('Location: index.php');
    exit;
}

?>