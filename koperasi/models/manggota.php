<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Manggota extends CI_Model{    
    public $id_anggota;
    public $id_pengganti;
    public $nama;
    public $alamat;
    public $foto;
    public $jabatan;
    public $status;
    
    //public $labels=[];
    
        public function __construct() {
            parent::__construct();            
//            $this->labels=$this->_attributLabels();
            $this->load->database();
        }
        
        //model tambah item
        function insert(){
            //not implemented yet
            $data=array(
                'nama'=>  $this->nama,
                'alamat'=>  $this->alamat,
                //'foto'=>  $this->foto,
                'jabatan'=>  $this->jabatan,                
                'id_pengganti'=>  $this->id_pengganti                
            );
            $this->db->insert('anggota',$data);
        }
        
        //model edit item
        function update($id){
            $data=array(
                'nama'=>  $this->nama,
                'alamat'=>  $this->alamat,
                'foto'=>  $this->foto,
                'jabatan'=>  $this->jabatan,                
                'id_pengganti'=>  $this->id_pengganti,                
                'status'=>  $this->status                
            );
            $this->db->where('id_anggota',$id);
            $this->db->update('anggota',$data);
        }
        
        //model hapus item
        function delete($id){
            //not implemented yet
            $this->db->delete('anggota',array('id_anggota'=>$id));            
        }
        
        //model membaca seluruh item
        function read($order=''){            
            $this->db->order_by('id_anggota',$order);
            $q=$this->db->get('anggota');
            return $q;
        }
        
             
        //model membaca seluruh item
        function readUpdate($id){
            $this->db->order_by('id_anggota',$order);
            $this->db->where('id_anggota',$id);            
            $q=$this->db->get('anggota');
            return $q;            
        }
        
        //model membaca seluruh item
        function detail($nama){            
            $this->db->where('nama',$nama);            
            $q=$this->db->get('anggota');
            return $q;
        }
}