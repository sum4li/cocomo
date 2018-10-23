<!--<div class="container">-->
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-danger">
                <div class="box-body">                    
                    <h3>Total Degree of Influence (TDI)</h3>
                    <p class="text-justify text-muted">                        
                        Anda telah memilih nilai TDI.Untuk selanjutnya silahkan pilih tombol <strong>input fungsi</strong>. Untuk mengganti pilihan silahkan pilih tombol <strong>ubah</strong> di kolom paling kanan.
                    </p>
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <?php $kolom=array('No','Pertanyaan','Jawaban','Nilai','Aksi'); 

                            for($i=0;$i<count($kolom);$i++){
                            ?>
                            <th><?php echo $kolom[$i]; ?></th>
                            <?php }?>
                        </thead>
                        <tbody>
                            <?php  
                             $no=1;
                                foreach ($tdi->result() as $row){
                                    $point=$this->mtdi->pointDashboardTdi($row->id_gsc,$row->value)->row();                                            
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->gsc; ?></td>
                                <td><?php echo $point->point; ?></td>
                                <td><?php echo $row->value; ?></td>
                                <td>
                                    <a data-toggle="tooltip" title="Ubah" href="<?php echo base_url();?>project/tdi/<?php echo $row->id_gsc; ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                </td>

                            </tr>
                                <?php $no++;}?>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="form-group-sm">                                            
                        <a href="<?php echo base_url(); ?>project/fungsi" class="btn btn-danger btn-sm">INPUT FUNGSI</a>
                    </div>                        
                </div>
            </div>      
            </form>
        </div>
    </div>
<!--</div>-->
          
