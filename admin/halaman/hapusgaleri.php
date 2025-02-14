<?php
$id = $_GET['id'];
$sql = "DELETE FROM tb_galeri WHERE id_galery = '$id'";
$q = mysqli_query($k, $sql);
echo"<script>alert('Data berhasil dihapus');location='.?hal=galeri'</script>";