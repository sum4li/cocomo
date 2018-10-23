<!--<div class="container">-->
    <div class="row">
        <div class="col-lg-12">            
            <div class="box box-danger">
                <div class="box-body">
                    <h3>Tambah Project</h3>
                    <p class="text-muted">Masukan data yang diperlukan untuk menambahkan project.</p>                    
                <form method="post" action="">
                    <div class="form-group">
                        <label>Nama Project</label>
                        <input type="text" class="form-control" name="nama_project" required="">            
                    </div>            
                    <div class="form-group">
                        <label>Deskripsi Project</label>
                        <textarea name="project_description" class="form-control" required=""></textarea>
                    </div>            
                    
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" type="submit" name="create"> Simpan <i class="fa fa-check"></i></button>
                        <a class="btn btn-danger btn-sm" onclick="self.history.back()"> Batal <i class="fa fa-times"></i></a>
                    </div>
                </form>        
                    
                </div>
            </div>
        </div>
    </div>
<!--</div>-->
          
