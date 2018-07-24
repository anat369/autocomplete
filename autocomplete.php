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
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>Выбираем товар (например, налокотники)</h3>
            <form>
                <div class="form-group">
                    <input name="dbname" type="text" class="form-control" id="item"/>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#item").autocomplete("item.php", {
            selectFirst: true
        });
    });
</script>

</body>
</html>