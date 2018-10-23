<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Kategori extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('mkategori'));                      
        $this->load->helper('url') ;
        $this->model = $this->mkategori;
        $this->load->database();
    }
    
    public function index(){
        $this->read();
    }
    
    //menampilkan seluruh item
    public function read() {
        $data['title']='Kategori';
        $data['kategori']=  $this->model->read();        
        $data['content']='kategori/home';
        $this->load->view('template',$data);
    }
    
    //tambah item
    public function create() {
        if(isset($_POST['create'])){            
            $this->model->kategori=$_POST['kategori'];            
            $this->model->insert();
            redirect('kategori/');
        }else{
            $data['title']='Tambah Kategori';
            $data['content']='kategori/create';            
            $this->load->view('template',$data);
        }
    }
    
    public function update(){
        if(isset($_POST['update'])){
            $id=$this->uri->segment(3);            
            $this->model->kategori=$_POST['kategori'];            
            $this->model->update($id);
            redirect('kategori/');            
        }else{
            $id=$this->uri->segment(3);            
            $q=$this->model->readUpdate($id);
            $row=$q->row();            
            $data['kategori']=$row->kategori;            
            $data['content']='kategori/update';            
            $this->load->view('template',$data);
        }
        
    }

    //hapus item
    public function delete() {
        $id=$this->uri->segment(3);
        $this->model->delete($id);
        redirect('kategori/');
    }
    
}
