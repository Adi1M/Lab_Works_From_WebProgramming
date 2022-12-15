<?php
$user = "root";
$pass = "";
$db = "labs";

$conn = mysqli_connect('localhost', $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}


mysqli_select_db($conn, "labs");

$full_name = $_POST['full'];
$gender = ' '. $_POST['gender'];
$email = $_POST['email_add'];
$password = $_POST['password'];
$date = $_POST['birth'];


$sql = "INSERT INTO last_lab(Full_Name, Password, Birth_Date, Email, Gender) VALUES ('$full_name','$password','$date', '$email', '$gender')";
if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$full_name\n $password\n "
        . "$date\n $email \n$gender");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>
