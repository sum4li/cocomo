<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php            
            foreach ($anggota->result() as $row){                
                echo "<h1>".$row->nama."</h1><br>";
                echo "<h3>".$row->alamat."</h3>";
                echo "<h3>".$row->jabatan."</h3>";    
                echo "<p>".$row->status."</p>";                
                echo "</tr>";            
            }?>            
        </div>
    </div>
</div>