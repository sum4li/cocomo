
    <div class="row">
        <div class="col-lg-4">
            <div class="box box-primary">
                <div class="box-body">                    
                    <h3>Function Point</h3>
                    <p class="text-justify text-muted">Hasil perhitungan ukuran aplikasi yang akan anda buat dalam Function Point (FP).</p>
                    <h3 class="text-primary">
                    <?php echo $fp; ?> Point
                    </h3>
                </div>                
            </div>                  
        </div>
        <div class="col-lg-4">
            <div class="box box-success">
                <div class="box-body">                    
                    <h3>LOC</h3>
                    <p class="text-justify text-muted">Hasil perkiraan ukuran aplikasi yang akan anda buat dalam Line of Code (LOC)</p>
                    <h3 class="text-success">
                    <?php echo ceil($loc); ?> Baris
                    </h3>
                    
                    
                </div>                
            </div>                  
        </div>
        <div class="col-lg-4">
            <div class="box box-warning">
                <div class="box-body">                    
                    <h3>Effort</h3>
                    <p class="text-justify text-muted">Hasil perkiraan effort dari aplikasi yang akan anda buat<br><br></p>
                    <h3 class="text-warning">
                    <?php echo $e; ?> PM (Person-Month)
                    </h3>
                    
                    
                </div>                
            </div>                  
        </div>
        <div class="col-lg-4">
            <div class="box box-danger">
                <div class="box-body">                    
                    <h3>Duration</h3>
                    <p class="text-justify text-muted">Hasil perkiraan jumlah hari yang diperlukan untuk membangun aplikasi anda</p>
                    <h3 class="text-danger">
                    <?php //echo ceil($d*30); ?>
                    <?php echo $d; ?> Bulan
                    </h3>
                    
                    
                </div>                
            </div>                  
        </div>
        <div class="col-lg-4">
            <div class="box box-primary">
                <div class="box-body">                    
                    <h3>Person</h3>
                    <p class="text-justify text-muted">Hasil perkiraan jumlah orang yang diperlukan untuk membangun aplikasi anda</p>
                    <h3 class="text-primary">
                    <?php echo $p; ?> Orang
                    </h3>    
                </div>                
            </div>                  
        </div>
        <div class="col-lg-12">
            <br>
            <br>
            <br>
        </div>
        
        <div class="col-lg-12" id="form-biaya">
            <div class="box box-danger abu-abu">
                <div class="box-body">                    
                    <h3>Biaya</h3>
                    
                    <p>Ini adalah fitur tambahan yang berguna untuk menghitung estimasi biaya menggunakan metode <strong><em>Job Order Costing</em></strong>.</p> 
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr class="text-center">                                
                                <th>Keterangan</th>                        
                                <th>Select</th>                        
                            </tr>                    
                        </thead>
                        <tbody>                                                
                            <tr>                                
                                <td>
                                    Jika anda mempunyai metode tersendiri untuk menghitung biaya, anda bisa melewati fitur ini.
                                </td>                                                                        
                                <td class="text-center">
                                    <a id="tombol-hilang" data-toggle="tooltip" title="Lewati" class="btn btn-sm btn-danger">Lewati <i class="fa fa-times"></i></a>                                                            
                                </td>          
                            </tr>                                
                            <tr>                                
                                <td>
                                    Jika anda ingin melakukan perhitungan estimasi biaya menggunakan metode ini, silah pilih tombol hitung.
                                </td>                                                                        
                                <td class="text-center">
                                    <a data-toggle="tooltip" title="Hitung Biaya" href="<?php echo base_url(); ?>project/biaya" class="btn btn-sm btn-primary">Hitung <i class="fa fa-calculator"></i></a>
                                </td>          
                            </tr>                                
                        </tbody>
                    </table> 
                    <br>
                    <p>
                        BBB : <?php echo number_format($biaya['bbb'],2,",","."); ?>
                    </p>
                    <p>
                        BTK : <?php echo number_format($biaya['btk'],2,",","."); ?>
                    </p>
                    <p>
                        BOP : <?php echo number_format($biaya['bop'],2,",","."); ?>
                    </p>
                    <p>
                        LABA : <?php echo $biaya['laba']; ?> %
                    </p>
                    <h3 class="text-primary">
                    Rp. <?php echo number_format($biaya['biaya'],2,",","."); ?>
                    </h3>
                </div>                
            </div>                  
        </div>
        <div class="col-lg-12">
            <h1>
                <!--<a data-toggle="tooltip" title="Hitung Biaya" href="<?php echo base_url(); ?>project/biaya" class="btn btn-primary"><i class="fa fa-calculator"></i></a>-->
                
                <a data-toggle="tooltip" title="Simpan Project" href="<?php echo base_url(); ?>project/simpan" class="btn btn-primary">Simpan <i class="fa fa-save"></i></a>                
            </h1>
        </div>
    </div>
<!--</div>-->
          
