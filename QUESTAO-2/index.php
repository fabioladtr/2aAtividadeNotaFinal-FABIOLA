<?php

require 'database.php';

$tarefas_ativas = $db->query("SELECT * FROM tarefas WHERE concluida = 0 ORDER BY vencimento ASC");
$tarefas_concluidas = $db->query("SELECT * FROM tarefas WHERE concluida = 1 ORDER BY vencimento ASC");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> To Do List</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container">
            <h1>Lista de Tarefas</h1>

            <h2>Adicionar Tarefa</h2>
            <form method="post" action="add_tarefa.php">
                <label>Descrição: <input type="text" name="descricao" required></label><br>
                <label> Data de Vencimento: <input type="date" name="vencimento" required></label><br>
                <button type="submit">Adicionar</button>
            </form>

            <h2>Tarefas Pendentes</h2>
                <ul>
                    <?php while ($tarefa = $tarefas_ativas->fetchArray(SQLITE3_ASSOC)): ?>
                        <li>
                            <?= htmlspecialchars($tarefa['descricao']) ?> (vencimento: <?= $tarefa['vencimento'] ?>)
                            <a href="update_tarefa.php?id=<?= $tarefa['id'] ?>">[Concluir]</a>
                            <a href="delete_tarefa.php?id=<?= $tarefa['id'] ?>">[Excluir]</a>
                        </li>
                    <?php endwhile; ?>
                </ul>

            <h2>Tarefas Concluídas</h2>
                <ul>
                    <?php while ($tarefa = $tarefas_concluidas->fetchArray(SQLITE3_ASSOC)): ?>
                        <li>
                            <s><?= htmlspecialchars($tarefa['descricao']) ?> (vencimento: <?= $tarefa['vencimento'] ?>)</s>
                            <a href="delete_tarefa.php?id=<?= $tarefa['id'] ?>">[Excluir]</a>
                        </li>
                    <?php endwhile; ?>
                </ul>
        </div>
    </body>
</html>