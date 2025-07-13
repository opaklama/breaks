<?php include('includes/header.php'); include('config/db.php'); ?>

<h2>Daftar Akun</h2>
<form action="" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="register">Daftar</button>
</form>

<?php
if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Berhasil daftar. Silakan login!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<?php include('includes/footer.php'); ?>
