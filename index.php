<?php
$conn = mysqli_connect("localhost", "root", "", "tblproduct");
@include 'function.php';


error_reporting(0);

session_start();
if (isset($_SESSION['email'])) {
    header("location:index3.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("location:index3.php");
    } else {
        echo "<script>alert('email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
                    <h3 class="section-sub-title">Our Service</h3>
                    <a href="index4.php" h3 class="section-sub-title">Home</h3>
                    <h2 class="section-title mb-3">Login</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 mb-5">
                    <form name="myForm" action="" method="post" class="p-5 bg-white">
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
                                <input type="submit" name="submit" value="submit" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>