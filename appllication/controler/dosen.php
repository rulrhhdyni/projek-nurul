<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function view_dosen()
    {
        $data['dosen'] = $this->db->get('dosen')->result();
        $this->load->view('view_dosen', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
        redirect(base_url('view_dosen')); 
    }

    public function edit_dosen()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nrp = $this->input->post('nrp');

        // Validate the data
        if ($id && $nama && $nrp) {
            $data = array(
                'nama' => $nama,
                'nrp' => $nrp
            );

            // Update the record in the database
            $this->db->where('id', $id);
            $this->db->update('dosen', $data);

            // Redirect to the view_dosen page
            redirect(base_url('view_dosen'));
        } else {
            // Handle validation error
            // You can set a flash message or redirect back with an error
            redirect(base_url('view_dosen'));
        }
    }
}
