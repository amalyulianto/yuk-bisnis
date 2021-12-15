<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('php/config.php');
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/auth.css">
    <?php include('./header.php'); ?>
    <?php
    if (isset($_SESSION['login_id']))
        header("location:homeline.php?page=home");

    ?>

</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form id="login-form">
            <div class="txt_field">
                <input type="email" name="username" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <!-- <div class="txt_field">
                <label for="username" class="control-label">Email</label>
                <input type="email" id="username" name="username" class="form-control">
            </div> -->
            <!-- <div class="txt_field">
                <label for="password" class="control-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div> -->
            <button name="submit" class="btn">Login</button>
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>


    </div>

    <!-- <main id="main" class=" bg-dark">
        <div id="login-left">
        </div>

        <div id="login-right">
            <div class="card col-md-8">
                <div class="card-body">

                    <form id="login-form">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
                    </form>
                </div>
            </div>
        </div>


    </main>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->


</body>
<script>
    $('#login-form').submit(function(e) {
        e.preventDefault()
        $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
        if ($(this).find('.alert-danger').length > 0)
            $(this).find('.alert-danger').remove();
        $.ajax({
            url: 'ajax.php?action=login',
            method: 'POST',
            data: $(this).serialize(),
            error: err => {
                console.log(err)
                $('#login-form button[type="button"]').removeAttr('disabled').html('Login');

            },
            success: function(resp) {
                if (resp == 1) {
                    location.href = 'homeline.php?page=home';
                } else {
                    $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
                    $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
                }
            }
        })
    })
</script>

</html>