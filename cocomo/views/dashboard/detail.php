<div class="row">
    <div class="col-lg-12">            
        <!-- box pertama nama project -->
        <div class="box box-danger">
            <div class="box-body">
                <!--Untuk project beserta deskripsinya-->
                <h3 class="text-justify"><i class="fa fa-folder-o"></i> <?php echo $detail->row()->nama_project; ?>
<!--                <a data-toggle="tooltip" title="Ubah Deskripsi" class="btn btn-success btn-sm" href="<?php echo base_url();?>project/edit_project">
                    <i class="fa fa-pencil"></i>
                </a>    -->
                </h3>
                <p class="text-justify text-muted"><?php echo $detail->row()->project_description; ?></p>
            </div>
        </div>
        <!-- Box Kedua TDI -->
        <div class="box box-danger">            
            <div class="box-body">
                <!--jika tidak terdapat data TDI-->
                <?php if($tdi->num_rows()<1): ?>
                <h3 class="box-title"><i class="fa fa-list-alt"></i> Total Degree of Influence (TDI)
                        <a data-toggle="tooltip" title="Input TDI" class="btn btn-primary btn-sm" href="<?php echo base_url();?>project/cek_tdi">
                            <i class="fa fa-plus"></i>
                        </a>    
                    </h3>            
                    <p class="text-muted">
                        Belum ada data TDI. Input data TDI melalui tombol <strong>Input TDI</strong>. Anda harus mengisi 14 pertanyaan TDI untuk dapat melakukan Estimasi. 
                    </p>                    
                <?php else:?>                    
                <!--jika terdapat data TDI-->
                <h3 class="box-title"><i class="fa fa-list-alt"></i> Total Degree of Influence (TDI)</h3>            
                <table class="table table-bordered table-condensed">
                    <thead>
                        <?php 
                        //array kolom tabel
                        $kolom=array('No','Pertanyaan','Jawaban','Nilai'); 
                        //generate array pada kolom
                        for($i=0;$i<count($kolom);$i++){
                        ?>
                        <th><?php echo $kolom[$i]; ?></th>
                        <?php }?>
                    </thead>
                    <tbody>
                        <?php  
                         $no=1;
                            foreach ($tdi->result() as $row){
                            //inisialisasi gsc point
                            $point=$this->mtdi->pointDashboardTdi($row->id_gsc,$row->value)->row();                                            
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->gsc; ?></td>
                            <td><?php echo $point->point; ?></td>
                            <td><?php echo $row->value; ?></td>
<!--                            <td>
                                <a data-toggle="tooltip" title="Ubah" href="<?php echo base_url();?>project/tdi/<?php echo $row->id_gsc; ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                            </td>-->
                        </tr>
                            <?php $no++;}?>
                    </tbody>
                </table>
                <?php endif;?>    
            </div>
        </div>
        <!-- box ketiga untuk nilai Table -->
        <div class="box box-danger">
            <div class="box-body">
            <!-- tabel kedua untuk data table -->
                    <?php if($table->num_rows()<1): ?> 
                        <h3><i class="fa fa-list-alt"></i> Tabel dalam aplikasi
                        <a data-toggle="tooltip" title="Tambah Table" class="btn btn-primary btn-sm" href="<?php echo base_url();?>project/tambah_table">
                            <i class="fa fa-plus"></i>
                        </a>
                        </h3>
                        <p class="text-justify text-muted">
                            Belum ada data tabel dalam aplikasi. Tambahkan data tabel melalui tombol  <strong>Tambah Tabel</strong>. Tambahkan tabel untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu tabel sesuai dengan kebutuhan aplikasi yang anda perkirakan. 
                        </p>                        
                    <?php else :?> 
                <h3><i class="fa fa-list-alt"></i> Tabel dalam aplikasi</h3>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <?php $kolom=array('No','Nama','Tipe','Bahasa','DET','RET');  //array kolom tabel

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
<!--                            <td>
                                <a data-toggle="tooltip" title="Ubah Tabel" href="<?php echo base_url();?>project/edit_table/<?php echo $row->id_fp; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>                                    
                                <a data-toggle="tooltip" title="Hapus Tabel" href="<?php echo base_url();?>project/delete_table/<?php echo $row->id_fp;?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                            </td>-->
                        </tr>
                            <?php $no++;}?>
                    </tbody>
                </table>
                <?php endif; ?>    
            </div>
        </div>
        <!-- box keempat untuk nilai fungsi -->
        <div class="box box-danger">
            <div class="box-body">
            <!-- table ketiga untuk fungsi -->       
                    <?php if($fungsi->num_rows()<1): ?>
                        <h3><i class="fa fa-list-alt"></i> Fungsi dalam aplikasi
                        <a data-toggle="tooltip" title="Tambah Fungsi" class="btn btn-primary btn-sm" href="<?php echo base_url();?>project/tambah_fungsi">
                            <i class="fa fa-plus"></i>
                        </a>
                        </h3>
                        <p class="text-justify text-muted">
                            Belum ada data fungsi dalam aplikasi. Tambahkan data fungsi melalui tombol <strong>Tambah Fungsi</strong>. Tambahkan fungsi untuk menyelesaikan perhitungan. Anda dapat menambahkan lebih dari satu fungsi sesuai dengan kebutuhan aplikasi yang anda perkirakan. 
                        </p>                            
                    <?php else:?>
                    <h3><i class="fa fa-list-alt"></i> Fungsi dalam aplikasi</h3>
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <?php $kolom=array('No','Nama','Tipe','Bahasa','DET','FTR'); 

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
<!--                                <td>
                                    <a data-toggle="tooltip" title="Ubah Fungsi" href="<?php echo base_url();?>project/edit_fungsi/<?php echo $row->id_fp; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>                                    
                                    <a data-toggle="tooltip" title="Hapus Fungsi" href="<?php echo base_url();?>project/delete_fungsi/<?php echo $row->id_fp;?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                </td>-->
                            </tr>
                                <?php $no++;}?>
                        </tbody>
                    </table>
                    <?php endif; ?>        
            </div>
        </div>
        <!-- box kelima untuk nilai kompleksitas model cocomo -->
        <div class="box box-danger">
            <div class="box-body">
            <!-- table keempat untuk kompleksitas model -->
                        <?php if($model->num_rows()<1){ ?>
                        <h3><i class="fa fa-list-alt"></i> Kompleksitas Model aplikasi
                        <a data-toggle="tooltip" title="Pilih Model" class="btn btn-primary btn-sm" href="<?php echo base_url();?>project/model">
                            <i class="fa fa-plus"></i>
                        </a>
                        </h3>
                            <p class="text-justify text-muted">
                                Anda Belum Memilih model. Silahkan memilih model dengan menekan tombol <strong>pilih model</strong>.
                            </p>                                
                        <?php }?>
                    <?php
                        $keterangan=array(
                            'Organic'=>'Relatif kecil, proyek perangkat lunak sederhana di mana tim kecil dengan aplikasi yang baik pengalaman kerja untuk satu set kurang dari kebutuhan kaku.',
                            'Semi-detached'=>'Kelas menengah(dalam ukuran dan kompleksitas) proyek perangkat lunak di mana tim dengan tingkat pengalaman campuran harus memenuhi campuran kaku dan kurang dari kebutuhan kaku.',
                            'Embedded'=>'Sebuah proyek perangkat lunak yang harus dikembangkan dalam satu set perangkat keras yang ketat, software dan kendala operasional.'
                        );

                    if($model->num_rows()>0){ ?> 
                    <h3><i class="fa fa-list-alt"></i> Kompleksitas Model aplikasi</h3>
                    <h3 class="text-primary"><?php echo $model->row()->model; ?>
<!--                    <a data-toggle="tooltip" title="Ubah Model" href="<?php echo base_url(); ?>project/model" class="btn btn-sm btn-success">
                        <i class="fa fa-pencil"></i>
                    </a>-->
                    </h3>
                    <p class="text-muted"><?php echo $keterangan[$model->row()->model]; ?></p>
                    <?php } ?>   
   
            </div>
        </div>
        <!-- tombol untuk menghitung estimasi -->
        <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>dashboard"><i class="fa fa-arrow-left"></i> Kembali</a>        
    </div>
</div>
