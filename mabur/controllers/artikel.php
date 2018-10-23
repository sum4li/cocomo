<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Artikel extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('martikel','mkategori'));                      
        $this->load->helper('url');
        $this->load->helper('text');
        $this->model = $this->martikel;
        $this->load->database();
    }
    
    public function index(){
        $this->read();
    }
    
    //menampilkan seluruh item
    public function read() {
        $data['title']='Artikel';
        $data['artikel']=  $this->model->read();        
        $data['content']='artikel/home';
        $this->load->view('template',$data);
    }
    
    //tambah item
    public function create() {
        if(isset($_POST['create'])){
            $this->model->idKategori=$_POST['idKategori'];
            $this->model->judul=$_POST['judul'];
            $this->model->isi=$_POST['isi'];            
            $this->model->insert();
            redirect('artikel/');
        }else{
            $data['title']='Tambah Artikel';
            $data['content']='artikel/create';
            $data['artikel']=  $this->martikel->read('desc');
            $data['kategori']=  $this->mkategori->read('asc');
            $this->load->view('template',$data);
        }
    }
    
    public function update(){
        if(isset($_POST['update'])){
            $id=$this->uri->segment(3);
            $this->model->idKategori=$_POST['idKategori'];
            $this->model->judul=$_POST['judul'];
            $this->model->isi=$_POST['isi'];                        
            $this->model->update($id);
            redirect('artikel/');            
        }else{
            $id=$this->uri->segment(3);            
            $q=$this->model->readUpdate($id);
            $row=$q->row();
            $data['kategori']=  $this->mkategori->read('asc');
            $data['judul']=$row->judul;
            $data['isi']=$row->isi;
            $data['namaKategori']=$row->kategori;
            $data['idKategori']=$row->idKategori;                        
            $data['content']='artikel/update';            
            $this->load->view('template',$data);
        }
        
    }

    //hapus item
    public function delete() {
        $id=$this->uri->segment(3);
        $this->model->delete($id);
        redirect('artikel/');
    }
    
    public function selengkapnya(){
        $judul= implode(" ",preg_split("/[\s,-]+/",$this->uri->segment(2)));        
        if($this->model->detail($judul)->num_rows()>0){
            $data['artikel']=$this->model->detail($judul);
            $data['title']='lol';
            $data['content']='artikel/selengkapnya';
            $this->load->view('template',$data);            
        }
        else{
            show_404();
        }
    }
    
    public function _remap($method){
        switch ($method){
            case 'index':
                $this->index();
                break;            
            case 'create':
                $this->create();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            case $this->selengkapnya():
                $this->selengkapnya();
                break;            
        }
    }
    
}
