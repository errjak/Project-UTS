<?php
$conn = mysqli_connect("localhost", "root", "", "tblproduct");
$id = $_GET["id"];
$resultset = mysqli_query($conn,"DELETE FROM addproduct where id_product = $id");
$hasil = mysqli_affected_rows($conn);
if ($hasil > 0) {
    echo header('Location:index2.php');
} else {
    echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dihapus');
        </script>";
}
?>