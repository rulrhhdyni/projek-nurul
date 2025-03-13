<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function view_kelas()
    {
        $data['kelas'] = $this->db->get('kelas')->result();
        $this->load->view('view_kelas', $data);
    }

    public function deleteUser ($id)
{
    $this->db->where('id', $id);
    $this->db->delete('kelas');
    
   
    redirect(base_url('view_kelas'));
}
}