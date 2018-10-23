<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php            
            $label=array('No','Kelas','Anemia','Nyeri Haid','Susah Hamil','Benjolan di perut','pendarahan','Nyeri Berhubungan Seksual','Cepat Lelah','Penurunan Berat Badan','Nyeri Panggul','Gangguan Cerna','Nyeri Perut','Nyeri Punggung','Penurunan Nafsu Makan','Demam','Sakit Kepala','Kembung','Keputihan','Gangguan BAK');
            echo "<br>";
            echo "<br>";
            echo "<a href='".base_url()."index.php/hero/create'>Tambah item</a>";
            echo "<br>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered table-condensed' id='dataTables'>";
            echo "<thead>";
            for($i=0;$i<count($label);$i++){
            echo "<th>".$label[$i]."</th>";
            }            
            echo "</thead>";
            echo "<tbody>";
            $no=1;
            foreach ($data_awal->result() as $row){
            echo "<tr>";
            echo "<td>".$no."</td>";            
            echo "<td>".$row->kelas."</td>";
            echo "<td>".$row->anemia."</td>";
            echo "<td>".$row->nyeri_haid."</td>";           
            echo "<td>".$row->susah_hamil."</td>";           
            echo "<td>".$row->benjolan_perut."</td>";           
            echo "<td>".$row->pendarahan."</td>";           
            echo "<td>".$row->nyeri_berhubungan_seksual."</td>";           
            echo "<td>".$row->cepat_lelah."</td>";           
            echo "<td>".$row->penurunan_berat_badan."</td>";           
            echo "<td>".$row->nyeri_panggul."</td>";           
            echo "<td>".$row->gangguan_pencernaan."</td>";           
            echo "<td>".$row->nyeri_perut."</td>";           
            echo "<td>".$row->nyeri_punggung."</td>";           
            echo "<td>".$row->penurunan_nafsu_makan."</td>";           
            echo "<td>".$row->demam."</td>";           
            echo "<td>".$row->sakit_kepala."</td>";           
            echo "<td>".$row->kembung."</td>";           
            echo "<td>".$row->keputihan."</td>";           
            echo "<td>".$row->gangguan_bak."</td>";           
            //echo "<td>".anchor('hero/update/'.$row->idHero,'Edit')."|".anchor('hero/delete/'.$row->idHero,'Hapus',array('onClick'=>"return confirm('Apakah Anda Yakin Akan Menghapus Data?')"))."</td>";    
            echo "</tr>";
            $no++;
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            ?>            
        </div>
    </div>
</div>