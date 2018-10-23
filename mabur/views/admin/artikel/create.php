<div class="container">
    <div class="row">
        <div class="col-lg-4">            
        <form method="post" action="">
            <div class="form-group">
                <input type="text" class="form-control" name="judul" required="" placeholder="Judul">            
            </div>
            <div class="form-group">
                <select name="idKategori" class="form-control text-capitalize">
                    <?php 
                        foreach ($kategori->result() as $kategori) {
                            echo "<option value='".$kategori->idKategori."'>".$kategori->kategori."</option>";                            
                        }
                    ?>
                </select>
            </div> 
            <div class="form-group">
                <textarea type="number" class="form-control" name="isi" required=""></textarea>
            </div> 
            <div class="form-group">
                <button class="btn btn-default" name="create" type="submit">Simpan</button>
                <a href="<?php echo base_url() ?>admin/artikel" class="btn btn-default">Kembali</a>
            </div>
        </form>        
        </div>
    </div>
</div>
          
