<!--<div class="container">-->
    <div class="row"> 
        <div class="col-lg-12 col-sm-12">            
            <div class="box box-primary">
                <div class="box-body">
                    <h3>Tabel dalam aplikasi</h3>
                    <p class="text-justify text-muted">
                        <?php if($table->num_rows()<1): ?> 
                        Belum ada data tabel dalam aplikasi. Tambahkan data tabel melalui tombol <strong>Tambah Tabel</strong>. Tambahkan tabel untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu tabel sesuai dengan kebutuhan aplikasi yang anda perkirakan. 
                        <?php else: ?>
                        Anda telah menambahkan tabel. Anda dapat menambahkan lebih dari satu table sesuai dengan kebutuhan aplikasi yang anda perkirakan.
                        <?php endif; ?>
                    </p>
                    <?php if($table->num_rows()>0){ ?> 
                <table class="table table-bordered table-condensed">
                        <thead>
                            <?php $kolom=array('No','Nama','Tipe','Bahasa','Kolom','Relasi','Aksi'); 
                            
                            for($i=0;$i<count($kolom);$i++){
                            ?>
                            <th><?php echo $kolom[$i]; ?></th>
                            <?php }?>
                        </thead>
                        <tbody>
                            <?php  
                             $no=1;
                                foreach ($table->result() as $row){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->fp; ?></td>
                                <td><?php echo $row->tipe; ?></td>
                                <td><?php echo $row->bahasa; ?></td>
                                <td><?php echo $row->DET; ?></td>
                                <td><?php echo $row->RET; ?></td>                                
                                <!--<td><?php echo $row->weight; ?></td>-->                                
                                <td>
                                    <a data-toggle="tooltip" title="Ubah Tabel" href="<?php echo base_url();?>project/edit_table/<?php echo $row->id_fp; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>                                    
                                    <a data-toggle="tooltip" title="Hapus Tabel" href="<?php echo base_url();?>project/delete_table/<?php echo $row->id_fp;?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                </td>                                
                            </tr>
                                <?php $no++;}?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
                <div class="box-footer">
                    <a href="<?php echo base_url(); ?>project/tambah_table" class="btn btn-primary btn-sm">TAMBAH TABLE</a>    
                </div>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-12">            
            <div class="box box-success">
                <div class="box-body">
                    <h3>Fungsi dalam aplikasi</h3>
                    <p class="text-justify text-muted">
                        <?php if($fungsi->num_rows()<1){ ?>
                        Belum ada data fungsi dalam aplikasi. Tambahkan data fungsi melalui tombol Tambah Fungsi. Tambahkan fungsi untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu fungsi sesuai dengan kebutuhan aplikasi yang anda perkirakan. 
                        <?php }else{ ?>
                        Anda telah menambahkan fungsi. Anda dapat menambahkan lebih dari satu fungsional sesuai dengan kebutuhan aplikasi yang anda perkirakan. <?php }?>                        
                    </p>    
                    <?php if($fungsi->num_rows()>0){ ?> 
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <?php $kolom=array('No','Nama','Tipe','Bahasa','Data Field','Tabel','Aksi'); 
                            
                            for($i=0;$i<count($kolom);$i++){
                            ?>
                            <th><?php echo $kolom[$i]; ?></th>
                            <?php }?>
                        </thead>
                        <tbody>
                            <?php  
                             $no=1;
                                foreach ($fungsi->result() as $row){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->fp; ?></td>
                                <td><?php echo $row->tipe; ?></td>
                                <td><?php echo $row->bahasa; ?></td>
                                <td><?php echo $row->DET; ?></td>
                                <td><?php echo $row->FTR; ?></td>
                                <!--<td><?php echo $row->weight; ?></td>-->
                                <td>
                                    <a data-toggle="tooltip" title="Ubah Fungsi" href="<?php echo base_url();?>project/edit_fungsi/<?php echo $row->id_fp; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>                                    
                                    <a data-toggle="tooltip" title="Hapus Fungsi" href="<?php echo base_url();?>project/delete_fungsi/<?php echo $row->id_fp;?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                                <?php $no++;}?>
                        </tbody>
                    </table>
                    <?php } ?>    
                    
                </div>
                <div class="box-footer">
                    <a href="<?php echo base_url(); ?>project/tambah_fungsi" class="btn btn-success btn-sm">TAMBAH FUNGSI</a>    
                </div>
            </div>
        </div><!-- ./col -->
        
        <?php if($fungsi->num_rows()>0 && $table->num_rows()>0){ ?>
        <div class="col-lg-12">            
            <div class="box box-warning">
                <div class="box-body">
                    <h3>Langkah Berikutnya</h3>
                    <p class="text-justify text-muted">                        
                        Anda telah menambahkan setidaknya 1 table dan 1 fungsi untuk melengkapi proses penghitungan estimasi. Pilih kompleksitas sebagai langkah berikutnya untuk melakukan proses estimasi.
                    </p>    
                </div>    
                <div class="box-footer">
                    <a href="<?php echo base_url(); ?>project/model" class="btn btn-warning btn-sm">PILIH KOMPLEKSITAS</a>    
                </div>
            </div>
        </div><!-- ./col -->
        <?php } ?>
        
        
    </div>
<!--</div>-->