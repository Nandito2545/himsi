<h3 class="mt-4">Galeri</h3>
<hr>
<a href=".?hal=tambahgaleri" class="btn btn-primary">Tambah data</a>
<div class="card-body">
    <table class="table table-stripet table-sm" id="datatablesSimple" widthe="100%" callspacing="0">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_galeri";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['judul_galeri']?></td>
                <td><?=$r['tanggal']?></td>
                <td>
                    <img src="../img/<?=$r['gambar']?>" alt="" width="70" height="70">
                </td>
                <td>
                    <a href=".?hal=ubahgaleri&id=<?=$r['id_galery']?>">ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href=".?hal=hapusgaleri&id=<?=$r['id_galery']?>">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>