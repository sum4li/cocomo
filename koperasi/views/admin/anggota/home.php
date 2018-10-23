<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            $label=array('Id Anggota','nama','alamat','jabatan','status','Action');
            echo "<br>";
            echo "<br>";
            echo "<a href='".base_url()."admin/anggota/create'>Tambah item</a>";
            echo "<br>";
            echo "<table class='table table-bordered table-condensed'>";
            echo "<thead>";
            for($i=0;$i<count($label);$i++){
            echo "<th>".$label[$i]."</th>";
            }            
            echo "</thead>";
            echo "<tbody>";
            
            foreach ($anggota->result() as $row){
            echo "<tr>";
            echo "<td>".$row->id_anggota."</td>";
            echo "<td>".anchor('admin/anggota/'.implode("-",  preg_split("/[\s,-]+/",$row->nama)),$row->nama)."</td>";
            echo "<td>".$row->alamat."</td>";                
            echo "<td>".$row->jabatan."</td>";
            echo "<td>".$row->status."</td>";                
            echo "<td>".anchor('admin/anggota/update/'.$row->id_anggota,'Edit')."|".anchor('admin/anggota/delete/'.$row->id_anggota,'Hapus',array('onClick'=>"return confirm('Apakah Anda Yakin Akan Menghapus Data?')"))."</td>";    
            echo "</tr>";
            
            }

            echo "</tbody>";
            echo "</table>";

            ?>            
        </div>
    </div>
</div>