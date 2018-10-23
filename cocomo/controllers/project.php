<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Project extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('mproject','mtdi','mfungsi','mmodel'));                              
        $this->model = $this->mproject;
        $this->load->database();
        if($this->session->status != 'login'){
            redirect('user/login');
        }
        if(empty($this->session->userdata('id_project'))){
            redirect('dashboard/');            
        }        
    }
    //halaman awal
    public function index(){
        redirect('project/overview');        
    }
    public function overview_project(){
        $id=  $this->session->id_project;
        $data['title']='COCOMO &reg | Detail Project';
        $data['detail']=$this->model->detail($id);
        $data['tdi']=$this->mtdi->dashboardTdi($id);
        $data['fungsi']=$this->mfungsi->getData($id,'fungsi');        
        $data['table']=$this->mfungsi->getData($id,'table');
        $data['model']=$this->mmodel->getModel($id);                
        $data['content']='project/overview_project';
        $this->load->view('template',$data);
    }
    //edit fungsi
    public function edit_project(){                   
        if(isset($_POST['submit'])){                       
            $this->model->nama_project=  $this->input->post('nama_project');
            $this->model->project_description=  $this->input->post('project_description');            
            $this->model->update($this->session->id_project);
            redirect('project/overview_project');
        }else{
            $data['title']='COCOMO | Ubah Project';            
            $data['edit']=$this->model->detail($this->session->id_project);
            $data['content']='project/edit_project';            
            $this->load->view('template',$data);  
        }
    }
    //step input TDI
    public function tdi(){
        $question=$this->uri->segment(3);
        if(isset($_POST['submit'])){
            $url=$question+1;
            $this->mtdi->value=$this->input->post('value');
            $this->mtdi->id_gsc=$this->input->post('id_gsc');
            $this->mtdi->id_project=$this->session->id_project;
            $this->mtdi->insertTdi();
            if($question>14){
                redirect('project/overview_tdi');
            }else{
                redirect('project/tdi/'.$url);                
            }
        }else{            
            $data['title']='COCOMO | TDI';
            if($question>14 || $question<1){                
                redirect('project/overview_tdi');
            }else{
                $data['page']=$question;
                $data['gsc']=  $this->mtdi->getGsc($question);                
                $data['gscpoint']=  $this->mtdi->getGscPoint($question);
                $data['tdi']=  $this->mtdi->getTdi($question);
                $data['content']='project/tdi';                            
            }
            $this->load->view('template',$data);
        }
    }
    //step fungsi
    public function fungsi() {
        $id=  $this->session->id_project;
        $data['title']='COCOMO | Fungsional';                
        $data['fungsi']=$this->mfungsi->getData($id,'fungsi');        
        $data['table']=$this->mfungsi->getData($id,'table');        
        $data['content']='project/fungsi/fungsi';            
        $this->load->view('template',$data);
    }
    //tambah fungsi
    public function tambah_fungsi(){
        if(isset($_POST['submit'])){                       
            $this->mfungsi->fp=  $this->input->post('fp');
            $this->mfungsi->tipe=  $this->input->post('tipe');
            $this->mfungsi->bahasa=  $this->input->post('bahasa');
            $this->mfungsi->DET=  $this->input->post('DET');
            $this->mfungsi->FTR=  $this->input->post('FTR');
            $this->mfungsi->weight=  $this->mfungsi->getWeight($this->input->post('tipe'),$this->input->post('DET'),$this->input->post('FTR'));
            $this->mfungsi->id_project=  $this->session->id_project;
            $this->mfungsi->insert('fungsi');
            redirect('project/fungsi');
        }else{
            $data['title']='COCOMO | Tambah Fungsi';            
            $data['content']='project/fungsi/tambah_fungsi';            
            $this->load->view('template',$data);  
        }
    }
    //edit fungsi
    public function edit_fungsi(){        
        $id=$this->uri->segment(3);
        if(isset($_POST['submit'])){                       
            $this->mfungsi->fp=  $this->input->post('fp');
            $this->mfungsi->tipe=  $this->input->post('tipe');
            $this->mfungsi->bahasa=  $this->input->post('bahasa');
            $this->mfungsi->DET=  $this->input->post('DET');
            $this->mfungsi->weight=  $this->mfungsi->getWeight($this->input->post('tipe'),$this->input->post('DET'),$this->input->post('FTR'));
            $this->mfungsi->FTR=  $this->input->post('FTR');            
            $this->mfungsi->update('fungsi',$id);
            redirect('project/fungsi');
        }else{
            $data['title']='COCOMO | Edit Fungsi';
            $data['fungsi']=$this->mfungsi->getEdit('fungsi',$id);
            $data['content']='project/fungsi/edit_fungsi';            
            $this->load->view('template',$data);  
        }
    }
    //delete fungsi
    public function delete_fungsi(){        
        $id=$this->uri->segment(3);
        $this->mfungsi->delete($id);        
        redirect('project/fungsi');
    }
    //fungsi kosong     
    public function fungsi_kosong() {
        $id=  $this->session->id_project;
        $data['title']='COCOMO | Fungsi Belum Lengkap';                
        $data['fungsi']=$this->mfungsi->getData($id,'fungsi');
        $data['content']='project/fungsi/fungsi_kosong';            
        $this->load->view('template',$data);
    }
    //tambah table
    public function tambah_table(){
        if(isset($_POST['submit'])){                       
            $this->mfungsi->fp=  $this->input->post('fp');
            $this->mfungsi->tipe=  $this->input->post('tipe');            
            $this->mfungsi->DET=  $this->input->post('DET');
            $this->mfungsi->RET=  $this->input->post('RET');
            $this->mfungsi->weight=  $this->mfungsi->getWeight($this->input->post('tipe'),$this->input->post('DET'),$this->input->post('RET'));
            $this->mfungsi->id_project=  $this->session->id_project;
            $this->mfungsi->insert('table');
            redirect('project/fungsi');
        }else{
            $data['title']='COCOMO | Tambah Table';            
            $data['content']='project/fungsi/tambah_table';            
            $this->load->view('template',$data);  
        }
    }
    //edit fungsi
    public function edit_table(){   
        $id=$this->uri->segment(3);        
        if(isset($_POST['submit'])){                       
            $this->mfungsi->fp=  $this->input->post('fp');
            $this->mfungsi->tipe=  $this->input->post('tipe');            
            $this->mfungsi->DET=  $this->input->post('DET');
            $this->mfungsi->RET=  $this->input->post('RET'); 
            $this->mfungsi->weight=  $this->mfungsi->getWeight($this->input->post('tipe'),$this->input->post('DET'),$this->input->post('RET'));
            $this->mfungsi->update('table',$id);
            redirect('project/fungsi');
        }else{
            $data['title']='COCOMO | Edit Table';            
            $data['edit']=$this->mfungsi->getEdit('table',$id);
            $data['content']='project/fungsi/edit_table';            
            $this->load->view('template',$data);  
        }
    }
    //delete table
    public function delete_table(){        
        $id=$this->uri->segment(3);
        $this->mfungsi->delete($id);        
        redirect('project/fungsi');
    }
    //fungsi kosong     
    public function table_kosong() {
        $id=  $this->session->id_project;
        $data['title']='COCOMO | Table Belum Lengkap';                
        $data['table']=$this->mfungsi->getData($id,'table');
        $data['content']='project/fungsi/table_kosong';            
        $this->load->view('template',$data);
    }
    //step ketiga memasukan model
    public function model() {
        if(isset($_POST['submit'])){           
            $this->mmodel->model= $this->input->post('model');            
            $this->mmodel->insert();            
            redirect('project/overview_project');
        }else{
            $data['title']='COCOMO | Model';
            $data['content']='project/model';            
            $data['model']=$this->mmodel->getModel($this->session->id_project);            
            $this->load->view('template',$data);
        }
    }
    //fungsi untuk menghitung estimasi
    public function hitung(){
        $message=array(
            'tdi'=>'<div class="alert alert-danger alert-dismissible" id="notifications">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
                        Anda harus input 14 nilai TDI untuk menghitung Estimasi
                     </div>',                    
            'fungsi'=>'<div class="alert alert-danger alert-dismissible" id="notifications">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
                        Anda harus mengisi minimal 1 fungsi menghitung Estimasi
                     </div>',                    
            'table'=>'<div class="alert alert-danger alert-dismissible" id="notifications">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
                        Anda harus mengisi minimal 1 table untuk menghitung Estimasi
                     </div>',                    
            'model'=>'<div class="alert alert-danger alert-dismissible" id="notifications">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
                        Anda harus memilih salah satu model untuk menghitung Estimasi
                     </div>',                    
        );
        //inisialisasi jumlah baris tdi apakah sudah penuh belum
        $jumlahTdi=$this->mtdi->cekJumlahTdi($this->session->id_project)->num_rows();
        //jika jumlah baris tdi < 14 maka redirect kehalam tdi keberapa
        if($jumlahTdi < 14):
            $this->session->set_flashdata($message);                
            $url=$jumlahTdi + 1;            
            redirect('project/tdi/'.$url);
        else:
            //hitung TCA
            $TDI=  $this->mtdi->getNilaiTdi()->row()->value;
            $TCA=  $this->mtdi->tca($TDI);            
        endif;
        
        $jumlahFungsi=$this->mfungsi->getData($this->session->id_project,'fungsi');//cek jumlah fungsi
        $jumlahTable=$this->mfungsi->getData($this->session->id_project,'table');//cek jumlah table
        if($jumlahTable->num_rows() < 1):
            $this->session->set_flashdata($message);                
            redirect('project/table_kosong');//redirect kehalamn untuk isi table
        elseif($jumlahFungsi->num_rows() <1) :
            redirect('project/fungsi_kosong');//redirect kehalaman untuk isi fungsi
            $this->session->set_flashdata($message);                
        else:
            //hitung UFP         
            $UFPSQL=  $this->mfungsi->getJumlahBahasa('SQL')->row()->weight;
            $UFPPHP=  $this->mfungsi->getJumlahBahasa('PHP')->row()->weight;
            $UFPHTML=  $this->mfungsi->getJumlahBahasa('HTML')->row()->weight;
            $UFPJS=  $this->mfungsi->getJumlahBahasa('Javascript')->row()->weight;
            //nilai ufp biasa
            $UFP = array($UFPSQL,$UFPPHP,$UFPHTML,$UFPJS);
            $UFP = array_sum($UFP);

            $UFPSQL *= 37;
            $UFPPHP *=53;
            $UFPHTML *= 58;
            $UFPJS *=58;
            //multiplied ufp setelah dikalikan faktor bahasa pemrogaman
            $MUFP=array($UFPSQL,$UFPPHP,$UFPHTML,$UFPJS);
            $MUFP=  array_sum($MUFP);
            //nilai fp dan loc
            $FP=round($TCA*$UFP,3);//rumus untuk hitung Function Point
            $LOC=round($TCA*$MUFP,3);//rumus untuk hitung Line of Code
        endif;
        
        //cek apakah user sudah mengisi nilai model untuk aplikasi mereka
        $cekModel=  $this->mmodel->getModel($this->session->id_project);
        if($cekModel->num_rows() < 1)://jika belum
            $this->session->set_flashdata($message);                
            redirect('project/model');//redirect kehalaman dimana user harus mengisi nilai model
        else: //jika user sudah mengisi nilai model untuk aplikasi mereka
        //hitung estimasi
            //inisialisasi nilai model cocomo
            $a=  $this->mmodel->getNilaiModel()['a'];
            $b=  $this->mmodel->getNilaiModel()['b'];
            $c=  $this->mmodel->getNilaiModel()['c'];
            $d=  $this->mmodel->getNilaiModel()['d'];
            //rumus untuk hitung nilai Effort 
            $E=round($a*pow(($LOC/1000),$b),3);
            //rumus untuk hitung nilai duration
            $D=round($c* pow($E,$d),3);
            //rumus untuk hitung nilai person
            $P=round($E/$D,3);            
        endif;        
        
        //inisialisasi query untuk cek keberadaaan history sesuai id project
        $dataUpdate=array(            
            'id_project'=>$this->session->id_project,
            'fp'=>$FP,
            'loc'=>$LOC,
            'effort'=>$E,
            'duration'=>$D,
            'person'=>$P,
            'update_date'=>date('Y-m-d H:i:s')
        );
        $dataWhere=array(            
            'id_project'=>$this->session->id_project,
            'fp'=>$FP,
            'loc'=>$LOC,
            'effort'=>$E,
            'duration'=>$D,
            'person'=>$P
        );
        
        
        $dataHistory=  $this->model->history($this->session->id_project)->row_array();        

        if($dataHistory!=$dataWhere):
            $this->db->insert('cocomo_history',$dataUpdate);        
        else:   
            $this->db->set('update_date',date('Y-m-d H:i:s'));
            $this->db->where($dataWhere);
            $this->db->update('cocomo_history',$dataHistory);
        endif;
        
        $dataProject=array(                        
            'tca'=>$TCA,
            'ufp'=>$UFP,
            'fp'=>$FP,
            'loc'=>$LOC,
            'effort'=>$E,
            'duration'=>$D,
            'person'=>$P
        );
        
        $this->db->where('id_project',  $this->session->id_project);
        $this->db->update('cocomo_project',$dataProject);
        
        $data_biaya=$this->model->get_biaya($this->session->id_project)->row_array();
        
        
        $dataProject=  $this->model->detail($this->session->id_project)->row_array();        
            
        $bbb=$data_biaya['bbb'];
        $btk=$data_biaya['btk'];
        $bop=$data_biaya['bop'];
        
        $biaya=($bbb)+($btk*ceil($dataProject['person']))+($bop*ceil($dataProject['duration']));        
        $laba=$data_biaya['laba']/100*$biaya;       
        $biaya=$biaya+$laba;
        
        $this->model->biaya=$biaya;
        $this->model->update_biaya($this->session->id_project);
        
        $data['title']='COCOMO | Hitung Estimasi';
        $data['content']='project/hitung'; 
        $data['ufp']=$UFP;
        $data['mufp']=$MUFP;
        $data['tca']=$TCA;
        $data['fp']=$FP;
        $data['loc']=$LOC;
        $data['e']=$E;
        $data['d']=$D;
        $data['p']=$P;
        $biaya=  $this->model->get_biaya($this->session->id_project)->row_array();
        $data['biaya']=$biaya;
        $this->load->view('template',$data);
    }
    //fungsi untuk hitung biaya
    public function biaya(){        
        if(isset($_POST['submit'])){                       
            $data['title']='COCOMO | Hitung Biaya';
            $dataProject=  $this->model->detail($this->session->id_project)->row_array();        
            
            $bbb=  $this->input->post('bbb');
            $btk=  $this->input->post('btk')*ceil($dataProject['person']);
            $bop=  $this->input->post('bop')*ceil($dataProject['duration']);
            
            $biaya=$bbb+$btk+$bop;
            $laba=  $this->input->post('laba')/100*$biaya;
            $biaya=$biaya+$laba;
            
            $this->model->bbb= $this->input->post('bbb');
            $this->model->btk= $this->input->post('btk');
            $this->model->bop= $this->input->post('bop');
            $this->model->laba= $this->input->post('laba');            
            $this->model->biaya= $biaya;
            $this->model->insert_biaya();            
//            $data_biaya=array(
//                'bbb'=>$bbb,
//                'btk'=>$btk,
//                'bop'=>$bop,
//                'biaya'=>$biaya,
//            );
//            $this->session->set_flashdata($data_biaya);
//            $data['content']='project/biaya';            
//            $this->load->view('template',$data);  
            redirect('project/hitung');
        }else{
            $cekProject=$this->model->detail($this->session->id_project);
            if(empty($cekProject->row()->effort)):
                redirect('project/hitung');
            endif;
            $data['title']='COCOMO | Hitung Biaya';            
            $data['content']='project/biaya';            
            $this->load->view('template',$data);  
        }
    }
    //fungsi untuk cek tdi
    public function cek_tdi(){
        //inisialisasi jumlah baris tdi apakah sudah penuh belum
        $jumlahTdi=$this->mtdi->cekJumlahTdi($this->session->id_project)->num_rows();
        //jika jumlah baris tdi < 14 maka redirect kehalam tdi keberapa
        if($jumlahTdi < 14):
            $url=$jumlahTdi + 1;                    
            redirect('project/tdi/'.$url);
        elseif($jumlahTdi == 14):
            redirect('project/overview_tdi');
        endif;
    }
    //fungsi untuk overview nilai tdi yang telah dipilih
    public function overview_tdi() {
        $data['title']='COCOMO | Overview TDI';
        $data['tdi']=$this->mtdi->dashboardTdi($this->session->id_project);        
        $data['content']='project/overview_tdi';
        $this->load->view('template',$data);
    }
    //fugnsi untuk menghilangkan session setelah project selesai
    public function simpan(){
        $data = array('id_project','nama_project');
        $this->session->unset_userdata($data);
        redirect('dashboard');        
    }
    //fungsi untuk melihat riwayat estimasi
    public function history() {
        $id=$this->session->id_project;                
        $data['title']='COCOMO | Riwayat Estimasi';
        $data['history']=  $this->model->cekHistory($id);        
        $data['content']='project/history';
        $this->load->view('template',$data);
    }
    
}
