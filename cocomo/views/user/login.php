<!--<div class="container">-->

<div id="notifications"><?php echo $this->session->flashdata('register_success'); ?></div>
<div id="notifications"><?php echo $this->session->flashdata('forgot_success'); ?></div>
    <div class="row">
        <div id="notifications"><?php
        
         ?></div>
        <div class="col-lg-3 col-lg-offset-1">
            <div class="box box-danger">
                <div class="box-body">
                    <h3 class="text-red text-judul text-center">
                        <strong>COCOMO LOGIN</strong>
                    </h3>
                    <hr>
                    <br>                    
                    <form method="post" action="">
                        <div class="form-group <?php echo $this->session->flashdata('error'); ?>">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required="" placeholder="Username">            
                        </div>            
                        <div class="form-group <?php echo $this->session->flashdata('error'); ?>">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="" placeholder="Password">                                        
                        </div>            
                        <div class="form-group">
                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>            
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" name="login" type="submit">Masuk <i class="fa fa-sign-in"></i></button>                
                        </div>
                    </form>                                        
                    <a class="btn btn-warning btn-block" href="forgot_password">Lupa Password? <i class="fa fa-lock"></i></a>
                    
                    <hr>                    
                    <p class="text-center text-red"> Tidak Punya Akun?</p>
                    <a class="btn btn-success btn-block" href="register">Daftar <i class="fa fa-user"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <h1 class="text-judul text-red">COCOMO</h1>
            <hr>
            <p class="text-justify">
                COCOMO atau Constructive Cost Model adalah model algoritma estimasi biaya perangkat lunak yang dikembangkan oleh Barry Boehm pada tahun 1981. Model ini menggunakan dasar regresi formula, dengan parameter yang berasal dari data historis dan karakteristik proyek-proyek saat ini.
            </p>
        </div>
    </div>
<!--</div>-->