<!DOCTYPE html>
<html>
<head>
    <title>Хайвуд</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/add_student.js"></script>
</head>
<body>
<div class="control">
    <a href="../index.php" class="btn btn-default">Назад</a>
</div>

<form id="add_student">
    <div id="message" role="alert">

    </div>
    <div class="form-group">
        <input id="name" name='name' class="form-control" placeholder="Имя">
    </div>
    <div class="form-group">
        <input id="sername" name="sername" class="form-control" placeholder="Фамилия">
    </div>
    <div class="form-group">
        <select name="department" class="form-control">
            <option name="robotics" value="Робототехника">Робототехника</option>
            <option name="nanosurgery" value="Нано-хирургия">Нано-хирургия</option>
            <option name="engineering" value="Инженерия">Инженерия</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
