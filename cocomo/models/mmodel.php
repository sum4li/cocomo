<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mmodel extends CI_Model{        
    
        public function __construct() {
            parent::__construct();            
            $this->load->database();
        }
        
        //fungsi untuk menambah model kedalam database sesuai id_project
        function insert(){
            //data yang akan dimasukkan
            $data=array(                
                'model'=>  $this->model,               
                'id_project'=>  $this->session->id_project                         
            );
            //cek keberadaan model pada project, 
            //jika sudah ada proses selanjutnya adalah edit sesuai id project
            $query=  $this->cekModel();
            if($query->num_rows()>0){                
                $this->db->where('id_project',$this->session->id_project);
                $this->db->update('cocomo_model',$data);
            }else{
                $this->db->insert('cocomo_model',$data);
            }
        }
        //fugnsi untuk mengambil data model berdasar id_project
        function getModel($id){            
            $this->db->where('id_project',$id);            
            $q=$this->db->get('cocomo_model');
            return $q;           
        }
        //fungsi untuk mengecek keberadaaan model berdasar id_project
        function cekModel(){            
            $this->db->where('id_project',  $this->session->id_project);            
            $q=$this->db->get('cocomo_model');
            return $q;           
        }
        //fungsi untuk mendapatkan nilai factor model
        function getNilaiModel(){            
            $model=$this->cekModel()->row()->model;
            if($model=='Organic'){
                $factor=array(
                    'a'=>2.4,
                    'b'=>1.05,
                    'c'=>2.5,
                    'd'=>0.38
                    );
            }else if($model=='Semi-detached'){
                $factor=array(
                    'a'=>3.0,
                    'b'=>1.12,
                    'c'=>2.5,
                    'd'=>0.35
                    );                
            }else if($model=='Embedded'){                
                $factor=array(
                    'a'=>3.6,
                    'b'=>1.20,
                    'c'=>2.5,
                    'd'=>0.32
                    );                
            }
            
                return $factor;
        }        
        
}