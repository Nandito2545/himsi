<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM portfolio WHERE id_portfolio = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form portfolio</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtjudull" value="<?=$r['judul']?>" class="form-control" type="text" placeholder="Masukkan judul" />
                <label for="inputFirstName">Judul</label>
            </div>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input name ="txttanggal" value="<?=$r['tanggal']?>" class="form-control" type="date"/>
        <label>Tanggal</label>
    </div>

    <div class="form-floating mb-3">
        <input name ="txtgambar"  class="form-control" type="file"/>
        <img src="../img/<?=$r['gambar']?>" alt="" width="100" height="100">
        <label>Gambar</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttentang" value="<?=$r['tentang_portfolio']?>" class="form-control" type="text"/>
        <label>Tentang</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtlink" value="<?=$r['link']?>" class="form-control" type="text"/>
        <label>Link </label>
    </div>
    


    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
        </div>
    </div>
    <?php
        if (@$_POST['simpan']){
            $judul = $_POST['txtjudull'];
            $tanggal =$_POST['txttanggal'];
            $gambar = $_FILES['txtgambar']['name'];
            $tmp = $_FILES['txtgambar']['tmp_name'];
            $tntg = $_POST['txttentang'];
            $link = $_POST['txtlink'];
            if (empty($gambar)) {
                mysqli_query($k, "UPDATE portfolio SET judul ='$judul', tanggal='$tanggal', tentang_portfolio='$tntg', link='$link' WHERE id_portfolio='$id'")or die(mysqli_eror($k).mysqli_errno($k));
            }else{
                mysqli_query($k, "UPDATE portfolio SET judul ='$judul', tanggal='$tanggal', gambar='$gambar', tentang_portfolio='$tntg', link='$link' WHERE id_portfolio='$id'");
                copy($tmp, "../img/$gambar");
            }
            
            echo"<script>alert('Data berhasil disimpan');location='.?hal=portfolio'</script>";
        }
    ?>
</form>