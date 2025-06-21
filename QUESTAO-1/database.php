<?php

$db = new SQLite3(estoque.db);

$db->exec("CREATE TABLE IF NOT EXISTS estoque ( id INTERGER PRIMARY KEY, titulo TEXT NOT NULL , autor TEXT NOT NULL , ano INTERGER NOT NULL)");
?>