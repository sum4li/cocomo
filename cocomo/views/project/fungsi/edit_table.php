
    <div class="row">
        <div class="col-lg-12">            
            <div class="box box-primary">
                <div class="box-body">                    
                    <h2 class="text-justify">Ubah Table</h2>
                    <p>Ubah Table Aplikasi</p>
                    </p>                                       
                    <br>
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nama Table</label>
                            <input type="text" value="<?php echo $edit->row()->fp; ?>" class="form-control" name="fp" required="" autofocus="">            
                        </div>
                        <div class="form-group">
                            <label>Jenis Table</label>
                            <select name="tipe" class="form-control" required>
                                <option value="ILF" <?php if($edit->row()->tipe=='ILF'){echo 'selected';}?>>ILF -- Internal Logical File - Table maintain by System</option>
                                <option value="EIF" <?php if($edit->row()->tipe=='EIF'){echo 'selected';}?>>EIF -- External Interfaces File - Table maintain by External System</option>                                
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label>Kolom Table</label>
                            <input type="number" value="<?php echo $edit->row()->DET; ?>" class="form-control" name="DET" required="">            
                        </div>
                        <div class="form-group">
                            <label>Relasi Table</label>
                            <input type="number" value="<?php echo $edit->row()->RET; ?>" class="form-control" name="RET" required="">            
                        </div>
                        
                    
                </div>
                <div class="box-footer">
                    <div class="form-group-sm">                                            
                        <button class="btn btn-primary btn-sm " type="submit" name="submit"> SIMPAN <i class="fa fa-check"></i></button>                        
                            <a class="btn btn-danger btn-sm" onclick="self.history.back()"> BATAL <i class="fa fa-times"></i></a>                        
                    </div>                        
                </div>
            </div>      
            </form>             
        </div>
    </div>
