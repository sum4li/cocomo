<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Muser extends CI_Model{        
    
        public function __construct() {
            parent::__construct();            
            $this->load->database();
        }
            
        //model cek login
        function cek_login($where){            
            return $this->db->get_where('cocomo_user',$where);
        }
        
        //model cek user
        function cek_user($email){
            $this->db->where('email',$email);            
            $q=$this->db->get('cocomo_user');
            return $q;
        }
        
        //model register
        function register(){            
            $data=array(
                'nama_user'=>  $this->nama_user,
                'email'=>  $this->email,
                'password'=>  $this->password
            );
            $this->db->insert('cocomo_user',$data);
        }
}