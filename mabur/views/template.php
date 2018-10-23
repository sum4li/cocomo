<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo $title; ?></title>

    <!--icon-->
    <link href="<?php echo base_url();?>assets/img/brand.png" rel="shortcut icon">
    <!--Bootstrap--> 
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">            
    <link href="<?php echo base_url();?>assets/css/jquery.jqzoom.css" rel="stylesheet">            
    <!--icon-->    
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">    
    <!--costumize css-->    
    <link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet">
    <script src='<?php echo base_url();?>assets/js/jquery-1.8.3.min.js'></script>
    <!--zoom js-->
    <script src='<?php echo base_url();?>assets/js/jquery.elevatezoom.js'></script>    
    <!--dataTables-->
    <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
    
  </head>
  <body>
      
   <?php
//   include 'menu.php';
   $this->load->view($content);   
//   include 'footer.php';
//   include 'sizingInfo.php';
   ?>    
   
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!--<script src="js/jquery.min.js"></script>-->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!--dataTables-->
    <!--<script src="js/jquery.dataTables.min.js"></script>-->
    <!--<script src="js/dataTables.bootstrap.js"></script>-->
    <!--<script src="js/jquery-1.6.js"></script>-->
    <!--<script src="js/jquery.jqzoom-core.js"></script>-->
    <!--<script src="js/dataTables.bootstrap.js"></script>-->
    
    <script>
        $(document).ready(function() {
           $('#homeBanner').carousel({
		interval:  5000,
                pause: false
            });
        });
    </script>
  <script>
    //initiate the plugin and pass the id of the div containing gallery images 
    $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
    //pass the images to Fancybox 
    $("#zoom_03").bind("click", function(e) { 
        var ez = $('#zoom_03').data('elevateZoom');	
        $.fancybox(ez.getGalleryList()); 
        return false; });
  </script>
    
    <script>
    $(document).ready(function() {
			$('#dataTables').dataTable({
//                            "paging":   true,
//                            "ordering": false,
//                            "info":     false,
//                            "length": false,
//                            "searching": false
                            "dom": '<"top"lf>rt<"bottom"p><"clear">'
                        });

                        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    
    } );
    
    </script>
    
  </body>
</html>