<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 

class DLemas extends CI_Controller{ 
 
    function __construct(){         
    		parent::__construct();
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
            
    	    $data = [             
                'nama' => $this->input->post('nama'),             
                'nik' => $this->input->post('nik'),
                'kelas' => $this->input->post('kelas'),             
                'tempatlahir' => $this->input->post('tempatlahir'), 
                'tanggal' => $this->input->post('tanggal'),             
                'alamat' => $this->input->post('alamat'), 
                'jeniskelamin' => $this->input->post('jeniskelamin'),             
                'agama' => $this->input->post('agama'),                     
            ];
            $data['judul'] = "Digital Learning Management System (D-Lemas)";
            $this->load->view('view_header_dlemas',$data);
            $this->load->view('view_result_dlemas', $data);
            $this->load->view('view_footer_dlemas',$data);
    }

}