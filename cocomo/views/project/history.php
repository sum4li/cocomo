    <div class="row">       
        <div class="col-lg-12 col-xs-12">
            <div class="box box-danger">
                <div class="box-body">
                    <h3>Riwayat Perubahan Hasil Perhitungan " Project <?php echo $project['nama_project']; ?> "</h3>
                    <p class="text-justify text-muted">Perubahan yang telah anda lakukan </p>                                                                                                   
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>                                
                                <th>Function Point</th>
                                <th>Line of Code</th>
                                <th>Effort</th>
                                <th>Duration</th>
                                <th>Person</th>                                
                            </tr>
                        </thead>
                        <tbody>
                    <?php $no=1; 
                    foreach ($history->result() as $row) { ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->update_date; ?></td>                                
                                <td><?php echo round($row->fp,2); ?></td>
                                <td><?php echo ceil($row->loc); ?></td>
                                <td><?php echo $row->effort; ?></td>
                                <td><?php echo $row->duration; ?></td>
                                <td><?php echo $row->person; ?></td>                                
<!--                                <td><?php echo ceil($row->effort); ?></td>
                                <td><?php echo ceil($row->duration); ?></td>
                                <td><?php echo ceil($row->person); ?></td>                                -->
                            </tr>
                    <?php $no++;} ?>
                        </tbody>
                    </table>                    
                </div>                                
            </div> 
            <a class="btn btn-danger btn-sm" onclick="self.history.back()"> 
                <i class="fa fa-arrow-left"></i> Kembali
            </a>                        
        </div>
    </div>
