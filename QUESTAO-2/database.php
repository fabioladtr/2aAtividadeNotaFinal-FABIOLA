<?php
$db = new SQLite3('tarefas.db');

$db->exec("CREATE TABLE IF NOT EXISTS tarefas (id INTERGER PRIMARY KEY AUTOINCREMENT , descricao TEXT NOT NULL , vencimento TEXT NOT NULL , concluida TEXT NOT NULL)");

?>