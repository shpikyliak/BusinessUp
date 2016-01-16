<!DOCTYPE html>
<html>
<head>
    <title>Хайвуд</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/make_time_table.js"></script>
</head>
<body>
<div class="control">
    <a href="../index.php" class="btn btn-default">Назад</a>
    <button id="regenerate" class="btn btn-default">Составить другое расписание</button>
</div>
<?php require_once '../php/make_time_table.php'; ?>
</body>
</html>
