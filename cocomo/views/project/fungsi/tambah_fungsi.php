
    <div class="row">
        <div class="col-lg-12">            
            <div class="box box-success">
                <div class="box-body">                    
                    <h3 class="text-justify">Tambah Fungsional</h3>
                    <p class="text-muted">Tambah Fungsional Aplikasi</p>
                    </p>                    
                    <br>
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nama Fungsi</label>
                            <input type="text" class="form-control" name="fp" required="" autofocus="">            
                        </div>
                        <div class="form-group">
                            <label>Jenis Fungsi</label>
                            <select name="tipe" class="form-control" required>
                                <option value="EI">EI -- External Input - Input from user to change Table (ILF)</option>
                                <option value="EO">EO -- External Output - Output from System</option>
                                <option value="EQ">EQ -- External Inquiries - Input from user that change output </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bahasa Pemrogaman</label>
                            <select name="bahasa" class="form-control" required="">
                                <option value="PHP">PHP</option>
                                <option value="HTML">HTML</option>
                                <option value="Javascript">Javascript</option>
                            </select>                            
                        </div>
                        <div class="form-group">
                            <label>Tombol dan Data atau Masukan</label>
                            <input type="number" class="form-control" name="DET" required="">            
                        </div>
                        <div class="form-group">
                            <label>Tabel Yang Digunakan</label>
                            <input type="number" class="form-control" name="FTR" required="">            
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
