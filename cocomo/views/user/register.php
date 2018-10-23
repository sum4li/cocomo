
    <div class="row">
        <div class="col-lg-3 col-lg-offset-1"> 
            <div class="box box-danger">
                <div class="box-body">
                    <h3 class="text-red text-judul text-center">
                        <strong>REGISTER FORM</strong>
                    </h3>
                    <hr>
                    <br>
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required="" placeholder="Email" autofocus="">            
                        </div>            
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="" placeholder="Password">            
                        </div>            
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_user" required="" placeholder="Nama Lengkap">            
                        </div>
                        <div class="form-group">
                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block" name="register" type="submit">Daftar <i class="fa fa-user"></i></button>
                            <hr>
                            <a href="<?php echo base_url(); ?>user/login" class="btn btn-danger btn-sm btn-block">Batal <i class="fa fa-times"></i></a>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>
