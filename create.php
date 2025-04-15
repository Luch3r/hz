<?php 
$dbName = 'novels.db';

try {
    $db = new PDO("sqlite:$dbName00");
    $db->setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $createTableQuery = "
    CREATE TABLE IF NOT EXISTS novels (
    id INTEGER PRIMATY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    author TEXT NOT NULL,
    url TEXT NOT NULL UNIQUE,
    last_updated DATETIME DEFAULT CURRENT_TIMESTAMP
    );";

    $db->exec($createTabeQuery);
    echo "База данных и таблица успешно созданы!";
}catch (PDOException $e) {
    echo "Ошибка: " .$e->getMessage();
}


$db = null;
?>