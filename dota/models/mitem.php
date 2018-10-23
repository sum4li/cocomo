<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mitem extends CI_Model{    
    public $idItem;
    public $idHero;
    public $namaItem;
    public $rarity;
    public $harga;
    
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
                'namaItem'=>  $this->namaItem,
                'harga'=>  $this->harga,
                'idHero'=>  $this->idHero,
                'rarity'=>  $this->rarity
            );
            $this->db->insert('item',$data);
        }
        
        //model edit item
        function update($id){
            //not implemented yet
            $data=array(
                'namaItem'=>  $this->namaItem,
                'harga'=>  $this->harga,
                'idHero'=>  $this->idHero,
                'rarity'=>  $this->rarity                
            );
            $this->db->where('idItem',$id);
            $this->db->update('item',$data);
        }
        
        //model hapus item
        function delete($id){
            //not implemented yet
            $this->db->delete('item',array('idItem'=>$id));            
        }
        
        //model membaca seluruh item
        function read(){
            $this->db->select('*');
            $this->db->from('hero');
            $this->db->join('item','hero.idHero=item.idHero');
            $this->db->order_by('idItem','desc');
            $q=$this->db->get();
            return $q;
        }
        
        //model membaca seluruh item
        function readUpdate($id){
            $this->db->select('*');
            $this->db->from('hero');
            $this->db->join('item','hero.idHero=item.idHero');
            $this->db->where('idItem',$id);            
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