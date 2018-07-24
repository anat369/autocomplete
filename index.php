<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="/js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery.autocomplete.pack.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title></title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h3>Создаем таблицу, в которую добавим тестовые данные из файла.</h3>
            <form method="post" class="addTable" action="addTable.php">
                <div class="form-group">
                    <label>Адрес сервера</label>
                    <input name="host" type="text" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Название базы данных</label>
                    <input name="dbname" type="text" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Логин</label>
                    <input name="user" type="text" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input name="password" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Название таблицы</label>
                    <input name="table" type="text" class="form-control" required/>
                </div>

                <input type="submit" value="Заполнить">

            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

</body>
</html>