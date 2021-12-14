<?php
include 'php/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: homeline.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: homeline.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
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
        <h1>Login</h1>
        <form method="POST">
            <?php echo $_SESSION['error'] ?>
            <div class="txt_field">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <button name="submit" class="btn">Login</button>
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>


    </div>

</body>

</html>