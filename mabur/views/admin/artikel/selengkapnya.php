<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            foreach ($artikel->result() as $row){                
                echo "<h1>".$row->judul."</h1><br>";
                echo "<h3>".$row->tanggal."</h3>";
                echo "<h3>".$row->kategori."</h3>";    
                echo "<p>".$row->isi."</p>";                
                echo "</tr>";            
            }?>            
        </div>
    </div>
</div>