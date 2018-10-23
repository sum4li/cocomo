<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            $label=array('No','Nama Item','Hero','Rarity','Harga','Action');
            echo "<br>";
            echo "<br>";
            echo "<a href='".base_url()."index.php/item/create'>Tambah item</a>";
            echo "<br>";
            echo "<table class='table table-bordered table-condensed'>";
            echo "<thead>";
            for($i=0;$i<count($label);$i++){
            echo "<th>".$label[$i]."</th>";
            }            
            echo "</thead>";
            echo "<tbody>";
            $no=1;
            foreach ($item->result() as $row){
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row->namaItem."</td>";
            echo "<td>".$row->namaHero."</td>";
            echo "<td>".$row->rarity."</td>";
            echo "<td>".$row->harga."</td>";    
            echo "<td>".anchor('item/update/'.$row->idItem,'Edit')."|".anchor('item/delete/'.$row->idItem,'Hapus',array('onClick'=>"return confirm('Apakah Anda Yakin Akan Menghapus Data?')"))."</td>";    
            echo "</tr>";
            $no++;
            }

            echo "</tbody>";
            echo "</table>";

            ?>            
        </div>
    </div>
</div>