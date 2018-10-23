<div class="container">
    <div class="row">
        <div class="col-lg-4">            
        <form method="post" action="">
            <div class="form-group">
                <input type="text" class="form-control" name="namaItem" value="<?php echo $namaItem; ?>" required="" placeholder="Item Name">            
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>" required="" placeholder="Harga">            
            </div>
            <div class="form-group">
                <select name="rarity" class="form-control text-capitalize">
                    <?php $rarity=  array('arcana','immortal','legendary','mythical','rare','uncommon','common');
                        for($i=0;$i<count($rarity);$i++) {                                                   
                        if($rarity[$i]==$rarityItem){
                            $selected= "selected='elected'"; 
                        }else{
                            $selected= "";                                                         
                        }
                            echo "<option value='".$rarity[$i]."' $selected>".$rarity[$i]."</option>";                                                        
                        }
                    ?>
                </select>
            </div> 
            <div class="form-group">
                <select name="idHero" class="form-control text-capitalize">
                    <?php 
                        foreach ($hero->result() as $hero) {
                            if($hero->idHero==$idHero){
                                $selected="selected='elected'";
                            }else{
                                $selected="";
                            }
                            echo "<option value='".$hero->idHero."' $selected>".$hero->namaHero."</option>";                            
                        }
                    ?>
                </select>
            </div> 
            <div class="form-group">
                <button class="btn btn-default" name="update" type="submit">Simpan</button>
                <a href="<?php echo base_url() ?>index.php/item" class="btn btn-default">Kembali</a>
            </div>
        </form>        
        </div>
    </div>
</div>
          
