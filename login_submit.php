<?php
session_start();

require_once 'connection.php';


$email = mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";

if (!preg_match($regex_email, $email)) {
    echo "Incorrect email. Redirecting you back to login page...";
    ?>
    <meta http-equiv="refresh" content="2;url=login.php" />
    <?php
    exit();
}

$password = $_POST['password'];


$stmt = $con->prepare("SELECT id, email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($id, $db_email, $hashed_password);
$stmt->fetch();
$stmt->close();

if ($hashed_password && password_verify($password, $hashed_password)) {
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    header('location: products.php');
    exit();
} else {
    ?>
    <script>
        window.alert("Wrong username or password");
    </script>
    <meta http-equiv="refresh" content="1;url=login.php" />
    <?php
    exit();
}

?>