<?php
include 'connect.php';
$id = $_GET['editid'];
$sql5 = "SELECT * FROM  `student` WHERE ID= '$id'";
$result5 = mysqli_query($conn, $sql5);
$dataa= $result5->fetch_assoc();
if (isset($_POST['submit'])) {
    $roll = $_POST["roll"];
    $name2 = $_POST["name"];
    $cgpa = $_POST["cgpa"];

    if ($roll and $name2 and $cgpa){
        $sql4 = "UPDATE student SET ID='$id', Roll= '$roll', Namee= '$name2', CGPA= '$cgpa' WHERE ID= '$id'";
        $result4 = mysqli_query($conn, $sql4);
        if (!$result4) {
            die("edit failed");
        }
        header('location:index.php');
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
  <input type="number" id="roll" name="roll" value=<?php echo "$dataa[Roll]" ?> required> <br>

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value=<?php echo "$dataa[Namee]" ?> required><br>

  <label for="cgpa">CGPA:</label>
  <input type="double" id="cgpa" name="cgpa" value=<?php echo "$dataa[CGPA]" ?> required><br>

  <input type="submit" name="submit" id="submit" value="Submit">
</form>
<a class="data-list" href="index.php">List of Data</a>
</body>
</html>
