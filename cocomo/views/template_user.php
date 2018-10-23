<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tgl_sekarang = date("Y-m-d", $tanggal);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="icon" sizes="192x192" href="<?php echo base_url(); ?>assets/img/ccm.png">
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/checkbox.css" rel="stylesheet" type="text/css" />
        
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-red">
        
                <section class="content">
                    <?php
                        $this->load->view($content);
                    ?>
                </section><!-- /.content -->
   
          
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- data tables Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- InputMask -->        
        <script src="<?php echo base_url(); ?>assets/js/plugins/input-mask/jquery.inputmask.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
        

        <script>
            $(document).ready( function () {  
                
                //notification
                $('#notifications').fadeIn('slow').delay(2000).fadeOut(5000);
                //input mask untuk biaya
                $('.uang').inputmask("numeric", {
                    radixPoint: ",",
                    groupSeparator: ".",
                    removeMaskOnSubmit: true,
                    digits: 2,
                    autoGroup: true,
                    placeholder: '',
                    prefix: '', //Space after $, this will not truncate the first character.
                    rightAlign: false,
                    oncleared: function () { self.Value(''); }
                });
                //input mask untuk persen laba
                $('.persen').inputmask("numeric", {
                    radixPoint: ",",
                    groupSeparator: ".",
                    removeMaskOnSubmit: true,
                    digits: 2,
                    autoGroup: true,
                    placeholder: '',
                    prefix: '', //Space after $, this will not truncate the first character.
                    rightAlign: false,
                    oncleared: function () { self.Value(''); }
                });
                
                //bootstrap tooltip
                $('[data-toggle="tooltip"]').tooltip();
                //bootstarp data table
                $('#dataTables').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            } );            
            
        </script>
        
    </body>
</html>