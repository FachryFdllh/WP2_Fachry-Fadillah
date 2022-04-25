<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 
 
class Model_DLemas extends CI_Model 
{     

    public function tampil_data()     
    {         
        return $this->db->get('siswa');       
    } 

    public function input_data($data, $table)     
    {         
        $this->db->insert($table, $data);     
    } 
 
} 