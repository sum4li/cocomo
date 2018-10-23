<div class="row">       
        <div class="col-lg-12 col-xs-12">
            <div class="box box-danger">
                <div class="box-body">
                    <i class="fa fa-5x fa-file-o fa-pull-left text-danger"></i><h3>Project Anda</h3>
                    <p class="text-justify text-muted">Berikut daftar project anda. Anda dapat menambahkan project dengan memilih tombol <strong>Tambah Project </strong> untuk menambahkan baru. </p>                                        
                    <a data-toggle="tooltip" title='Tambah Project' class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>dashboard/tambah"><i class="fa fa-plus"></i></a>                   
                    <a data-toggle="tooltip" title='Contoh data Aplikasi' class="btn btn-danger btn-sm" target="_blank" href="<?php echo base_url(); ?>assets/doc/contoh dokumen.pdf"><i class="fa fa-file-o"></i></a>                   
                    <br>
                    <br>
                    <?php                     
                    if($daftar_project->num_rows()>0){ //jika daftar project lebih dari 1 ?>                    
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Project</th>                                
                                <th>Function Point</th>
                                <th>Line of Code</th>
                                <th>Effort</th>
                                <th>Duration</th>
                                <th>Person</th>                                
                                <th>Biaya</th>                                
                                <th>Status</th>
                                <th>Aksi</th>                                
                            </tr>
                        </thead>
                        <tbody>
                    <?php $no=1;
                    foreach ($daftar_project->result() as $row) {
                        $status=$this->mproject->cekStatus($row->id_project);
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->nama_project; ?></td>
                                <td><?php echo round($row->fp,2); ?> FP</td>
                                <td><?php echo ceil($row->loc); ?> Baris</td>                                
                                <td><?php echo $row->effort; ?> PM</td>
                                <td><?php echo $row->duration; ?> Bulan</td>
                                <td><?php echo $row->person; ?> Orang</td>                                
                                <td>Rp. <?php echo number_format($biaya->detail_biaya($row->id_project),2,",","."); ?></td>                                
                                <td>
                                    <?php if($status==TRUE): ?>
                                    <a data-toggle="tooltip" title="Selesai" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                    <?php elseif($status==FALSE): ?>
                                    <a data-toggle="tooltip" title="Data Belum Lengkap" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" title="Riwayat Estimasi" href="<?php echo base_url(); ?>dashboard/history/<?php echo $row->id_project; ?>" class="btn btn-hitam btn-sm"><i class="fa fa-line-chart"></i></a>
                                    <a data-toggle="tooltip" title="Detail" href="<?php echo base_url();?>dashboard/detail/<?php echo $row->id_project; ?>" class="btn btn-sm btn-primary"><i class="fa fa-list"></i></a> 
                                    <a data-toggle="tooltip" title="Ubah" href="<?php echo base_url();?>dashboard/select/<?php echo $row->id_project; ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a> 
                                    <a data-toggle="tooltip" title="Unduh" href="<?php echo base_url();?>dashboard/print_hasil/<?php echo $row->id_project; ?>" class="btn btn-sm btn-warning"><i class="fa fa-download"></i></a>
                                    <a data-toggle="tooltip" title="Hapus" href="<?php echo base_url();?>dashboard/delete/<?php echo $row->id_project;?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                    <?php $no++;} ?>
                        </tbody>
                    </table>
                    <?php }?>
                </div>                                
            </div>            
        </div>
    </div>
