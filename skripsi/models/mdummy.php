<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mdummy extends CI_Model{        
    public $idHero;
    public $namaHero;
    public $iconHero;
    public $attributHero;
    public $storyHero;
    
    //public $labels=[];
    
        public function __construct() {
            parent::__construct();            
//            $this->labels=$this->_attributLabels();
            $this->load->database();
        }
        
        //model tambah hero
        function insert(){
            //not implemented yet
            $data=array(
                'namaHero'=>  $this->namaHero,
                'attributHero'=>  $this->attributHero,
                'storyHero'=>  $this->storyHero,
                'icaonHero'=>  $this->iconHero                
            );
            $this->db->insert('hero',$data);
        }
        
        //model edit hero
        function update($id){
            //not implemented yet
            $data=array(
                'namaHero'=>  $this->namaHero,
                'attributHero'=>  $this->attributHero,
                'storyHero'=>  $this->storyHero,
                'icaonHero'=>  $this->iconHero                
            );
            $this->db->where('idHero',$id);
            $this->db->update('hero',$data);
        }
        
        //model hapus hero
        function delete($id){
            //not implemented yet
            $this->db->delete('hero',array('idHero'=>$id));            
        }
        
        //model membaca seluruh hero
        function read($sort){
            $this->db->order_by('id',$sort);                        
            $q=$this->db->get('data_dummy');
            return $q;
        }
        
        //model membaca seluruh hero
        function readUpdate($id){            
            $this->db->where('idHero',$id);            
            $q=$this->db->get('hero');
            return $q;
        }
        
        //model attribut label
//        function _attributLabels(){
//            return [
//                'idHero'=>'Id Hero',
//                'idHero'=>'Id Hero',
//                'namaHero'=>'Nama Hero',
//                'rarity'=>'Rarity Hero',
//                'harga'=>'Harga'
//            ];
//        }
}