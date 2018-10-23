<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Anggota extends CI_Controller
{
    
    public function __Anggota() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')&& !$this->session->userdata('username'))
            redirect(base_url (),'refresh');                
        
    }
    
    public function index(){
        $this->read();
    }
    
    //menampilkan seluruh item
    public function read() {
        $data['title']='Daftar Anggota | Koperasi';
        $data['anggota']=  $this->manggota->read();        
        $data['content']='admin/anggota/home';
        $this->load->view('template',$data);
    }
    
    //tambah item
    public function create() {
        if(isset($_POST['create'])){            
            $this->manggota->nama=$_POST['nama'];
            $this->manggota->alamat=$_POST['alamat'];                                    
            $this->manggota->jabatan=$_POST['jabatan'];            
            $this->manggota->id_pengganti=$_POST['id_pengganti'];            
            $this->manggota->insert();
            redirect('admin/anggota/');
        }else{
            $data['title']='Tambah Anggota | Koperasi';
            $data['content']='admin/anggota/create';
            $data['anggota']=  $this->manggota->read();            
            $this->load->view('template',$data);
        }
    }
    
    public function update(){
        if(isset($_POST['update'])){
            $id=$this->uri->segment(4);
            $this->manggota->idKategori=$_POST['idKategori'];
            $this->manggota->judul=$_POST['judul'];
            $this->manggota->isi=$_POST['isi'];                        
            $this->manggota->update($id);
            redirect('admin/anggota/');            
        }else{
            $id=$this->uri->segment(4);            
            $q=$this->manggota->readUpdate($id);
            $row=$q->row();
            $data['kategori']=  $this->mkategori->read('asc');
            $data['judul']=$row->judul;
            $data['isi']=$row->isi;
            $data['namaKategori']=$row->kategori;
            $data['idKategori']=$row->idKategori;                        
            $data['content']='admin/anggota/update';            
            $this->load->view('template',$data);
        }
        
    }

    //hapus item
    public function delete() {
        $id=$this->uri->segment(4);
        $this->manggota->delete($id);
        redirect('admin/anggota/');
    }
    
    public function selengkapnya(){
        $nama= implode(" ",preg_split("/[\s,-]+/",$this->uri->segment(3)));        
        if($this->manggota->detail($nama)->num_rows()>0){
            $data['anggota']=$this->manggota->detail($nama);
            $data['title']=$nama;
            $data['content']='admin/anggota/selengkapnya';
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
