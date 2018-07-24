<?php
/**
 * Подготавливаем данные из файла, затем составляем запросы в базу,
 * создаем подключение к базе и выполняем запросы,
 * параметры подключения сохраняем в файл
 *
 * @param array $array
 */
function addTable($array = [])
{
    $csv_array = file(__DIR__ . '/test.csv');

    foreach ($csv_array as $key => $value) {
        $csv_string[] = "('{$value}')";
    }

    $sql_create = 'CREATE TABLE ' . $array['table'] . ' (
                    `id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
                    `item_name` VarChar( 300 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                    CONSTRAINT `id` UNIQUE( `id` ) )
                    CHARACTER SET = utf8
                    COLLATE = utf8_general_ci
                    ENGINE = InnoDB';

    $sql_fill = 'INSERT INTO ' . $array['table'] . ' (`item_name`) VALUES' . implode(',', $csv_string);


    $dsn = 'mysql:host=' . $array['host'] . ';dbname=' . $array['dbname'] . ';';
    $dbh = new PDO($dsn, $array['user'], $array['password']);
    $dbh->query($sql_create);
    $dbh->query($sql_fill);

    file_put_contents(__DIR__ . '\config.txt', serialize($array));
}


addTable($_POST);
header("Location: autocomplete.php");
