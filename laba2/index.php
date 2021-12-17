<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб 1</title>
    <style>
        body {
            background-color: #8B0000;
        }
        form {
            text-align: center;
            font-size: 22px;
            font-style: fantasy;
        }
        select,
        input {
            font-size: 120%;
            font-style: fantasy;
            color: white;
            background-color: green;
        }
    </style>
</head>
<body>
<form action="sashakaka.php" method="post">
    <p>Введіть ім'я : <br>
        <input type="text" id="firstname" name="firstname"><br>
    <p>Введіть прізвище : <br>
        <input type="text" id="family_name" name="family_name"><br>
        <input type="submit">
</form>
</body>
</html>