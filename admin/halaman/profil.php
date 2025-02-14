<h3 class="mt-4">Profil</h3>
<hr>
<a href=".?hal=tambahprofil" class="btn btn-primary">Tambah data</a>
<div class="card-body">
    <table class="table table-stripet table-sm" id="datatablesSimple" widthe="100%" callspacing="0">
        <thead>
            <tr>
                <th>Nama Perusahaan</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Nama Pimpinan</th>
                <th>Logo Perusahaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nama Perusahaan</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Nama Pimpinan</th>
                <th>Logo Perusahaan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbbiodata";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['nama_perusahaan']?></td>
                <td><?=$r['telepon']?></td>
                <td><?=$r['alamat']?></td>
                <td><?=$r['nama_pimpinan']?></td>
                <td>
                    <img src="../img/<?=$r['logo_perusahaan']?>" alt="" width="70" height="70">
                </td>
                <td>
                    <a href=".?hal=ubahprofil&id=<?=$r['id_biodata']?>">ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href=".?hal=hapusprofil&id=<?=$r['id_biodata']?>">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>