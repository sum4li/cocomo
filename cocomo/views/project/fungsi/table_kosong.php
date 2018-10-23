<!--<div class="container">-->
    <div class="row"> 
        <div class="col-lg-12">       
            <?php echo $this->session->flashdata('table'); ?>
            <div class="box box-primary">
                <div class="box-body">
                    <h3>Tabel dalam aplikasi</h3>
                    <p class="text-justify text-muted">
                        <?php if($table->num_rows()<1): ?> 
                        Belum ada data tabel dalam aplikasi. Tambahkan data tabel melalui tombol <strong>Tambah Tabel</strong>. Tambahkan tabel untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu tabel sesuai dengan kebutuhan aplikasi yang anda perkirakan. 
                        <?php else: ?>
                        Anda belum menambahkan table. Tambahkan table untuk melengkapi proses perkiraan. Anda dapat menambahkan lebih dari satu table sesuai dengan kebutuhan aplikasi yang anda perkirakan.
                        <?php endif; ?>
                    </p>
                    <?php if($table->num_rows()>0){ ?> 
                <table class="table table-bordered table-condensed" id="dataTables">
                        <thead>
                            <?php $kolom=array('No','Nama','Tipe','Bahasa','DET','RET','weight','Aksi'); 
                            
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
                                <td><?php echo $row->weight; ?></td>                                
                                <td>
                                    <a data-toggle="tooltip" title="Ubah Tabel" href="<?php echo base_url();?>project/edit_table/<?php echo $row->id_fp; ?>" class="btn btn-success btn-sm">UBAH</a>                                    
                                    <a data-toggle="tooltip" title="Hapus Tabel" href="<?php echo base_url();?>project/delete_table/<?php echo $row->id_fp;?>" class="btn btn-danger btn-sm">HAPUS</a>
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
        
        
    </div>
<!--</div>-->