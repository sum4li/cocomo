<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Administrator extends CI_Controller{
    function Administrator(){
        parent::__construct();
        $this->load->model('muser');              
    }
    
    function index(){
        if($this->session->userdata('logged_in'))
            redirect ('admin/dashboard','refresh');
        $data['content']='login';
        $this->load->view('template',$data);
    }
    
    function login(){
        $username=  $this->input->post('username',TRUE);
        $password=  $this->input->post('password',TRUE);
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=  $this->db->get('user');
        if($query->num_rows()==1){
            foreach ($query->result() as $row){
                $nama=$row->namaLengkap;
                $idUser=$row->idUser;
            }                
        }
        $user=  $this->muser->cekUser($username,$password);
        if($user==TRUE){
            $data=array(
                'namaLengkap'=>$nama,
                'username'=>$username,
                'idUser'=>$idUser,
                'logged_in'=>TRUE
            );
            $this->session->set_userdata($data);
            redirect('admin/dashboard','refresh');
        }else{
            $this->session->set_flashdata('nama',$username);
            $this->session->set_flashdata('login_message','username atau password tidak sesuai');
            redirect('administrator');
        }
            
        
    }
    
    function logout(){
        $this->session->unset_userdata('namaLengkap');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('idUser');
        $this->session->unset_userdata('logged_in');
        redirect(site_url('/artikel/'));
    }
}
