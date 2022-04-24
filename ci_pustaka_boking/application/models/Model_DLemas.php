<?php 
class Model_DLemas extends CI_Model 
{

	//membuat variable untuk menampung nilai     
	public $kode1, $nama1;  
    //method penjumlahan     
	public function input($data = null)     
	{   
 
        $this->form_validation->set_rules('kode', 'nama', 'required|min_length[3]'); 
 
        if ($this->form_validation->run() != true) 
        {             
            $this->load->view('view_Form_DLemas');         
        } 
        else 
        {             
            $data = [                 
                'kode' => $this->input->post('kode'),                 
                'nama' => $this->input->post('nama'),                             
            ];
 
            $this->load->view('View_Result_DLemas', $data);     
        } 
    } 
}