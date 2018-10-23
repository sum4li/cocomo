<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Penghitungan extends CI_Controller{
    public $totalData;
    public $totalPredictor;
    public $entrophy;
    public $prediktor = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('mpenghitungan');
        $this->load->database();
        $this->load->helper('url');        
    }
    
    function index(){
        $data['title']='Perhitungan';//title
        $kelas=$this->mpenghitungan->getDistinct("kelas");//array("A","B","C");  
        $anemia=$this->mpenghitungan->getDistinct("anemia");
        $nyeri_haid=$this->mpenghitungan->getDistinct("nyeri_haid");
        $susah_hamil=$this->mpenghitungan->getDistinct("susah_hamil");
        $benjolan_perut=$this->mpenghitungan->getDistinct("benjolan_perut");
        $pendarahan=$this->mpenghitungan->getDistinct("pendarahan");
        $nyeri_berhubungan_seksual=$this->mpenghitungan->getDistinct("nyeri_berhubungan_seksual");
        $cepat_lelah=$this->mpenghitungan->getDistinct("cepat_lelah");
        $penurunan_berat_badan=$this->mpenghitungan->getDistinct("penurunan_berat_badan");
        $nyeri_panggul=$this->mpenghitungan->getDistinct("nyeri_panggul");
        $gangguan_pencernaan=$this->mpenghitungan->getDistinct("gangguan_pencernaan");
        $nyeri_perut=$this->mpenghitungan->getDistinct("nyeri_perut");
        $nyeri_punggung=$this->mpenghitungan->getDistinct("nyeri_punggung");
        $penurunan_nafsu_makan=$this->mpenghitungan->getDistinct("penurunan_nafsu_makan");
        $demam=$this->mpenghitungan->getDistinct("demam");
        $sakit_kepala=$this->mpenghitungan->getDistinct("sakit_kepala");
        $kembung=$this->mpenghitungan->getDistinct("kembung");
        $keputihan=$this->mpenghitungan->getDistinct("keputihan");
        $gangguan_bak=$this->mpenghitungan->getDistinct("gangguan_bak");
        $daftarNamaPredictor=array('jenisKelamin','fakultas','asalSma','jalurMasuk','gaji','pekerjaan');
        $daftarPredictor=array($jenisKelamin,$fakultas,$asalSma,$jalurMasuk,$gaji,$pekerjaan);
        
        //menampilkan class
        $this->totalData = $this->mpenghitungan->get_class()->num_rows();
        foreach($daftar_class as $class){                       
            $data[$class]=  $this->mpenghitungan->getIpk($class)->num_rows();
            $this->entrophy += (-($this->mpenghitungan->get_class($Class)->num_rows()/$this->totalData))* log($this->mpenghitungan->getIpk($ipk)->num_rows()/$this->totalData,2);
            $data['total']=$this->totalData;
            $data['Eipk']=$this->entrophy;
        }
        
        //menampilkn predictor
        for($i=0;$i<count($daftarPredictor);$i++){
            $dataGain = array();
            for($j=0;$j<count($daftarPredictor[$i]);$j++){
                $data[$daftarPredictor[$i][$j]."A"]=  $this->mpenghitungan->getPredictor($daftarNamaPredictor[$i],$daftarPredictor[$i][$j],"A")->num_rows();
                $data[$daftarPredictor[$i][$j]."B"]=  $this->mpenghitungan->getPredictor($daftarNamaPredictor[$i],$daftarPredictor[$i][$j],"B")->num_rows();
                $data[$daftarPredictor[$i][$j]."C"]=  $this->mpenghitungan->getPredictor($daftarNamaPredictor[$i],$daftarPredictor[$i][$j],"C")->num_rows();       
                
                $total_temp = $data[$daftarPredictor[$i][$j]."A"]+$data[$daftarPredictor[$i][$j]."B"]+$data[$daftarPredictor[$i][$j]."C"];
                $dataABC = array('A'=>$data[$daftarPredictor[$i][$j]."A"],'B'=>$data[$daftarPredictor[$i][$j]."B"],'C'=>$data[$daftarPredictor[$i][$j]."C"]);
                
                $data[$daftarPredictor[$i][$j]."Entrophy"] = $this->mpenghitungan->getEnthropy($dataABC,$total_temp);
                $dataGain[] = array('total'=>$total_temp,'entropy'=>$data[$daftarPredictor[$i][$j]."Entrophy"]);
            }            
            $data[$daftarNamaPredictor[$i]."GAIN"] = $this->mpenghitungan->getGain($dataGain,$this->totalData,$this->entrophy);
        }
        
        $data['content']='penghitungan/home';
        $this->load->view('template',$data);                
    }
    
    function latihan(){
        $daftarIpk=array("A","B","C");
        for ($i=0;$i<count($daftarIpk);$i++){
            $data['ipk'.$daftarIpk[$i]]=$this->mpenghitungan->getIpk($daftarIpk[$i]);            
        }
        $this['content']='data/latihan';
        $this->load->view('template',$data);
    }
    
}