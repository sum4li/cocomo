<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dummy extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();               
        $this->load->database();
    }
    
    public function index(){
        $this->read();
        
    }
    
    //menampilkan seluruh item
    public function read() {
        $data['title']='Data Dummy';
        $data['data_dummy']=  $this->mdummy->read('asc');        
        $data['content']='dummy/home';
        $this->load->view('template',$data);
    }
    
    //tambah item
    public function create() {
        if(isset($_POST['create'])){
            $this->model->namaItem=$_POST['namaItem'];
            $this->model->harga=$_POST['harga'];
            $this->model->idHero=$_POST['idHero'];
            $this->model->rarity=$_POST['rarity'];
            $this->model->insert();
            redirect('item/index');
        }else{
            $data['title']='Tambaha item';
            $data['content']='item/create';
            $data['hero']=  $this->mhero->read('asc');
            $this->load->view('template',$data);
        }
    }
    
    public function update(){
        if(isset($_POST['update'])){
            $id=$this->uri->segment(3);
            $this->model->namaItem=$_POST['namaItem'];
            $this->model->harga=$_POST['harga'];            
            $this->model->idHero=$_POST['idHero'];
            $this->model->rarity=$_POST['rarity'];
            $this->model->update($id);
            redirect('item/index');            
        }else{
            $id=$this->uri->segment(3);            
            $q=$this->model->readUpdate($id);
            $row=$q->row();
            $data['hero']=  $this->mhero->read('asc');
            $data['namaItem']=$row->namaItem;
            $data['harga']=$row->harga;
            $data['namaHero']=$row->namaHero;
            $data['idHero']=$row->idHero;            
            $data['rarityItem']=$row->rarity;
            $data['content']='item/update';            
            $this->load->view('template',$data);
        }
        
    }


    //hapus item
    public function delete() {
        $id=$this->uri->segment(3);
        $this->model->delete($id);
        redirect('item/index');
    }
    
}
