<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mfungsi extends CI_Model{        
    
        public function __construct() {
            parent::__construct();            
            $this->load->database();
        }
        
        //fungsi untuk menambahkan fungsi atau table kedalam database
        function insert($tipe){                            
            //jika tipe fungsi maka
            if($tipe=='fungsi'){
                $bahasa=  $this->bahasa;
                $ret=  $this->FTR;
                $kolom='FTR';
            }elseif($tipe=='table'){//jika tipe table maka
                $bahasa='SQL';
                $ret=  $this->RET;
                $kolom='RET';
            }
            //deklarasi array data yang akan dimasukkan kedalam database
                $data=array(
                    'fp'=>  $this->fp,//nama fp
                    'tipe'=>  $this->tipe,//tipe          
                    'bahasa'=>  $bahasa,//bahasa  
                    'DET'=>  $this->DET,//DET          
                    $kolom=>  $ret,//RET atau FTR
                    'weight'=>  $this->weight,//nilai Weight              
                    'id_project'=>  $this->id_project//id project 
                );                                
            $this->db->insert('cocomo_fp',$data);
        }
        //get data table untuk edit table
        function getEdit($tipe,$id){
            $this->db->where('id_project',$this->session->id_project);            
            $this->db->where('id_fp',$id);            
            if($tipe=='table'){
                $this->db->where_in('tipe',array('ILF','EIF'));
            }elseif($tipe=='fungsi'){
                $this->db->where_in('tipe',array('EI','EO','EQ'));                            
            }
            $q=$this->db->get('cocomo_fp');
            return $q; 
        }
        //model update fungsi
        function update($tipe,$id){            
            if($tipe=='table'){
                $data=array(
                    'fp'=>  $this->fp,
                    'tipe'=>  $this->tipe,                                   
                    'DET'=>  $this->DET,                               
                    'weight'=>  $this->weight,                               
                    'RET'=>  $this->RET                    
                );                
            }elseif ($tipe=='fungsi') {
                $data=array(
                    'fp'=>  $this->fp,
                    'tipe'=>  $this->tipe,               
                    'bahasa'=>  $this->bahasa,               
                    'DET'=>  $this->DET,                               
                    'weight'=>  $this->weight,                               
                    'FTR'=>  $this->FTR                    
                );            
            }
            $this->db->where('id_project',$this->session->id_project);
            $this->db->where('id_fp',$id);
            $this->db->update('cocomo_fp',$data);
        }
        //model untuk delete fungsi
        function delete($id){                        
            $this->db->where('id_project',$this->session->id_project);
            $this->db->where('id_fp',$id);
            $this->db->delete('cocomo_fp');            
        }
        //get data fp
        function getData($id,$tipe){
            $this->db->where('id_project',$id);                            
            if($tipe=='table'){
                $this->db->where_in('tipe',array('ILF','EIF'));
            }elseif($tipe=='fungsi'){
                $this->db->where_in('tipe',array('EI','EO','EQ'));                            
            }                        
            $q=$this->db->get('cocomo_fp');
            return $q;           
        }        
        //get weight ret/ftr sama
        function getWeight($tipe,$det,$ret){
            $det_1=$this->getDet($tipe);            
            $ret_1=$this->getRet($tipe);
            $weight=$this->weight($tipe);
            if($det<$det_1['batas_2'] and $ret<=$ret_1['batas_1']){
                $q=  $weight['low'];                
            }elseif($det>=$det_1['batas_2'] and $ret>$ret_1['batas_1']){
                $q=$weight['high'];                
            }elseif($det<=$det_1['batas_1'] and $ret<$ret_1['batas_2']){
                $q=$weight['low'];                
            }elseif($det>$det_1['batas_1'] and $ret>=$ret_1['batas_2']){
                $q=$weight['high'];                
            }else{
                $q=$weight['average'];
            }
            return $q;
            
                
        }
        //nilai weight
        function weight($tipe){
            switch ($tipe){
                case 'EI':
                    $weight=array(
                        'low'=>3,
                        'average'=>4,
                        'high'=>6
                    );
                break;    
                case 'EO':
                    $weight=array(
                        'low'=>4,
                        'average'=>5,
                        'high'=>7
                    );
                break;    
                case 'EQ':
                    $weight=array(
                        'low'=>3,
                        'average'=>4,
                        'high'=>6
                    );
                break;    
                case 'ILF':
                    $weight=array(
                        'low'=>7,
                        'average'=>10,
                        'high'=>15
                    );
                break;    
                case 'EIF':
                    $weight=array(
                        'low'=>5,
                        'average'=>7,
                        'high'=>10
                    );
                    
                break;
            }
            return $weight;
        }
        //nilai DET RET FTR
        function getDet($tipe){
            switch ($tipe){
                case 'EI':
                    $det=array(
                        'batas_1'=>4,
                        //'batas_2'=>15,
                        'batas_2'=>16
                    );
                break;    
                case 'EO':
                    $det=array(
                        'batas_1'=>5,
                        //'batas_2'=>19,
                        'batas_2'=>20
                    );
                break;    
                case 'EQ':
                    $det=array(
                        'batas_1'=>5,
                        //'batas_2'=>19,
                        'batas_2'=>20
                    );
                break;    
                case 'ILF':
                    $det=array(
                        'batas_1'=>19,
                        //'batas_2'=>50,
                        'batas_2'=>51
                    );
                break;    
                case 'EIF':
                    $det=array(
                        'batas_1'=>19,
                        //'batas_2'=>50,
                        'batas_2'=>51
                    );                    
                break;
            }
            return $det;
        }
        //fungsi untuk ambil nilai ret/ftr
        function getRet($tipe){
            switch ($tipe){
                case 'EI':
                    $ret=array(
                        'batas_1'=>1,
                        //'batas_2'=>2,
                        'batas_2'=>3
                    );
                break;    
                case 'EO':
                    $ret=array(
                        'batas_1'=>1,
                        //'batas_2'=>3,
                        'batas_2'=>4
                    );
                break;    
                case 'EQ':
                    $ret=array(
                        'batas_1'=>1,
                        //'batas_2'=>3,
                        'batas_2'=>4
                    );
                break;    
                case 'ILF':
                    $ret=array(
                        'batas_1'=>1,
                        //'batas_2'=>5,
                        'batas_2'=>6
                    );
                break;    
                case 'EIF':
                    $ret=array(
                        'batas_1'=>1,
                        //'batas_2'=>5,
                        'batas_2'=>6
                    );                    
                break;
            }            
            return $ret;
        }
        //fuungsi get LOC
        function getJumlahBahasa($bahasa){
            $this->db->select_sum('weight');
            $this->db->where('bahasa',$bahasa);
            //$this->db->where('id_project',$this->session->id_project);
            $this->db->where('id_project',  $this->session->id_project);
            $q=$this->db->get('cocomo_fp');
            return $q;           
        }
        //function get bahasa
        function getNilaiBahasa($bahasa){
            $nilai=array(
                'SQL'=>37,
                'PHP'=>53,
                'HTML'=>58,
                'Javascript'=>58
            );
            $hasil=$nilai[$bahasa];
            return $hasil;
        }
        //function untuk menjumlah nilai ufp untuk fp bukan loc
        function ufp($nilai){
            $hasil=array_sum($nilai);
            return $hasil;
        }
}