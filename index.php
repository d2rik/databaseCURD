<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display</title>
</head>
<body>
<h2 style="text-align: center;">List of student's Result</h2>
   <a class="inputa" href="input.php">Input Data</a>
    <table>
        <tr>
            <th>Srl</th>
            <th>ID</th>
            <th>Roll</th>
            <th>Name</th>
            <th>CGPA</th>
            <th>Poaretion</th>
        </tr>

        <?php
include "connect.php";

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $i=$i+1;
        echo "
        <tr>
        <td> $i </td>
        <td> $row[ID] </td>
        <td> $row[Roll] </td>
        <td> $row[Namee] </td>
        <td> $row[CGPA] </td>
        <td>
            <button class='btn edit-btn'> <a href='edit.php?editid=$row[ID]'> Edit </a> </button>
            <button class='btn delete-btn'> <a href='delete.php?deleteid=$row[ID]'> Delete </a> </button>
        </td>
        </tr>
        ";
    }
}
?>
    </table>

</body>

</html>