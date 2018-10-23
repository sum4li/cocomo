<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('muser'));                      
        $this->load->helper(array('url','email')) ;
        $this->model = $this->muser;
        $this->load->database();
    }
    
    public function index(){
        $this->login();        
    }
    //fungsi untuk menghadirkan halaman login
    public function login(){     
        if(isset($_POST['login'])){              
            $where=array(
                'email'=>  $this->input->post('email'),
                'password'=>  $this->input->post('password')
            );
            $query=$this->model->cek_login($where);
            if($query->num_rows() > 0){      
                $row=$query->row();
                    $session=array(
                        'id_user'=>$row->id_user,                    
                        'email'=>$row->email,                    
                        'nama_user'=>$row->nama_user,                                            
                        'status'=>'login'
                    );                    
                $this->session->set_userdata($session);                
                redirect('user/login');                
//                print_r($this->session->userdata());
            }else{
                $msg=array(
                    'msg'=>'<p class="text-danger">Maaf <strong>Username</strong> atau <strong>Password</strong> tidak tepat</p>',                    
                    'error'=>'has-error has-feedback'
                );
                $this->session->set_flashdata($msg);
                redirect('user/login');             
		
            }            
        }else{
            $data['title']='COCOMO | Halaman Login';        
            $data['content']='user/login';
            $this->load->view('template_user',$data);                
        }
    }
    //fungsi untuk menghadirkan halaman register
    public function register(){
        if(isset($_POST['register'])){                                
            $query=$this->model->cek_user($this->input->post('email'));
            if($query->num_rows() > 0){
                $message=array(
                    'msg'=>'<div class="alert alert-danger alert-dismissible" id="notifications">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
                                Username telah digunakan
                             </div>'                    
                );
                $this->session->set_flashdata($message);                
                redirect('user/register');
            }else{
                $this->model->nama_user=$_POST['nama_user'];
                $this->model->email=$_POST['email'];
                $this->model->password=$_POST['password'];                
                $this->model->register();
                $message=array(
                    'register_success'=>'<div class="alert alert-success alert-dismissible" id="notifications">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Selamat!</h4>
                                            Pendaftaran telah berhasil, silahkan login untuk masuk
                                         </div>'
                );
                $this->session->set_flashdata($message);                
                redirect('user/login');
            }            
        }else{
            $data['title']='COCOMO | Halaman Daftar';        
            $data['content']='user/register';
            $this->load->view('template_user',$data);                
        }
    }   
    //halaman untuk mengirim pasword yang lupa
    public function forgot_password(){
        if(isset($_POST['forgot'])){              
            
            $query=$this->model->cek_user($this->input->post('email'));
            if($query->num_rows() > 0){  
                
                $email_tujuan=$query->row()->email;
                $password_tujuan=$query->row()->password;
                
                $this->email->from('cs.cocomo@gmail.com', 'Cocomo Costumer Service');
                $this->email->to($email_tujuan);
                //$this->email->cc('another@another-example.com');
                //$this->email->bcc('them@their-example.com');

                $this->email->subject('Password Recovery Untuk Akun Cocomo Anda');
                $this->email->message('Password :'.$password_tujuan);

                $this->email->send();                
                $message=array(
                    'forgot_success'=>'<div class="alert alert-success alert-dismissible" id="notifications">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Selamat!</h4>
                                            Password recovery telah berhasil, silahkan lihat email anda untuk melihat password anda
                                         </div>'
                );
                $this->session->set_flashdata($message);
                redirect('dashboard/index');
            }else{
                $message=array(
                       'forgot_gagal'=>'<div class="alert alert-danger alert-dismissible" id="notifications">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
                                Username atau email anda tidak terdaftar di database kami
                             </div>'                 
                );
                $this->session->set_flashdata($message);
                redirect('user/forgot_password');             
            }            
        }else{
            $data['title']='COCOMO | Halaman Lipa Password';        
            $data['content']='user/forgot_password';
            $this->load->view('template_user',$data);                
        }
    }
    //halaman untuk menghilangkan (destroy) session dan meuju ke halaman login
    public function logout(){
        $this->session->sess_destroy();
        redirect('dashboard/index');
    }
}
