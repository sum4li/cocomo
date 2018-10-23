<!--<div class="container">-->

<div id="notifications"><?php echo $this->session->flashdata('forgot_gagal'); ?></div>
    <div class="row">
        <div id="notifications"><?php
        
         ?></div>
        <div class="col-lg-3 col-lg-offset-4">
            <div class="box box-danger">
                <div class="box-body">
                    <h3 class="text-red text-judul text-center">
                        <strong>COCOMO PASSWORD RECOVERY</strong>
                    </h3>
                    <hr>
                    <br>                    
                    <form method="post" action="">
                        <div class="form-group <?php echo $this->session->flashdata('error'); ?>">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required="" placeholder="Username">            
                        </div>                            
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" name="forgot" type="submit">Kirim Password <i class="fa fa-send"></i></button>                
                            <a class="btn btn-danger btn-block" href="login">Batal <i class="fa fa-times"></i></a>                
                        </div>
                    </form>                                                            
                    
                    
                </div>
            </div>
        </div>        
    </div>
<!--</div>-->