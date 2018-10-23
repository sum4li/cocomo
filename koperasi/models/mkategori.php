<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mkategori extends CI_Model{    
    public $idKategori;    
    public $kategori;
    
        public function __construct() {
            parent::__construct();            
//            $this->labels=$this->_attributLabels();
            $this->load->database();
        }
        
        //model tambah kategori
        function insert(){
            //not implemented yet
            $data=array(
                'kategori'=>  $this->kategori                
            );
            $this->db->insert('kategori',$data);
        }
        
        //model edit kategori
        function update($id){
            //not implemented yet
            $data=array(
                'kategori'=>  $this->kategori                
            );
            $this->db->where('idKategori',$id);
            $this->db->update('kategori',$data);
        }
        
        //model hapus kategori
        function delete($id){
            //not implemented yet
            $this->db->delete('kategori',array('idKategori'=>$id));            
        }
        
        //model membaca seluruh kategori
        function read($order=''){
            $this->db->select('*');
            $this->db->order_by('kategori',$order);
            $q=$this->db->get('kategori');
            return $q;
        }
        
        //model membaca seluruh kategori
        function readUpdate($id){
            $this->db->select('*');            
            $this->db->where('idKategori',$id);            
            $q=$this->db->get('kategori');
            return $q;
        }        
}