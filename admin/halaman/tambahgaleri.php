<h3 class="mt-4">Form galeri</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtjudull" class="form-control" type="text" placeholder="Masukkan judul" />
                <label for="inputFirstName">Judul</label>
            </div>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input name ="txttanggal" class="form-control" type="date"/>
        <label>Tanggal</label>
    </div>

    <div class="form-floating mb-3">
        <input name ="txtgambar" class="form-control" type="file"/>
        <label>Gambar</label>
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
            mysqli_query($k, "INSERT INTO tb_galeri(judul_galeri, tanggal, gambar)VALUES('$judul', '$tanggal', '$gambar')")or die(mysqli_eror($k).mysqli_errno($k));
            copy($tmp, "../img/$gambar");
            echo"<script>alert('Data berhasil disimpan');location='.?hal=galeri'</script>";
        }
    ?>
</form>