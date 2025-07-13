<?php include('includes/header.php'); include('config/db.php'); ?>

<h2>Login</h2>
<form action="" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        echo "<script>window.location='dashboard.php';</script>";
    } else {
        echo "<p>Username atau Password salah!</p>";
    }
}
?>

<?php include('includes/footer.php'); ?>
