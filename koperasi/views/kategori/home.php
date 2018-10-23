<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            $label=array('No','Nama Kategori','Action');
            echo "<br>";
            echo "<br>";
            echo "<a href='".base_url()."index.php/kategori/create'>Tambah Kategori</a>";
            echo "<br>";
            echo "<table class='table table-bordered table-condensed'>";
            echo "<thead>";
            for($i=0;$i<count($label);$i++){
            echo "<th>".$label[$i]."</th>";
            }            
            echo "</thead>";
            echo "<tbody>";
            $no=1;
            foreach ($kategori->result() as $row){
            echo "<tr>";
            echo "<td>".$no."</td>";            
            echo "<td>".$row->kategori."</td>";                
            echo "<td>".anchor('kategori/update/'.$row->idKategori,'Edit')."|".anchor('kategori/delete/'.$row->idKategori,'Hapus',array('onClick'=>"return confirm('Apakah Anda Yakin Akan Menghapus Data?')"))."</td>";    
            echo "</tr>";
            $no++;
            }

            echo "</tbody>";
            echo "</table>";

            ?>            
        </div>
    </div>
</div>