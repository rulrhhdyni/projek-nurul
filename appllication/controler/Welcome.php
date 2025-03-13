<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function home() {
		echo "ini halaman home";
	}

	public function form_edit_mahasiswa($id) {
		$data['mahasiswa'] = $this->db->get_where('mahasiswa', array('id' => $id))->row();

		$this->load->view('form_edit_mahasiswa', $data);
	}

	public function edit_mahasiswa() {
		$id = $this->input->post('id');

		$newData['nama'] = $this->input->post('nama');
		$newData['nim'] = $this->input->post('nim');
		$newData['prodi'] = $this->input->post('prodi');
		
		
		$this->db->where('id', $id);

		$result = $this->db->update('mahasiswa', $newData);

		if ($result){
			redirect(base_url('view_mahasiswa'));
		}else {
			//echo "Gagal edit data!";
		}
		
	}

	public function view_mahasiswa() {
		$data['mahasiswa'] = $this->db->get('mahasiswa')->result();
		//echo json_encode($data);
		$this->load->view('view_mahasiswa',$data);
		//$this->load->view('view_mahasiswa');
	}

	public function form_mahasiswa() {
		$this->load->view('form_mahasiswa');
	}

	public function insert_mahasiswa() {
		$data = $this->input->post();
		$result = $this->db->insert('mahasiswa', $data);
	
		if ($result) {
			
			redirect(base_url('view_mahasiswa')); // Redirect ke halaman view mahasiswa
		} else {
			echo "Data gagal disimpan";
		}
	}

//////////////////////////////////////////////////////////////////////////////////////////

public function form_edit_dosen($id) {
	$data['dosen'] = $this->db->get_where('dosen', array('id' => $id))->row();

	$this->load->view('form_edit_dosen', $data);
}

public function edit_dosen() {
	$id = $this->input->post('id');

	$newData['nama'] = $this->input->post('nama');
	$newData['nrp'] = $this->input->post('nrp');
	
	
	
	$this->db->where('id', $id);

	$result = $this->db->update('dosen', $newData);

	if ($result){
		redirect(base_url('view_dosen'));
	}else {
		//echo "Gagal edit data!";
	}
	
}

public function view_dosen() {
	$data['dosen'] = $this->db->get('dosen')->result();
	//echo json_encode($data);
	$this->load->view('view_dosen',$data);
	//$this->load->view('view_mahasiswa');
}

public function form_dosen() {
	$this->load->view('form_dosen');
}

public function insert_dosen() {
	$data = $this->input->post();
	$result = $this->db->insert('dosen', $data);

	if ($result) {
		
		redirect(base_url('view_dosen')); // Redirect ke halaman view mahasiswa
	} else {
		echo "Data gagal disimpan";
	}
}

///////////////////////////////////////////////////////////////////////

public function form_edit_kelas($id) {
	$data['kelas'] = $this->db->get_where('kelas', array('id' => $id))->row();

	$this->load->view('form_edit_kelas', $data);
}

public function edit_kelas() {
    $id = $this->input->post('id');

    $newData['nama'] = $this->input->post('nama');

    $this->db->where('id', $id);

    $result = $this->db->update('kelas', $newData);

    if ($result){
        redirect(base_url('view_kelas')); // Ubah redirect ke view-kelas
    } else {
        //echo "Gagal edit data!";
    }
}

public function view_kelas() {
	$data['kelas'] = $this->db->get('kelas')->result();
	//echo json_encode($data);
	$this->load->view('view_kelas',$data);
	//$this->load->view('view_mahasiswa');
}

public function form_kelas() {
	$this->load->view('form_kelas');
}

public function insert_kelas() {
	$data = $this->input->post();
	$result = $this->db->insert('kelas', $data);

	if ($result) {
		
		redirect(base_url('view_kelas')); // Redirect ke halaman view mahasiswa
	} else {
		echo "Data gagal disimpan";
	}
}
}
