<div class="container">
    <div class="row">
        <div class="col-lg-4">            
        <form method="post" action="">            
            <div class="form-group">
                <input type="text" class="form-control" name="nama" required="" placeholder="Nama Anggota">            
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="alamat" required="" placeholder="Alamat">            
            </div>
            <div class="form-group">
                <select name="jabatan" class="form-control text-capitalize">
                    <?php 
                        $label=array('anggota','pengawas','pengurus');
                        for($i=0;$i<count($label);$i++) {
                            echo "<option value='".$label[$i]."'>".$label[$i]."</option>";                            
                        }
                    ?>
                </select>
            </div>            
            <div class="form-group">
                <select name="id_pengganti" class="form-control text-capitalize">
                    <?php 
                        foreach ($anggota->result() as $row) {
                            echo "<option value='".$row->id_anggota."'>".$row->nama."</option>";                            
                        }
                    ?>
                </select>
            </div>            
            <div class="form-group">
                <button class="btn btn-default" name="create" type="submit">Simpan</button>
                <a href="<?php echo base_url() ?>admin/anggota" class="btn btn-default">Kembali</a>
            </div>
        </form>        
        </div>
    </div>
</div>
          
