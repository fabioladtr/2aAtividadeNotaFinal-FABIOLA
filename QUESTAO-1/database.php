<?php

$db = new SQLite3('livros.db');

$db->exec("CREATE TABLE IF NOT EXISTS livros (
    id INTEGER PRIMARY KEY,
    titulo TEXT NOT NULL,
    autor TEXT NOT NULL
)");

?>