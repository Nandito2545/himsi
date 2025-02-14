<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_team WHERE id_team = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form team</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtnama" value="<?=$r['nama']?>" class="form-control" type="text" placeholder="Masukkan nama" />
                <label for="inputFirstName">Nama</label>
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttlp" value="<?=$r['telepon']?>" class="form-control" type="text" placeholder="Masukkan telepon" />
        <label>telepon</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtalamat" value="<?=$r['alamat']?>" class="form-control" type="text" placeholder="Masukkan alamat" />
        <label>Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtgambar" class="form-control" type="file"/>
        <img src="../gambar/<?=$r['foto_pegawai']?>" alt="" width="100" height="100">
        <label>Gambar</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttgl" value="<?=$r['tanggal_lahir']?>" class="form-control" type="date"/>
        <label>Tanggal lahir</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtjbtn" value="<?=$r['jabatan']?>" class="form-control" type="text" placeholder="Masukkan jabatan" />
        <label>Jabatan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtemail" value="<?=$r['email_pegawai']?>" class="form-control" type="text" placeholder="Masukkan email" />
        <label>Email pegawai</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txttntg" value="<?=$r['tentang_jabatan']?>" class="form-control" type="text" placeholder="tentang jabatan" />
        <label>tentang jabatan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtig" value="<?=$r['instagram']?>" class="form-control" type="text" placeholder="Masukkan instagram" />
        <label>instagram</label>
    </div>
    
    <div class="form-floating mb-3">
        <input name ="txtfb" value="<?=$r['facebook']?>" class="form-control" type="text" placeholder="Masukkan no facebook" />
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

            if (empty($gambar)){
                mysqli_query($k, "UPDATE tb_team SET nama='$nama',telepon='$tlp',alamat='$alamat',tanggal_lahir='$tgl',jabatan='$jabatan',email_pegawai='$email',tentang_jabatan='$tntg',instagram='$ig',facebook='$fb' WHERE id_team='$id'");
            }else{
                mysqli_query($k, "UPDATE tb_team SET nama='$nama',telepon='$tlp',alamat='$alamat',foto_pegawai='$gambar',tanggal_lahir='$tgl',jabatan='$jabatan',email_pegawai='$email',tentang_jabatan='$tntg',instagram='$ig',facebook='$fb' WHERE id_team='$id'");
                copy($tmp, "../img/$gambar");
            }
            echo"<script>alert('Data berhasil disimpan');location='.?hal=team'</script>";
        }
    ?>
</form>