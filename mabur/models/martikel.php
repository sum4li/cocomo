<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Martikel extends CI_Model{    
    public $idAtikel;
    public $idKategori;
    public $judul;
    public $isi;
    public $tanggal;
    
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
                'judul'=>  $this->judul,
                'idKategori'=>  $this->idKategori,
                'isi'=>  $this->isi                
            );
            $this->db->insert('artikel',$data);
        }
        
        //model edit item
        function update($id){
            //not implemented yet
            $data=array(
                'judul'=>  $this->judul,
                'idKategori'=>  $this->idKategori,
                'isi'=>  $this->isi                
            );
            $this->db->where('idArtikel',$id);
            $this->db->update('artikel',$data);
        }
        
        //model hapus item
        function delete($id){
            //not implemented yet
            $this->db->delete('artikel',array('idArtikel'=>$id));            
        }
        
        //model membaca seluruh item
        function read($order=''){
            $this->db->select('*');
            $this->db->from('kategori');
            $this->db->join('artikel','kategori.idKategori=artikel.idKategori');
            $this->db->order_by('idArtikel',$order);
            $q=$this->db->get();
            return $q;
        }
        
             
        //model membaca seluruh item
        function readUpdate($id){
            $this->db->select('*');
            $this->db->from('kategori');
            $this->db->join('artikel','kategori.idKategori=artikel.idKategori');
            $this->db->where('idArtikel',$id);            
            $q=$this->db->get();
            return $q;
        }
        
        //model membaca seluruh item
        function detail($judul){
            $this->db->select('*');
            $this->db->from('kategori');
            $this->db->join('artikel','kategori.idKategori=artikel.idKategori');
            $this->db->where('judul',$judul);            
            $q=$this->db->get();
            return $q;
        }
        
        //model attribut label
//        function _attributLabels(){
//            return [
//                'idItem'=>'Id Item',
//                'idHero'=>'Id Hero',
//                'namaItem'=>'Nama Item',
//                'rarity'=>'Rarity Item',
//                'harga'=>'Harga'
//            ];
//        }
}