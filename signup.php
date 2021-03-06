<?php

include 'php/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: homeline.php");
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (name, username, password, type)
                    VALUES ('$name', '$username', '$password', 3)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form method="POST">
            <div class="txt_field">
                <input type="text" name="name" value="<?php echo $name; ?>" required>
                <span></span>
                <label>Name</label>
            </div>
            <div class="txt_field">
                <input type="email" name="username" value="<?php echo $username; ?>" required>
                <span></span>
                <label>Email</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <button name="submit" class="btn">Sign Up</button>
            <div class="signup_link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>

</body>

</html>