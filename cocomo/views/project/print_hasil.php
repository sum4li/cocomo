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
        <!-- bootstrap 3.0.2 -->
        <!--<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url(); ?>assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
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
        <!-- header logo: style can be found in header.less -->
        
                

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <section class="content">
<!--<div class="container">-->
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color:red;">Hasil Estimasi</h1>            
            <h3><small>COCOMO by Pitra</small></h3>
            <hr>    
            <br>
        </div>
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default visible-print">
                
                <div class="panel-body">
                    <table class="table">
                        <?php 
                        foreach ($project->result() as $row)
                        { ?>
                        <tr>
                            <td>Nama Project</td>
                            <td>:</td>
                            <td><?php echo $row->nama_project; ?></td>                            
                        </tr>
                        <tr>
                            <td>Deskripsi Project</td>
                            <td>:</td>
                            <td><?php echo $row->project_description; ?></td>                            
                        </tr>
<!--                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php //echo substr($row->tanggal,8,2)."-".substr($row->tanggal,5,2)."-".substr($row->tanggal,0,4); ?></td>                            
                        </tr>-->
                        <tr>
                            <td>Function Point</td>
                            <td>:</td>
                            <td><?php echo round($row->fp,2); ?> Point</td>                            
                        </tr>
                        <tr>
                            <td>Line of code</td>
                            <td>:</td>
                            <td><?php echo ceil($row->loc); ?> Baris</td>                            
                        </tr>
                        <tr>
                            <td>Effort</td>
                            <td>:</td>
                            <td><?php echo $row->effort; ?> PM</td>                            
                        </tr>
                        <tr>
                            <td>Duration</td>
                            <td>:</td>
                            <td><?php echo $row->duration; ?> Bulan</td>                            
                        </tr>
                        <tr>
                            <td>Person</td>
                            <td>:</td>
                            <td><?php echo $row->person; ?> Orang</td>                            
                        </tr>
                        <tr>
                            <td>Biaya</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($row->biaya,2,",","."); ?></td>                            
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>        
    </div>
<!--</div>-->
                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>


