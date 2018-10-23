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
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a class="logo">
                COCOMO
            </a>           
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle hidden-lg hidden-md" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php if(isset($_SESSION['id_project'])){ ?>
                <div class="navbar-left">
                    <ul class="nav navbar-nav">                                                
                        <li class="">                        
                            <a data-toggle="tooltip" data-placement="bottom" title="Nama Project">
                            <strong>                                    
                                <?php echo $this->session->nama_project; ?>    
                            </strong>
                            </a>
                        </li>
<!--                        <li class="">                        
                            <a data-toggle="tooltip" data-placement="bottom" title="Simpan Project" href="<?php echo base_url(); ?>project/simpan">
                                <i class="fa fa-save"></i>
                            </a>
                        </li>-->
                    </ul>                                       
                </div>
                <?php } ?>
                <?php if(isset($_SESSION['id_user'])){ ?>
                
                    
                
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li>
                            <a data-toggle="tooltip" data-placement="bottom" title="Email User">                                
                                <?php echo $this->session->email; ?>
                            </a>                            
                        </li>
                        <li>
                            <a data-toggle="tooltip" data-placement="bottom" title="Keluar" class="fa fa-power-off" href="<?php echo base_url(); ?>user/logout"></a>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </nav>
        </header>
                <?php if(isset($_SESSION['id_user'])){ ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li <?php if($this->uri->segment(1)=='dashboard' || $this->uri->segment(2)=='overview_project'){echo "class='active'"; }?>>
                            <a href="<?php echo base_url(); ?>dashboard">
                                <span><i class="fa fa-home fa-fw"></i> Dashboard</span>
                            </a>
                        </li>
                        <?php if(isset($_SESSION['id_project'])){ ?>
                        <li <?php if($this->uri->segment(2)=='tdi'){echo "class='active'"; }?>>
                            <a href="<?php echo base_url(); ?>project/cek_tdi">                                
                                <span><i class="fa fa-list-alt fa-fw"></i> TDI</span>                                
                            </a>                            
                        </li>
                        <?php } ?>
                        <?php if(isset($_SESSION['id_project'])){ ?>
                        <li <?php if($this->uri->segment(2)=='fungsi' || $this->uri->segment(2)=='tambah_fungsi' || $this->uri->segment(2)=='tambah_table' ){echo "class='active'"; }?>>
                            <a href="<?php echo base_url(); ?>project/fungsi">
                                <span><i class="fa fa-list-alt fa-fw"></i> Fungsional</span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(isset($_SESSION['id_project'])){ ?>
                        <li <?php if($this->uri->segment(2)=='model'){echo "class='active'"; }?>>
                            <a href="<?php echo base_url(); ?>project/model">                                
                                <i class="fa fa-list-alt fa-fw"></i> Kompleksitas 
                            </a>                            
                        </li>                        
                        <?php } ?>
                        <?php if(isset($_SESSION['id_project'])){ ?>
                        <li <?php if($this->uri->segment(2)=='hitung'){echo "class='active'"; }?>>
                            <a href="<?php echo base_url(); ?>project/hitung">                                
                                <i class="fa fa-calculator fa-fw"></i> Hitung Estimasi
                            </a>                            
                        </li>                        
                        <?php } ?>                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
                <?php } ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <section class="content">
                    <?php
                        $this->load->view($content);
                    ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
          
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
                //biaya
                $('#tombol-hilang').click(function() {
                    $('#form-biaya')                                                        
                            .fadeOut(1000);
                });
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