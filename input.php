<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $roll = $_POST["roll"];
    $name2 = $_POST["name"];
    $cgpa = $_POST["cgpa"];
    if ($roll and $name2 and $cgpa) {
        $sql2 = "INSERT INTO student (Roll,Namee,CGPA) VALUES('$roll', '$name2' , '$cgpa')";
        $result2 = mysqli_query($conn, $sql2);
        if (!$result2) {
            die("input faild failed");
        }
        header("location:index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Input</title>
</head>
<body>
<form method="post">
  <label for="roll">Roll:</label>
  <input type="number" id="roll" name="roll" required ><br>

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br>

  <label for="cgpa">CGPA:</label>
  <input type="double" id="cgpa" name="cgpa" required><br>

  <input type="submit" name="submit" id="submit" value="Submit">
</form>
<a class="data-list" href="index.php">List of Data</a>

</body>
</html>
