<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            $label=array('No','Icon Hero','Nama Hero','Attibut','Story','Action');
            echo "<br>";
            echo "<br>";
            echo "<a href='".base_url()."index.php/hero/create'>Tambah item</a>";
            echo "<br>";
            echo "<table class='table table-bordered table-condensed'>";
            echo "<thead>";
            for($i=0;$i<count($label);$i++){
            echo "<th>".$label[$i]."</th>";
            }            
            echo "</thead>";
            echo "<tbody>";
            $no=1;
            foreach ($hero->result() as $row){
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td><img src='".base_url()."assets/img/icon/".$row->iconHero."'></td>";
            echo "<td>".$row->namaHero."</td>";
            echo "<td>".$row->attributHero."</td>";
            echo "<td>".$row->storyHero."</td>";    
            echo "<td>".anchor('hero/update/'.$row->idHero,'Edit')."|".anchor('hero/delete/'.$row->idHero,'Hapus',array('onClick'=>"return confirm('Apakah Anda Yakin Akan Menghapus Data?')"))."</td>";    
            echo "</tr>";
            $no++;
            }

            echo "</tbody>";
            echo "</table>";

            ?>            
        </div>
    </div>
</div>