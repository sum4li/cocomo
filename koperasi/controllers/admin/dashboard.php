<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Dashboard extends CI_Controller{
    function Dashboard(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')&& !$this->session->userdata('username'))
            redirect(base_url ()."artikel",'refresh');
    }
    
    function index(){
        $data['content']='admin/home';
        $this->load->view('template',$data);
    }
}

