
    <div class="row">
        <div class="col-lg-6">            
            <div class="box box-danger">
                <div class="box-body">                    
                    <h3 class="text-justify">Hitung Biaya</h3>
                    <p class="text-muted">Tambah Estimasi Biaya untuk aplikasi yang akan dibangun</p>                                       
                    <br>
                    <form method="post" action="">                        
                        <label>BBB</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input id="uang" type="text" class="form-control uang" name="bbb" required="" autofocus="">                                        
                            <span class="input-group-addon">,00</span>
                        </div>                            
                        <label>BTK</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input type="text" class="form-control uang" name="btk" required="">                                        
                            <span class="input-group-addon">,00</span>
                        </div>                            
                        <label>BOP</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input id="uang" type="text" class="form-control uang" name="bop" required="">                                        
                            <span class="input-group-addon">,00</span>
                        </div>
                        <label>LABA</label>
                        <div class="input-group">
                            <input type="text" class="form-control persen" name="laba" required="">            
                            <span class="input-group-addon">%</span>
                        </div>
                </div>
                <div class="box-footer">
                    <div class="form-group-sm">                                            
                        <button class="btn btn-primary btn-sm " type="submit" name="submit"> HITUNG <i class="fa fa-check"></i></button>                        
                        <a class="btn btn-danger btn-sm" onclick="self.history.back()"> BATAL <i class="fa fa-times"></i></a>                        
                    </div>                        
                </div>
            </div>      
            </form>
        </div>
    </div>
