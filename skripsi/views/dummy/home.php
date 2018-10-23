<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php            
            $label=array('No','Kelas','Anemia','Nyeri Haid Ketika Haid','Nyeri Haid Setelah Haid','Susah Hamil','Benjolan di perut','Pendarahan Abnormal','Pendarahan Tiba-Tiba','Nyeri Berhubungan Seksual','Cepat Lelah','Penurunan Berat Badan','Nyeri Panggul','Gangguan Cerna Sembelit','Gangguan Cerna Diare','Nyeri Rongga Perut','Nyeri Perut Bawah','Nyeri Perut Bawah dan Pinggul','Nyeri Punggung','Penurunan Nafsu Makan','Demam','Sakit Kepala','Kembung','Keputihan','Gangguan BAK Sering','Gangguan BAK Nyeri');
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
            foreach ($data_dummy->result() as $row){
            echo "<tr>";
            echo "<td>".$no."</td>";            
            echo "<td>".$row->kelas."</td>";
            echo "<td>".$row->anemia."</td>";
            echo "<td>".$row->nyeri_haid_ketika_haid."</td>";           
            echo "<td>".$row->nyeri_haid_setelah_haid."</td>";           
            echo "<td>".$row->susah_hamil."</td>";           
            echo "<td>".$row->benjolan_perut."</td>";           
            echo "<td>".$row->pendarahan_menstruasi_abnormal."</td>";           
            echo "<td>".$row->pendarahan_tiba_tiba."</td>";           
            echo "<td>".$row->nyeri_berhubungan_seksual."</td>";           
            echo "<td>".$row->cepat_lelah."</td>";           
            echo "<td>".$row->penurunan_berat_badan."</td>";           
            echo "<td>".$row->nyeri_panggul."</td>";           
            echo "<td>".$row->gangguan_pencernaan_sembelit."</td>";           
            echo "<td>".$row->gangguan_pencernaan_diare."</td>";           
            echo "<td>".$row->nyeri_perut_rongga_perut."</td>";           
            echo "<td>".$row->nyeri_perut_bagian_bawah."</td>";           
            echo "<td>".$row->nyeri_perut_bagian_bawah_dan_pinggul."</td>";           
            echo "<td>".$row->nyeri_punggung."</td>";           
            echo "<td>".$row->penurunan_nafsu_makan."</td>";           
            echo "<td>".$row->demam."</td>";           
            echo "<td>".$row->sakit_kepala."</td>";           
            echo "<td>".$row->kembung."</td>";           
            echo "<td>".$row->keputihan."</td>";           
            echo "<td>".$row->gangguan_bak_sering."</td>";           
            echo "<td>".$row->gangguan_bak_nyeri."</td>";           
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