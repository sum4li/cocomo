<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mtdi extends CI_Model{        
    
        public function __construct() {
            parent::__construct();            
            $this->load->database();
        }
        
        //model tambah tdi
        function insertTdi(){
            $data=array(
                'id_gsc'=>  $this->id_gsc,
                'value'=>  $this->value,               
                'id_project'=>  $this->id_project                         
            );
            
            $query=  $this->cekTdi($this->id_gsc, $this->id_project);
            if($query->num_rows()>0){
                $this->db->where('id_gsc',$this->id_gsc);            
                $this->db->where('id_project',$this->id_project);
                $this->db->update('cocomo_tdi',$data);
            }else{
                $this->db->insert('cocomo_tdi',$data);                
            }
        }
        //get GSC
        function getGsc($id){            
            $this->db->where('id_gsc',$id);            
            $q=$this->db->get('cocomo_gsc');
            return $q;           
        }
        //get GSCpoint
        function getGscPoint($id){            
            $this->db->where('id_gsc',$id);            
            $q=$this->db->get('cocomo_gscpoint');
            return $q;
        }
        //get nilai TDI
        function getTdi($id){
            $this->db->where('id_project',$this->session->id_project);            
            $this->db->where('id_gsc',$id);            
            $q=$this->db->get('cocomo_tdi');
            return $q;            
        }
        //cek keberadaan tdi sesuai id project
        function cekTdi($id_gsc="",$id_project=""){
            $this->db->where('id_gsc',$id_gsc);            
            $this->db->where('id_project',$id_project);            
            $q=$this->db->get('cocomo_tdi');
            return $q;           
        }
        //get nilai tdi
        function getNilaiTdi(){
            $this->db->select_sum('value');
            $this->db->where('id_project',  $this->session->id_project);                
            $q=$this->db->get('cocomo_tdi');
            return $q;
        }
        
        function cekJumlahTdi($id){
            $this->db->where('id_project',  $id);
            $q=$this->db->get('cocomo_tdi');
            return $q;
            
        }
        
        function tca($tdi){
            $tca=0.65 + (0.01 * $tdi);
            return $tca;
        }
        
//        function dashboardTdi($id){            
//            
//            $this->db->select('*');
//            $this->db->from('cocomo_tdi');
//            $this->db->join('cocomo_gsc','cocomo_tdi.id_gsc=cocomo_gsc.id_gsc','full');            
//            $this->db->join('cocomo_gscpoint','cocomo_gsc.id_gsc=cocomo_gscpoint.id_gsc','full');                                   
//            $this->db->where('cocomo_tdi.id_project',$id);           
//            $this->db->order_by('cocomo_tdi.id_gsc','ASC');
//            $q=$this->db->get();
//            return $q;            
//        }
        function dashboardTdi($id){            
            
            $this->db->select('*');
            $this->db->from('cocomo_tdi');
            $this->db->join('cocomo_gsc','cocomo_tdi.id_gsc=cocomo_gsc.id_gsc','full');                        
            $this->db->where('cocomo_tdi.id_project',$id);           
            $this->db->order_by('cocomo_tdi.id_gsc','ASC');
            $q=$this->db->get();
            return $q;
        }
        
        function pointDashboardTdi($id,$value){
            $this->db->select('*');
            $this->db->from('cocomo_gsc');
            $this->db->join('cocomo_gscpoint','cocomo_gsc.id_gsc=cocomo_gscpoint.id_gsc');                        
            $this->db->where('cocomo_gscpoint.id_gsc',$id);           
            $this->db->where('cocomo_gscpoint.value',$value);           
//            $this->db->order_by('cocomo_tdi.id_gsc','ASC');
            $q=$this->db->get();
            return $q;            
        }
}