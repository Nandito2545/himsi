<h3 class="mt-4">Form team</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtnama" class="form-control" type="text" placeholder="Masukkan nama" />
                <label for="inputFirstName">Nama</label>
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttlp" class="form-control" type="text" placeholder="Masukkan telepon" />
        <label>telepon</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtalamat" class="form-control" type="text" placeholder="Masukkan alamat" />
        <label>Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtgambar" class="form-control" type="file"/>
        <label>Gambar</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttgl" class="form-control" type="date"/>
        <label>Tanggal lahir</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtjbtn" class="form-control" type="text" placeholder="Masukkan jabatan" />
        <label>Jabatan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtemail" class="form-control" type="text" placeholder="Masukkan email" />
        <label>Email pegawai</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttntg" class="form-control" type="text" placeholder="tentang jabatan" />
        <label>tentang jabatan</label>
    </div>
    
    <div class="form-floating mb-3">
        <input name ="txtig" class="form-control" type="text" placeholder="Masukkan instagram" />
        <label>instagram</label>
    </div>
    
    <div class="form-floating mb-3">
        <input name ="txtfb" class="form-control" type="text" placeholder="Masukkan no facebook" />
        <label>facebook</label>
    </div>

    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
        </div>
    </div>
    <?php
        if (@$_POST['simpan']){
            $nama = $_POST['txtnama'];
            $tlp = $_POST['txttlp'];
            $alamat = $_POST['txtalamat'];
            $gambar = $_FILES['txtgambar']['name'];
            $tmp = $_FILES['txtgambar']['tmp_name'];
            $tgl = $_POST['txttgl'];
            $jabatan = $_POST['txtjbtn'];
            $email = $_POST['txtemail'];
            $tntg = $_POST['txttntg'];
            $ig =$_POST['txtig'];
            $fb = $_POST['txtfb'];
            mysqli_query($k, "INSERT INTO tb_team(nama, telepon, alamat, foto_pegawai, tanggal_lahir, jabatan, email_pegawai, tentang_jabatan, instagram, facebook) VALUES ('$nama', '$tlp','$alamat','$gambar', '$tgl', '$jabatan', '$email', '$tntg','$ig','$fb')")or die(mysqli_eror($k).mysqli_errno($k));
            copy($tmp, "../img/$gambar");
            echo"<script>alert('Data berhasil disimpan');location='.?hal=team'</script>";
        }
    ?>
</form>