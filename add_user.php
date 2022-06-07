<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'conn.php';
$conn = mysqli_connect("root");
mysqli_select_db("my_db", $conn);

$sql="insert into user (first_name, last_name, email, pass_word)
values ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[reg_date]')";
@@ -20,7 +18,6 @@
        die('Error: ' .mysqli_error());
    }
    echo "1 record successfully added...";
    mysqli_close($conn)
?>
</body>
</html> 