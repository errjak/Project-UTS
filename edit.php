<?php
$conn = mysqli_connect("localhost", "root", "", "tblproduct");

$id = $_GET["id"];
$resultset = mysqli_query($conn, "SELECT * FROM addproduct where id_product = $id");
$res = mysqli_fetch_assoc($resultset);
$result = $res;

if (isset($_POST["submit"])) {
    $name_product = $_POST["name_product"];
    $code_product = $_POST["code_product"];
    $quantity = $_POST["quantity"];
    $unit_price = $_POST["unit_price"];
    $insert = mysqli_query($conn, "UPDATE addproduct SET name_product='$name_product', code_product='$code_product', quantity='$quantity',unit_price='$unit_price' where id_product=$id");
    $hasil = mysqli_affected_rows($conn);
    if ($hasil > 0) {
        echo header('Location:index2.php');
    } else {
        echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dirubah');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Update Data Baru</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index3.php">Home</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>

                            <!-- General Form Elements -->
                            <form method="post" action="">
                                <input type="hidden" value="<?php echo $result['id_product']; ?>">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="name_product" value="<?php echo $result["name_product"]; ?>" required>
                                            <option selected>Pilih Produk</option>
                                            <option value="HyperX Gaming Mouse">HyperX Gaming Mouse</option>
                                            <option value="Razer Gaming Mouse">Razer Gaming Mouse</option>
                                            <option value="Logitech Gaming Mouse">Logitech Gaming Mouse</option>
                                            <option value="Rexus Gaming Mouse">Rexus Gaming Mouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="code_product" value="<?php echo $result["code_product"]; ?>" required>
                                            <option selected>Pilih Code</option>
                                            <option value="HGM1201">HGM1201</option>
                                            <option value="RGM1202">RGM1202</option>
                                            <option value="LGM1203">LGM1203</option>
                                            <option value="ReGM1204">ReGM1204</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="quantity" placeholder="Masukkan Quantity" value="<?php echo $result['quantity']; ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Unit Price</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="unit_price" value="<?php echo $resullt["unit_price"]; ?>" required>
                                            <option selected>Pilih Harga</option>
                                            <option value="$849.00">$849.00</option>
                                            <option value="$745.00">$745.00</option>
                                            <option value="$986.00">$986.00</option>
                                            <option value="$345.00">$345.00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <br></br>
                                        <button type="submit" name="submit" class="btn btn-success">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>