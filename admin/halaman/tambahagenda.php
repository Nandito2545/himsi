<h3 class="mt-4">Form Agenda</h3>
<hr>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-floating mb-3 mb-md-0">
                <input  name ="txtjudul" class="form-control" type="text" placeholder="Masukkan judul" />
                <label for="inputFirstName">Judul</label>
            </div>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input name ="txttgl" class="form-control" type="date"/>
        <label>Tanggal</label>
    </div>

    <div class="form-floating mb-3">
        <textarea name="txtkonten" id="" cols="30" rows="10" class="form-control"></textarea>
        <label>Konten</label>
    </div>
    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
        </div>
    </div>
    <?php
        if (@$_POST['simpan']){
            $judul = $_POST['txtjudul'];
            $tgl = $_POST['txttgl'];
            $konten = $_POST['txtkonten'];
            $iduser = "1";

            mysqli_query($k, "INSERT INTO tb_agenda(judul_agenda, tanggal, konten_agenda, id_user)VALUES('$judul','$tgl','$konten','$iduser')")or die(mysqli_eror($k).mysqli_errno($k));
            echo"<script>alert('Data berhasil disimpan');location='.?hal=agenda'</script>";
        }
    ?>
</form>