<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    require 'database.php';

    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';

    if (!empty($titulo) && !empty($autor)) {
        $stmt = $db->prepare("INSERT INTO livros (titulo , autor) VALUES (:titulo , :autor)");
        $stmt->bindValue(':titulo' , $titulo , SQLITE3_TEXT);
        $stmt->bindValue(':autor' , $autor , SQLITE3_TEXT);
        $stmt->execute();
}

header('Location: index.php');

exit;

}
?>