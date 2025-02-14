<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbbiodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k, $sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">From profil</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtnamaperusahaan" value="<?=$r['nama_perusahaan']?>" class="form-control" type="text" placeholder="Masukkan nama perusahaan" />
                <label for="inputFirstName">Nama perusahaan</label>
            </div>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input name ="txttlp" value="<?=$r['telepon']?>" class="form-control" type="text" placeholder="Masukkan no telepon" />
        <label>Telepon</label>
    </div>

    <div class="form-floating mb-3">
        <input name ="txtalamat" value="<?=$r['alamat']?>" class="form-control" type="text" placeholder="Masukkan alamamt" />
        <label>Alamat</label>
    </div>

    <div class="form-floating mb-3">
        <input name ="txtnamapimpinan" value="<?=$r['nama_pimpinan']?>" class="form-control" type="text" placeholder="Masukkan alamamt" />
        <label>Nama pimpinan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtlogo" class="form-control" type="file" placeholder="Masukkan logo" />
        <img src="../img/<?=$r['logo_perusahaan']?>" alt="" width="100" height="100">
        <label>Logo perusahaan</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtvisi" value="<?=$r['visi']?>" class="form-control" type="text" placeholder="Masukkan visi" />
        <label>Visi</label>
    </div>
    <div class="form-floating mb-3">
        <input name ="txtmisi" value="<?=$r['misi']?>" class="form-control" type="text" placeholder="Masukkan misi" />
        <label>Misi</label>
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

            if(empty($logo)){
                mysqli_query($k, "UPDATE tbbiodata SET nama_perusahaan = '$nama1',telepon = '$tlp',alamat = '$alamat',nama_pimpinan = '$nama2', visi ='$visi', misi ='$misi' WHERE id_biodata='$id'")or die(mysqli_eror($k).mysqli_errno($k));
            }else{
                mysqli_query($k, "UPDATE tbbiodata SET nama_perusahaan = '$nama1',telepon = '$tlp',alamat = '$alamat',nama_pimpinan = '$nama2',logo_perusahaan = '$logo', visi='$visi', misi = '$misi' WHERE id_biodata='$id'");
                copy($tmp, "../img/$logo");
            }
            echo"<script>alert('Data berhasil disimpan');location='.?hal=profil'</script>";
        }
    ?>
</form>