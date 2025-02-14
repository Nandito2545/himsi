<h3 class="mt-4">From profil</h3>
<hr>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtnamaperusahaan" class="form-control" type="text" placeholder="Masukkan nama perusahaan" />
                <label for="inputFirstName">Nama perusahaan</label>
            </div>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input name ="txttlp" class="form-control" type="text" placeholder="Masukkan no telepon" />
        <label>Telepon</label>
    </div>

    <div class="form-floating mb-3">
        <input name ="txtalamat" class="form-control" type="text" placeholder="Masukkan alamamt" />
        <label>Alamat</label>
    </div>

    <div class="form-floating mb-3">
        <input name ="txtnamapimpinan" class="form-control" type="text" placeholder="Masukkan nama" />
        <label>Nama pimpinan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtlogo" class="form-control" type="file" placeholder="Masukkan logo" />
        <label>Logo perusahaan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtvisi" class="form-control" type="text" placeholder="Masukkan visi" />
        <label>Visi</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtmisi" class="form-control" type="text" placeholder="Masukkan misi" />
        <label>misi</label>
    </div>
    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
        </div>
    </div>
    <?php
        if (@$_POST['simpan']){
            $nama1 = $_POST['txtnamaperusahaan'];
            $tlp = $_POST['txttlp'];
            $alamat = $_POST['txtalamat'];
            $nama2 = $_POST['txtnamapimpinan'];
            $logo = $_FILES['txtlogo']['name'];
            $tmp = $_FILES['txtlogo']['tmp_name'];
            $visi = $_POST['txtvisi'];
            $misi = $_POST['txtmisi'];
            mysqli_query($k, "INSERT INTO tbbiodata(nama_perusahaan,telepon,alamat,nama_pimpinan,logo_perusahaan,visi,misi)VALUES('$nama1','$tlp', '$alamat', '$nama2', '$logo','$visi','$misi')")or die(mysqli_eror($k).mysqli_errno($k));
            copy($tmp, "../img/$logo");

            echo"<script>alert('Data berhasil disimpan');location='.?hal=profil'</script>";
        }
    ?>
</form>