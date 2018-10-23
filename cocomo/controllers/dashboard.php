<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('mproject','mfungsi','mtdi','mmodel'));                      
        $this->load->helper('url') ;
        $this->model = $this->mproject;
        $this->load->database();        
        if($this->session->userdata('status')!='login'){
            redirect('user/login');
        }
        if(!empty($this->session->userdata('id_project'))){
            redirect('project/overview_project');            
        } 
    }
    //fungsi halam awal untuk dasboard daftar project yg telah dibuat
    public function index(){
        print_r($_SESSION);
        $data['title']='COCOMO | Beranda';        
        $data['daftar_project']=$this->model->daftar_project($this->session->id_user,'desc');                
        $data['biaya']=$this->model;                
        $data['content']='dashboard/home';
        $this->load->view('template',$data);
    }     
    //fungsi tambah project
    public function tambah() {
        if(isset($_POST['create'])){        
            $this->model->nama_project=  $this->input->post('nama_project',TRUE);
            $this->model->project_description=$this->input->post('project_description',TRUE);
            $this->model->id_user=$this->session->id_user;
            $this->model->insert();
                $query=$this->model->cek_project($this->input->post('nama_project',TRUE),$this->session->id_user);
                $id_project=$query->row()->id_project;
                    $session=array(
                        'id_project'=>$id_project,                
                        'nama_project'=>$this->input->post('nama_project',TRUE) 
                    );
                    $this->session->set_userdata($session);                    
              
            redirect('project/overview_project');
        }else{
            $data['title']='COCOMO | Tambah Project';
            $data['content']='dashboard/tambah';            
            $this->load->view('template',$data);
        }
    }
    //fungsi untuk print hasil estimasi
    public function print_hasil(){    
	$id=$this->uri->segment(3);
	$this->db->where('id_project',$id);        
	$query=  $this->db->get('cocomo_project');
        $id_project=$query->row()->id_project;            
        $nama_project=$query->row()->nama_project;            
        $data['title']='Mission Complete';
        $data['project']=  $this->model->read($id,'DESC');        
        $this->load->view('project/print_hasil',$data);
        $html = $this->output->get_output();        
        $this->load->library('dompdf_gen');        
        $this->dompdf->load_html($html);
        $this->dompdf->render();        
        $this->dompdf->set_base_path('localhost/dota/assets/css/bootsrap.min.css');
        $this->dompdf->stream('print_hasil_'.$nama_project.'.pdf');    
      

      /* End of file welcome_pdf.php */
      /* Location: ./application/controllers/welcome_pdf.php */
    }
    //fungsi untuk melihat detail 
    public function detail() {
        $id=  $this->uri->segment(3);
        $data['title']='COCOMO &reg | Detail Project';
        $data['detail']=$this->model->detail($id);
        $data['tdi']=$this->mtdi->dashboardTdi($id);
        $data['fungsi']=$this->mfungsi->getData($id,'fungsi');        
        $data['table']=$this->mfungsi->getData($id,'table');
        $data['model']=$this->mmodel->getModel($id);        
        $data['content']='dashboard/detail';
        $this->load->view('template',$data);
    }
    //fungsi untuk inisialisasi session yang diperlukan
    public function select(){
        $id=  $this->uri->segment(3);
        $q=$this->mproject->cek_project_by_id($id);
        $session=array(
            'id_project'=>$id,                                        
            'nama_project'=>$q->row()->nama_project                                        
            );
        $this->session->set_userdata($session);
        redirect('project/overview_project');
    }
    
    //fungsi untuk menghapus project sesuai id project
    public function delete(){
        $id=$this->uri->segment(3);        
        $this->db->where('id_project',$id);        
        $this->db->delete('cocomo_project'); 
        redirect('dashboard');        
    }
    //fungsi untuk melihat riwayat estimasi
    public function history() {
        $id=$this->uri->segment(3);                
        $data['title']='COCOMO | Riwayat Estimasi';
        $data['history']=  $this->model->cekHistory($id);  
        $data['project']=$this->model->detail($id)->row_array();                
        $data['content']='project/history';
        $this->load->view('template',$data);
    }
}
