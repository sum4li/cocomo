<div class="container">
    <div class="row">
        <div class="col-lg-4">            
        <form method="post" action="">
            <div class="form-group">
                <input type="text" class="form-control" name="kategori" value="<?php echo $kategori; ?>" required="" placeholder="Nama Kategori">            
            </div>            
            <div class="form-group">
                <button class="btn btn-default" name="update" type="submit">Simpan</button>
                <a href="<?php echo base_url() ?>index.php/kategori" class="btn btn-default">Kembali</a>
            </div>
        </form>        
        </div>
    </div>
</div>
          
