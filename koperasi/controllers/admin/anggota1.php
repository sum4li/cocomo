<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Artikel extends CI_Controller
{
    
    public function __Berita() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')&& !$this->session->userdata('username'))
            redirect(base_url (),'refresh');                
        
    }
    
    public function index(){
        $this->read();
    }
    
    //menampilkan seluruh item
    public function read() {
        $data['title']='Artikel';
        $data['artikel']=  $this->martikel->read();        
        $data['content']='admin/artikel/home';
        $this->load->view('template',$data);
    }
    
    //tambah item
    public function create() {
        if(isset($_POST['create'])){
            $this->martikel->idKategori=$_POST['idKategori'];
            $this->martikel->judul=$_POST['judul'];
            $this->martikel->isi=$_POST['isi'];            
            $this->martikel->insert();
            redirect('admin/artikel/');
        }else{
            $data['title']='Tambah Artikel';
            $data['content']='admin/artikel/create';
            $data['artikel']=  $this->martikel->read('desc');
            $data['kategori']=  $this->mkategori->read('asc');
            $this->load->view('template',$data);
        }
    }
    
    public function update(){
        if(isset($_POST['update'])){
            $id=$this->uri->segment(4);
            $this->martikel->idKategori=$_POST['idKategori'];
            $this->martikel->judul=$_POST['judul'];
            $this->martikel->isi=$_POST['isi'];                        
            $this->martikel->update($id);
            redirect('admin/artikel/');            
        }else{
            $id=$this->uri->segment(4);            
            $q=$this->martikel->readUpdate($id);
            $row=$q->row();
            $data['kategori']=  $this->mkategori->read('asc');
            $data['judul']=$row->judul;
            $data['isi']=$row->isi;
            $data['namaKategori']=$row->kategori;
            $data['idKategori']=$row->idKategori;                        
            $data['content']='admin/artikel/update';            
            $this->load->view('template',$data);
        }
        
    }

    //hapus item
    public function delete() {
        $id=$this->uri->segment(4);
        $this->martikel->delete($id);
        redirect('admin/artikel/');
    }
    
    public function selengkapnya(){
        $judul= implode(" ",preg_split("/[\s,-]+/",$this->uri->segment(3)));        
        if($this->martikel->detail($judul)->num_rows()>0){
            $data['artikel']=$this->martikel->detail($judul);
            $data['title']='lol';
            $data['content']='admin/artikel/selengkapnya';
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
