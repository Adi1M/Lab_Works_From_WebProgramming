<?php
$user = "root";
$pass = "";
$db = "labs";

$conn = mysqli_connect('localhost', $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}


mysqli_select_db($conn, "labs");

$uname = $_POST['user'];
$pass = $_POST['password'];


if (empty($uname)) {

    header("Location: login.php?error=User Name is required");

    exit();

} else if (empty($pass)) {

    header("Location: index.php?error=Password is required");

    exit();

} else {

    $sql = "SELECT * FROM last_lab WHERE Email='$uname' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['Email'] === $uname && $row['Password'] === $pass) {

            echo "Logged in!";


        } else {

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    } else {

        header("Location: login.php?error=Incorect User name or password");

        exit();

    }

    mysqli_close($conn);
}