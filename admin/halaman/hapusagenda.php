<?php
$id= $_GET['id'];
$sql = "DELETE FROM tb_agenda WHERE id_agenda = '$id'";
$q = mysqli_query($k, $sql);
echo"<script>alert('Data berhasil dihapus');location='.?hal=agenda'</script>";