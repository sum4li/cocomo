<?php
    $judul=$gsc->row()->gsc;
    $keterangan=$gsc->row()->deskripsi;        

    $row=$tdi->row_array();
    $valueTdi=-1;
    if($row['value'] >= 0){            
        $valueTdi=$row['value'];        
    }    
   
    
?>
<!--<div class="container">-->
    <div class="row">
        <div class="col-lg-12">
            <?php echo $this->session->flashdata('tdi'); ?>
            <div class="box box-danger">
                <div class="box-body">                    
                    <h3><?php echo $judul; ?> <small>( Pertanyaan <?php echo $gsc->row()->id_gsc; ?> dari 14 )</small> </h3>
                    <p class="text-justify text-muted"><?php echo $keterangan; ?></p>
                    
                    
                    <form method="post" action="">
                        <input type="hidden" name="id_gsc" value="<?php echo $gsc->row()->id_gsc; ?>" required>
                    <?php         
                    foreach($gscpoint->result() as $row){ ?>                    
                        <!--<div class="form-group">-->
                            <div class="radio radio-danger">
                                <input type="radio" class="tdi" id="radio<?php echo $row->value; ?>" name="value" value="<?php echo $row->value; ?>" <?php if($row->value==$valueTdi){echo "checked";} ?> required>
                                <label for="radio<?php echo $row->value; ?>">
                                    <?php echo $row->point; ?>                        
                                </label>                                
                            </div>
                        <!--</div>-->
                    <?php } ?>
                </div>
                <div class="box-footer">
                    <div class="form-group-sm">                                            
                            <button class="btn btn-success btn-sm pull-right" type="submit" name="submit"> NEXT <i class="fa fa-arrow-right"></i></button>
                        <?php if($page>1){ ?>
                            <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>project/tdi/<?php echo $gsc->row()->id_gsc-1;?>"><i class="fa fa-arrow-left"></i> PREV</a>
                        <?php }else{?>
                            <a class="btn btn-danger btn-sm disabled" readonly><i class="fa fa-arrow-left"></i> PREV</a>                        
                        <?php }?>
                    </div>                        
                </div>
            </div>      
            </form>
        </div>
    </div>
<!--</div>-->
          
