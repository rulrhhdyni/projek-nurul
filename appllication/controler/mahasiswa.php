<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'akademik 2';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi menambahkan mahasiswa
function addMahasiswa($nama, $nim, $prodi_id, $kelas_id) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, nim, prodi_id, kelas_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $nama, $nim, $prodi_id, $kelas_id);
    $stmt->execute();
    $stmt->close();
}

// Fungsi mendapatkan semua mahasiswa
function getAllMahasiswa() {
    global $conn;
    $query = "SELECT m.id, m.nama, m.nim, p.nama_prodi, k.nama_kelas 
              FROM mahasiswa m 
              JOIN prodi p ON m.prodi_id = p.id 
              JOIN kelas k ON m.kelas_id = k.id";
    return $conn->query($query);
}

// Fungsi mendapatkan data mahasiswa berdasarkan ID
function getMahasiswaById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result->fetch_assoc();
}

// Fungsi update data mahasiswa
function updateMahasiswa($id, $nama, $nim, $prodi_id, $kelas_id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE mahasiswa SET nama = ?, nim = ?, prodi_id = ?, kelas_id = ? WHERE id = ?");
    $stmt->bind_param("ssiii", $nama, $nim, $prodi_id, $kelas_id, $id);
    $stmt->execute();
    $stmt->close();
}
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

    // Fungsi hapus mahasiswa
    public function delete($id) {
        $this->db->where('id', $id);
        $hapus = $this->db->delete('mahasiswa');

        if ($hapus) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        }
        
        redirect(base_url('views_mahasiswa')); // Redirect ke halaman mahasiswa
    }
}