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
    </head>

    <body>
        <h1>Lista de Tarefas</h1>

        <h2>Adiocnar Tarefa</h2>
        <form method="post" action="add_tarefa.php">
            <label>Descrição: <input type="text" name="descricao" required></label><br>
            <label> Data de Vencimento: <input type="date" name="vencimento" required></label><br>
            <button type="submit">Adicionar</button>
        </form>

        <h2>Tarefas Pendentes</h2>
        <ul>
            <?php while ($tarefa = $tarefas_ativas->fatchArray(SQLITE3_ASSOC));
                <li>
                <?= htmlspecialchars($tarefa['descricao']) ?> (vencimento: <? $tarefa['vencimento'] ?>)</s>
                <a href="delete_tarefa.php?id=<>= $tarefa['id'] ?>"> [Excluir]</a>
                </li>

                </php endwhile; ?>

                </ul>
    </body>
    </html>