<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Muser extends CI_Model{    
    function Muser(){
        parent::__construct();
        }
        
    function cekUser($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=  $this->db->get('user');
        if($query->num_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
            
    }    
}