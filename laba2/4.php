<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаб 2 -> Виведення 4</title>
    <style>
        body {
            background-color: green;
            color: white;
        }

        p {
            font-style: italic;
            font-size: 130%;
            color: seashell;
        }
    </style>

</head>

<body>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, family_name FROM Studentsdata LIMIT 4 OFFSET 12";
$result = $conn->query($sql);
echo "<p>Виведення 4 : </p>" . "<br>";
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<table border = 1>';
        echo '<tr><td>' . "id: " . $row["id"] . '</td><td>' . "  Ім'я: " . $row["firstname"] . '</td><td>' . " Прізвище  " . $row["family_name"] . '</td><tr>';
        echo '</table>';
    }
} else {
    echo "0 results";
}
echo '<br><br>';
echo ' <a href="index.php">На головну</a> <br><br> <br>';
echo ' <a href="1.php?offset=' . 1 . '">' . 1 . '</a>';
echo ' <a href="2.php?offset=' . 2 . '">' . 2 . '</a>';
echo ' <a href="3.php?offset=' . 3 . '">' . 3 . '</a>';
echo ' <a href="5.php?offset=' . 5 . '">' . 5 . '</a>';
?>

</body>

</html>