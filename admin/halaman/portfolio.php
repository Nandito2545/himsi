<h3 class="mt-4">Portfolio</h3>
<hr>
<a href=".?hal=tambahportfolio" class="btn btn-primary">Tambah data</a>
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
            $sql = "SELECT * FROM portfolio";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['judul']?></td>
                <td><?=$r['tanggal']?></td>
                <td>
                    <img src="../img/<?=$r['gambar']?>" alt="" width="70" height="70">
                </td>
                <td>
                    <a href=".?hal=ubahportfolio&id=<?=$r['id_portfolio']?>">ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href=".?hal=hapusportfolio&id=<?=$r['id_portfolio']?>">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>