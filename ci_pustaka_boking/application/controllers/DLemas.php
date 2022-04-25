<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 

class DLemas extends CI_Controller{ 
 
    function __construct(){         
    		parent::__construct();
            $this->load->model('Model_DLemas');
    		$this->load->helper('url');   
    }
 
    public function index()
    {         
    		$data['judul'] = "Digital Learning Management System (D-Lemas)";
            $this->load->view('view_header_dlemas',$data);            
    		$this->load->view('view_form_dlemas',$data);
            $this->load->view('view_footer_dlemas',$data);                 
 	}

 	public function Result()   
    { 
    	             
                $namasiswa = $this->input->post('namasiswa');             
                $nik = $this->input->post('nik');
                $kelas = $this->input->post('kelas');       
                $tempatlahir = $this->input->post('tempatlahir');
                $tanggal = $this->input->post('tanggal');             
                $alamat = $this->input->post('alamat');
                $jeniskelamin = $this->input->post('jeniskelamin');             
                $agama = $this->input->post('agama');                     
        

            $data = array (
                'namasiswa' => $namasiswa,            
                'nik' => $nik,
                'kelas' => $kelas,             
                'tempatlahir' => $tempatlahir, 
                'tanggal' => $tanggal,             
                'alamat' => $alamat, 
                'jeniskelamin' => $jeniskelamin,             
                'agama' => $agama, 
            );

            $this->Model_DLemas->input_data($data,'siswa');

            $data['judul'] = "Digital Learning Management System (D-Lemas)";
            $this->load->view('view_header_dlemas',$data);
            $this->load->view('view_result_dlemas', $data);
            $this->load->view('view_footer_dlemas',$data);
    }

}