<?php
$id = $_GET['id'];
$sql = "DELETE FROM portfolio WHERE id_portfolio = '$id'";
$q = mysqli_query($k, $sql);
echo"<script>alert('Data berhasil dihapus');location='.?hal=portfolio'</script>";