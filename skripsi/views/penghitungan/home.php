<?php 
    $jenisKelamin=array("A1","A2");
    $fakultas=array("B1","B2","B3","B4","B5","B6","B7","B8","B9");
    $asalSma=array("C1","C2","C3","C4");
    $jalurMasuk=array("D1","D2","D3","D4","D5","D6");
    $gaji=array("E1","E2","E3","E4","E5","E6");
    $pekerjaan=array("F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12");
    $daftarNamaPredictor=array('jenisKelamin','fakultas','asalSma','jalurMasuk','gaji','pekerjaan');
    $daftarNamaPredictor1=array('Jenis Kelamin','Fakultas','Asal SMA','jalur Masuk','Gaji Orang Tua','Pekerjaan Orang Tua');
    $daftarPredictor=array($jenisKelamin,$fakultas,$asalSma,$jalurMasuk,$gaji,$pekerjaan);    
?>
<table class="table table-bordered">
    <thead>
        <th>Attribut</th>
        <th>Attribut</th>
        <th>Jumlah Kasus</th>
        <th colspan="3">Class</th>
        <th>Entrophy</th>
        <th>Gain</th>
    </thead>
    <thead>
        <th></th>
        <th></th>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>IPK</td>
            <td>IPK (A,B,C)</td>
            <td><?php echo $total; ?></td>
            <td><?php echo $A; ?></td>            
            <td><?php echo $B; ?></td>            
            <td><?php echo $C; ?></td>            
            <td><?php echo $Eipk; ?></td>            
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        <?php for($i=0;$i<count($daftarPredictor);$i++){
            for($j=0;$j<count($daftarPredictor[$i]);$j++){ ?>
            <tr>
                <td><?php echo $daftarNamaPredictor1[$i]; ?></td>
                <td><?php echo $daftarPredictor[$i][$j]; ?></td>                
                <td><?php echo ${$daftarPredictor[$i][$j]."A"}+${$daftarPredictor[$i][$j]."B"}+${$daftarPredictor[$i][$j]."C"}; ?></td>
                <td><?php echo ${$daftarPredictor[$i][$j]."A"}; ?></td>            
                <td><?php echo ${$daftarPredictor[$i][$j]."B"}; ?></td>            
                <td><?php echo ${$daftarPredictor[$i][$j]."C"}; ?></td>            
                <td><?php echo ${$daftarPredictor[$i][$j]."Entrophy"}; ?></td>            
                <td><?php echo ${$daftarNamaPredictor[$i]."GAIN"}; ?></td>            
                
            </tr>
            <?php } ?>
            <tr>
                <td colspan="8"></td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>
                     
