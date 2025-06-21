<?php
require'db.php';
$estoque = $db->query("SELECT * FROM estoque");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTAO1</title>
</head>
<body>

<h1>EStoque Interno</h1>

<ul>
    <?php while ($estoque = $estoque->fetchArray(SQLITE3_ASSOC)):?>
        <li>
            <?= htmlspecialchars($estoque['titulo']) ?> - <?= htmlspecialchars($estoque['autor']) ?>
            <a href="excluir.php?id=<?= $estoque['id'] ?>">[Excluir]</a>
        </li>
    <?php endwhile; ?>
</ul>

<h2>Adiconar Livro</h2>
<form method="post" action="add_book.php">
    <label>Título: <input type="text" name="titulo" required></label><br>
    <label>Autor: <input type="text" name="autor" required></label><br>
    <button type="submit">Adicionar</button>
</form>

</body>
</html>