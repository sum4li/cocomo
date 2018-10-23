<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mproject extends CI_Model{        
    public $id_project;
    public $nama_project;
    public $idv;
    
    
    
        public function __construct() {
            parent::__construct();            
            $this->load->database();
            $this->load->model(array('mfungsi','mtdi','mmodel'));                      
        }
        //model menampahkan project
        function insert(){
            //not implemented yet
            $data=array(
                'nama_project'=>  $this->nama_project,
                'id_user'=>  $this->id_user,               
                'project_description'=>  $this->project_description                         
            );
            $this->db->insert('cocomo_project',$data);
        }       
        //model untuk cek project berdasarkan nama_project dan id_user
        function cek_project($nama_project,$id_user){
            $this->db->where('nama_project',$nama_project);            
            $this->db->where('id_user',$id_user);            
            $this->db->order_by('nama_project','DESC');
            $q=$this->db->get('cocomo_project');
            return $q;
            
        }
	//model untuk mengecek project by id_project	
        function cek_project_by_id($id){
            $this->db->where('id_project',$id);        
            $q=  $this->db->get('cocomo_project');
            return $q;
        }
        //Model untuk update deskripsi project 
        function update($id){
            $data=array(
                'nama_project'=>  $this->nama_project,                
                'project_description'=>  $this->project_description                
            );
            $this->db->where('id_project',$id);
            $this->db->update('cocomo_project',$data);
        }
        //model untuk membaca data project sesuai id_project pada relasi tabel cocomo_user dan cocomo_project
        function read($id,$sort=""){
            $this->db->select('*');
            $this->db->from('cocomo_project');
            $this->db->join('cocomo_user','cocomo_project.id_user=cocomo_user.id_user');            
            $this->db->where('cocomo_project.id_project',$id);
            $q=$this->db->get();
            return $q;
        }
        
        //model membaca daftar project sesuai id pengguna pada relasi tabel cocomo_project dan cocomo_user
        function daftar_project($user,$sort=""){
            $this->db->select('*');
            $this->db->from('cocomo_project');
            $this->db->join('cocomo_user','cocomo_project.id_user=cocomo_user.id_user');            
            //$this->db->join('cocomo_biaya','cocomo_project.id_project=cocomo_biaya.id_project');            
            //$this->db->join('project_result','project.id_project=project_result.id_project');            
            $this->db->where('cocomo_project.id_user',$user);
            $this->db->order_by('id_project',$sort);
            $q=$this->db->get();
            return $q;
        }
        //untuk mengambil detail data pada database cocomo_project
        function detail($id){
            $this->db->where('id_user',$this->session->id_user);
            $this->db->where('id_project',$id);
            $q=$this->db->get('cocomo_project');
            return $q;
        }
        //fungsi untuk membaca data history berdasarkan id project
        function history($id){            
            $this->db->select('id_project,fp,loc,effort,duration,person');
            $this->db->where('id_project',$id);            
            $this->db->order_by('update_date','DESC');            
            $q=$this->db->get('cocomo_history');
            return $q;
        }
        //fungsi untuk cek data pada database cocomo_history
        function cekHistory($id){
            $this->db->where('id_project',$id);                        
            $q=$this->db->get('cocomo_history');
            return $q;
            
        }    
        //cek status
        function cekStatus($id){
            //inisialisasi jumlah baris tdi apakah sudah penuh belum
            $jumlahTdi=$this->mtdi->cekJumlahTdi($id)->num_rows();
            //jika jumlah baris tdi < 14 maka redirect kehalam tdi keberapa
            $jumlahFungsi=$this->mfungsi->getData($id,'fungsi');//cek jumlah fungsi
            $jumlahTable=$this->mfungsi->getData($id,'table');//cek jumlah table
            $cekModel=  $this->mmodel->getModel($id);//cek model is exist
            if($jumlahTdi < 14):
                return FALSE;
            elseif($jumlahTable->num_rows() < 1):
                return FALSE;            
            elseif($jumlahFungsi->num_rows() <1) :
                return FALSE;
            elseif($cekModel->num_rows() < 1):
                return FALSE;
            elseif($this->cek_project_by_id($id)->row()->fp == NULL):
                return FALSE;
//            elseif($this->detail_biaya($id) == 0):
//                return FALSE;
            else:
                return TRUE;
            endif;
        }
        //fungsi untuk menambah biaya pada database cocomo_biaya
        function insert_biaya(){
            $cek=$this->get_biaya($this->session->id_project)->num_rows();
            $data=array(
                'id_project'=>  $this->session->id_project,                
                'bbb'=>  $this->bbb,                
                'btk'=>  $this->btk,                
                'bop'=>  $this->bop,
                'laba'=>  $this->laba,
                'biaya'=>  $this->biaya                
            );            
            if($cek>0):
                $this->db->where('id_project',$this->session->id_project);
                $this->db->update('cocomo_biaya',$data);                                
            else:
                $this->db->insert('cocomo_biaya',$data);                
            endif;
        }
        //fungsi untuk upadate biaya pada database cocomo_biaya karena terjadi update perhitungan fp,loc,dll.
        function update_biaya($id){
            $data=array(                
                'biaya'=>  $this->biaya                
            );            
            $this->db->where('id_project',$id);
            $this->db->update('cocomo_biaya',$data);
        }
        function get_biaya($id){
            $this->db->where('id_project',$id);
            $q=$this->db->get('cocomo_biaya');
            return $q;
        }
        //untuk mengambil detail biaya data pada table cocomo_biaya
        function cek_biaya($id){            
            $this->db->where('id_project',$id);
            $q=$this->db->get('cocomo_biaya');
            return $q;
        }
        //untuk mengambil detail biaya data pada table cocomo_biaya
        function detail_biaya($id){            
            if($this->cek_biaya($id)->num_rows() <1){
                return $q=0;
            }else{                
                return $q=  $this->cek_biaya($id)->row()->biaya;                
            }
        }
}