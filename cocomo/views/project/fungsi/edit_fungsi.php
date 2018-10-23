
    <div class="row">
        <div class="col-lg-12">            
            <div class="box box-success">
                <div class="box-body">                    
                    <h2 class="text-justify">Ubah Fungsional</h2>
                    <p>Ubah Fungsional Aplikasi</p>
                    </p>                    
                    <br>
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nama Fungsi</label>
                            <input type="text" value="<?php echo $fungsi->row()->fp; ?>" class="form-control" name="fp" required="" autofocus="">            
                        </div>
                        <div class="form-group">
                            <label>Jenis Fungsi</label>
                            <select name="tipe" class="form-control" required>
                                <option value="EI" <?php if($fungsi->row()->tipe=='EI'){echo 'selected';}?>>EI -- External Input - Input from user to change Table (ILF)</option>
                                <option value="EO" <?php if($fungsi->row()->tipe=='EO'){echo 'selected';}?>>EO -- External Output - Output from System</option>
                                <option value="EQ" <?php if($fungsi->row()->tipe=='EQ'){echo 'selected';}?>>EQ -- External Inquiries - Input from user that change output </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bahasa Pemrogaman</label>
                            <select name="bahasa" class="form-control" required="">
                                <option value="PHP" <?php if($fungsi->row()->bahasa=='PHP'){echo 'selected';}?>>PHP</option>
                                <option value="HTML" <?php if($fungsi->row()->bahasa=='HTML'){echo 'selected';}?>>HTML</option>
                                <option value="Javascript" <?php if($fungsi->row()->bahasa=='Javascript'){echo 'selected';}?>>Javascript</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label>Tombol dan Data atau Masukan</label>
                            <input type="number" value="<?php echo $fungsi->row()->DET; ?>" class="form-control" name="DET" required="">            
                        </div>
                        <div class="form-group">
                            <label>Tabel Yang Digunakan</label>
                            <input type="number" value="<?php echo $fungsi->row()->FTR; ?>" class="form-control" name="FTR" required="">            
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
