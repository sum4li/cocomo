
    <div class="row">
        <div class="col-lg-12">            
            <div class="box box-danger">
                <div class="box-body">                    
                    <h2 class="text-justify">Daftar Project</h2>
                    <p>Daftar project yang telah di estimasi</p>
                    </p>                    
                    <br>
                    <table class="table table-bordered table-condensed" id="dataTables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Project</th>
                                <th>Deskripsi</th>
                                <th>Deskripsi</th>                                
                            </tr>
                        </thead>
                        <tbody>
                    <?php $no=1; foreach ($daftar_project->result() as $row) { ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->nama_project; ?></td>
                                <td><?php echo $row->project_description; ?></td>
                                <td>
                                    <a data-toggle="tooltip" title="Detail" href="<?php echo base_url();?>dashboard/detail_project/<?php echo $row->id_project; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a> 
                                    <a data-toggle="tooltip" title="Download" href="<?php echo base_url();?>dashboard/print_hasil/<?php echo $row->id_project; ?>" class="btn btn-primary"><i class="fa fa-download"></i></a>
                                    <a data-toggle="tooltip" title="Delete" href="<?php echo base_url();?>dashboard/delete/<?php echo $row->id_project;?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                    <?php $no++;} ?>
                        </tbody>
                    </table>
                </div>
            </div>                                
        </div>
    </div>
