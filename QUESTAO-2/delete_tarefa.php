<?php

if (isset($_GET['id'])){
    require 'dtabase.php';

    $id = intval($_GET['id']);
    $db->exec("DELETE FROM tarefas WHERE id = $id");

    header('Location: index.php');
    exit;
    
}
?>