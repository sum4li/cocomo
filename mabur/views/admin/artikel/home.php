<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            $label=array('No','Judul','Kategori','Isi','Tanggal','Action');
            echo "<br>";
            echo "<br>";
            echo "<a href='".base_url()."admin/artikel/create'>Tambah item</a>";
            echo "<br>";
            echo "<table class='table table-bordered table-condensed'>";
            echo "<thead>";
            for($i=0;$i<count($label);$i++){
            echo "<th>".$label[$i]."</th>";
            }            
            echo "</thead>";
            echo "<tbody>";
            $no=1;
            foreach ($artikel->result() as $row){
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".anchor('admin/artikel/'.implode("-",  preg_split("/[\s,-]+/",$row->judul)),$row->judul)."</td>";
            echo "<td>".$row->kategori."</td>";    
            echo "<td>".word_limiter($row->isi,2)."</td>";
            echo "<td>".$row->tanggal."</td>";
            echo "<td>".anchor('admin/artikel/update/'.$row->idArtikel,'Edit')."|".anchor('admin/artikel/delete/'.$row->idArtikel,'Hapus',array('onClick'=>"return confirm('Apakah Anda Yakin Akan Menghapus Data?')"))."</td>";    
            echo "</tr>";
            $no++;
            }

            echo "</tbody>";
            echo "</table>";

            ?>            
        </div>
    </div>
</div>