<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Rangking</th>
                <th>Kode A</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo 'A'.$row->no_peserta ;?></td>
            <td><?php echo $row->nama ;?></td>
            <td><?php echo $row->nilai_wp ;?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>