<?php

/**
 * Берем параметры подключения к базе из файла,
 * подключаемся к базе, выполняем поиск символов,
 * вводимых в поле поиска и выдаем результат на страницу
 *
 * @param array $array
 */
function viewItem($array=[])
{
    $config = unserialize(file_get_contents(__DIR__ . '\config.txt'));

    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'].';';
    $dbh = new PDO($dsn, $config['user'], $config['password']);

    $sql = "SELECT `item_name` FROM `{$config['table']}` WHERE `item_name` LIKE '%{$array['q']}%' ORDER BY `id`";

    $sth = $dbh->prepare($sql);
    $sth->execute();

    $items = $sth->fetchAll();

    foreach ($items as $item) {
        echo $item['item_name'] . "\n";
    };
}

viewItem($_GET);
