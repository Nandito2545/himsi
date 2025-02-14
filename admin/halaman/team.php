<h3 class="mt-4">Data team</h3>
<hr>
<a href=".?hal=tambahteam" class="btn btn-primary">Tambah data</a>
<div class="card-body">
    <table class="table table-stripet table-sm" id="datatablesSimple" widthe="100%" callspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Jabatan</th>
                <th>tentang jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Jabatan</th>
                <th>tentang jabatan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_team";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['nama']?></td>
                <td><?=$r['telepon']?></td>
                <td><?=$r['alamat']?></td>
                <td>
                <img src="../img/<?=$r['foto_pegawai']?>" alt="" width="70" height="70">
                </td>
                <td><?=$r['jabatan']?></td>
                <td><?=$r['tentang_jabatan']?></td>
                <td>
                    <a href=".?hal=ubahteam&id=<?=$r['id_team']?>">ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href=".?hal=haputeam&id=<?=$r['id_team']?>">hapus</a>
                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
