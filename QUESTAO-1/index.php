<?php

require'database.php';
$livros = $db->query("SELECT * FROM livros");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTAO1</title>
</head>
<body>

<h1>Estoque Interno</h1>

<ul>
    <?php while ($livros = $livros->fetchArray(SQLITE3_ASSOC)):?>
        <li>
            <?= htmlspecialchars($livros['titulo']) ?> - <?= htmlspecialchars($livros['autor']) ?>
            <a href="excluir.php?id=<?= $livros['id'] ?>">[Excluir]</a>
        </li>
    <?php endwhile; 
    
    ?>
</ul>

<h2>Adiconar Livro</h2>
<form method="post" action="add_book.php">
    <label>Título: <input type="text" name="titulo" required></label><br>
    <label>Autor: <input type="text" name="autor" required></label><br>
    <button type="submit">Adicionar</button>
</form>

</body>
</html>