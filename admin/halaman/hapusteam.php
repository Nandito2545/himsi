<?php
$id = $_GET['id'];
$sql = "DELETE FROM tb_team WHERE id_team = '$id'";
$q = mysqli_query($k, $sql);
echo"<script>alert('Data berhasil dihapus');location='.?hal=team'</script>";