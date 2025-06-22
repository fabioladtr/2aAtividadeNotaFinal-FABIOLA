<?php
if (isset($_GET['id'])) {
    require 'database.php';

    $id = intval($_GET['id']);
    $db->exec("DELETE FROM livros WHERE id = $id");

    header('Location: index.php');
    exit;
}

?>