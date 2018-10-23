<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<h2>SELAMAT DATANG</h2>
<?php echo $this->session->userdata('namaLengkap'); ?>
<a href="<?php echo base_url()."administrator/logout"; ?>">Logout</a>