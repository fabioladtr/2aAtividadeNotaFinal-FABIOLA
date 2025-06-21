<?php
if (isset($_GET['id'])) {
    require 'db.php';

    $id = intval($_GET['id']);
    $db->exec("DELETE FROM estoque WHERE id = $id");

    header('Location: index.php');
    exit;
}

?>