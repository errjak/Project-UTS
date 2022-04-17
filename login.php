<?php
session_start();
require 'function.php';

//cek cookie
if (isset($_COOKIE['id_user']) && isset($_COOKIE['fsdhks'])) {
    $id = $_COOKIE['id_user'];
    $key = $_COOKIE['fsdhks'];

    $getId = mysqli_query($conn, "SELECT email FROM user WHERE id_user = $id_user");
    $data = mysqli_fetch_assoc($getId);

    if ($key === hash('gost-crypto', $data['email'])) {
        $_SESSION['login'] = true;
    }
}

//cek session
if (isset($_SESSION['login'])) {
    header("Location; index.php");
    exit;
}

//cek login
if (isset($_POST["login"])) {

    $id_user = $_POST["id_user"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    //cek email
    if (mysqli_num_rows($check) === 1) {

        $result = mysqli_fetch_assoc($check);
        if (password_verify($pass, $result["password"])) {

            // set session
            $_SESSION["login"] = true;
            setcookie('id_user', $result['id_user'], strtotime("+1 week"));


            //set cookie
            if (isset($_POST["remember"])) {
                setcookie('fsdhks', hash('gost-crypto', $result['email']), strtotime("+1 week"));
            }

            header("Location: index.php");
            exit;
        }
    }

    $loginFail = true;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="section-sub-title">Login</h3>
                    <h2 class="section-title mb-3">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 mb-5">
                    <form name="myForm" action="" method="post" onsubmit="return validasi()" class="p-5 bg-white">
                        <h2 class="h4 text-black mb-5">Halaman Login</h2>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="password">Password</label>

                                <input type="password" id="password" name="password" class="form-control">
                                <div id="toggle-pass" onclick="showPass()"></div>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">*) Email : admin@gmail.com</br>Password : admin123</label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Login" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                        <!-- AKHIR EMAIL -->
                        <?php if (isset($loginFail)) : ?>
                            <div class="warning">Email atau Password Salah!</div>
                        <?php endif; ?>


                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>