<h3 class="mt-4">kritik dan saran</h3>
<hr>
<div class="card-body">
    <table class="table table-stripet table-sm" id="datatablesSimple" widthe="100%" callspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Subjek</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Subjek</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_pesan";
            $q = mysqli_query($k,$sql);
            while ($r = mysqli_fetch_assoc($q)){

            ?>
            <tr>
                <td><?=$r['nama']?></td>
                <td><?=$r['subjek']?></td>
                <td><?=$r['email']?></td>
                <td><?=$r['pesan']?></td>
                <td><?=$r['tanggal']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>