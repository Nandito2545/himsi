<h3 class="mt-4">Data User</h3>
<hr>
<a href=".?hal=tambahuser" class="btn btn-primary">Tambah data</a>
<div class="card-body">
    <table class="table table-stripet table-sm" id="datatablesSimple" widthe="100%" callspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot> 
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Aksi</th>

            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_user";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['nama_user']?></td>
                <td><?=$r['telepon']?></td>
                <td><?=$r['username']?></td>
                <td><?=$r['alamat']?></td>
                <td>
                    <a href=".?hal=ubahuser&id=<?=$r['id_user']?>">ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href=".?hal=hapususer&id=<?=$r['id_user']?>">hapus</a>
                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
