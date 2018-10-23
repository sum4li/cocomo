<?php

if(!empty($model->row()->model)){
        $valueModel=$model->row()->model;        
    }else{
        $valueModel='';
    }

?>

<div class="row">
    <div class="col-lg-12">
        <?php echo $this->session->flashdata('model'); ?>
        <div class="box box-danger">
            <div class="box-body">
                <h3>Kompleksitas Proyek</h3>
                <p class="text-justify text-muted">                        
                    Anda harus memilih model cocomo dari aplikasi yang akan anda bangun. Silahkan plih salah satu dari ketiga opsi dibawah.
                </p>
                <form method="post" action="">
            <?php 
                $question=array('Organic',
                    'Semi-detached',
                    'Embedded'                
                    ); 
                $keterangan=array(
                    'Relatif kecil, proyek perangkat lunak sederhana di mana tim kecil dengan aplikasi yang baik pengalaman kerja untuk satu set kurang dari kebutuhan kaku.',
                    'Kelas menengah(dalam ukuran dan kompleksitas) proyek perangkat lunak di mana tim dengan tingkat pengalaman campuran harus memenuhi campuran kaku dan kurang dari kebutuhan kaku.',
                    'Sebuah proyek perangkat lunak yang harus dikembangkan dalam satu set perangkat keras yang ketat, software dan kendala operasional.'
                );
            ?>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Model</th>                        
                    <th>Keterangan</th>                        
                    <th>Select</th>                        
                </tr>                    
            </thead>
            <tbody>                    
                <?php
                for($i=0;$i<count($question);$i++) {?>
                <tr>                        
                    <td class="text-center"><?php echo $i+1; ?></td>                                                
                    <td><strong><?php echo $question[$i]; ?></strong></td>                                                
                    <td><?php echo $keterangan[$i]; ?></td>                                                                        
                    <td class="text-center">    
                        <div class="radio radio-danger">
                            <input class="model" id="radio<?php echo $i; ?>" type="radio" name="model" value="<?php echo $question[$i]?>" <?php if($question[$i]==$valueModel){echo "checked";} ?> required>
                            <label for="radio<?php echo $i; ?>">
                        </label>                                
                        </div>    
                    </td>          
                </tr>    
                <?php } ?>
            </tbody>
        </table> 
            </div>
            <div class="box-footer">
                <div class="form-group-sm">
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Simpan <i class="fa fa-check"></i> </button>
                    <a class="btn btn-danger btn-sm" onclick="self.history.back()">Batal <i class="fa fa-times"></i></a>
                </div>    
            </div>
        </div>

        </form>
    </div>
</div>

          
