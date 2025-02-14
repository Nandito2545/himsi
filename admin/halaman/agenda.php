<h3 class="mt-4">Agenda</h3>
<hr>
<a href=".?hal=tambahagenda" class="btn btn-primary">Tambah data</a>
<div class="card-body">
    <table class="table table-stripet table-sm" id="datatablesSimple" widthe="100%" callspacing="0">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_agenda";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['judul_agenda']?></td>
                <td><?=$r['tanggal']?></td>
                <td><?=$r['konten_agenda']?></td>
                <td>
                    <a href=".?hal=ubahagenda&id=<?=$r['id_agenda']?>">ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href=".?hal=hapusagenda&id=<?=$r['id_agenda']?>">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>