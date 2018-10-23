<!--<div class="container">-->
    <div class="row">
        <div class="col-lg-12">      
            <?php echo $this->session->flashdata('fungsi'); ?>
            <div class="box box-success">
                <div class="box-body">
                    <h3>Fungsi dalam aplikasi</h3>
                    <p class="text-justify text-muted">
                        <?php if($fungsi->num_rows()<1){ ?>
                        Belum ada data fungsi dalam aplikasi. Tambahkan data fungsi melalui tombol <strong>Tambah Fungsi</strong>. Tambahkan fungsi untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu fungsi sesuai dengan kebutuhan aplikasi yang anda perkirakan. 
                        <?php }else{ ?>
                        Anda Belum menambahkan fungsi. Tambahkan fungsi untuk melengkapi proses perkiraan. Anda dapat menambahkan lebih dari satu fungsional sesuai dengan kebutuhan aplikasi yang anda perkirakan. <?php }?>                        
                    </p>    
                    <?php if($fungsi->num_rows()>0){ ?> 
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <?php $kolom=array('No','Nama','Tipe','Bahasa','DET','FTR','weight','Aksi'); 
                            
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
                                <td><?php echo $row->weight; ?></td>
                                <td>
                                    <a data-toggle="tooltip" title="Ubah Fungsi" href="<?php echo base_url();?>project/edit_fungsi/<?php echo $row->id_fp; ?>" class="btn btn-success btn-sm">UBAH</a>                                    
                                    <a data-toggle="tooltip" title="Hapus Fungsi" href="<?php echo base_url();?>project/delete_fungsi/<?php echo $row->id_fp;?>" class="btn btn-danger btn-sm">HAPUS</a>
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
        
        
    </div>
<!--</div>-->