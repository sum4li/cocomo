<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mpenghitungan extends CI_Model{
    
    public function __construct() {
        parent::__construct();        
        $this->load->dbutil();
    }
    
    function get_class($class=''){
        if(!empty($class)){
            $this->db->where('kelas',$class);        
        }
        $q=$this->db->get('data_awal');
        return $q;
    }    
    
    function get_list($list_attribute,$attribute,$class){        
        $this->db->where('kelas',$class);        
        $this->db->where($list_attribute,$attribute);        
        $q=$this->db->get('data_awal');
        return $q;
    }
    
    function get_distinct($attribute){
        $return = array();
        $q=$this->db->query("SELECT DISTINCT $attribute FROM penghitungan");
        $distinc_r = $q->result_array();
        foreach($distinc_r as $distinc){
            $return[] = $distinc[$attribute];            
        }
        return $return;
    }
    
    function get_entrophy($class,$total){
        $total_penghitungan = $total;
        $entrophy = 0;
        foreach($penghitunganABC as $ipk=>$abc){                       
            $sub_total =  $abc;
            $entrophy += (-($sub_total/$total_penghitungan))* log($sub_total/$total_penghitungan,2);
        }
        return (is_nan($entrophy))?0:$entrophy;
    }
    
    public function getGain($penghitunganGain,$jumlahIpk,$eipk){
        $ent = 0;
        foreach($penghitunganGain as $dg){
            $ent += $dg['total']/$jumlahIpk*$dg['entropy'];
        }
        return $eipk-$ent;
    }
    
}
