<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
  }

  public function index()
  {
    $data['title'] = "Pariwisata - Surakarta";
    $data['wisata'] = $this->m_data->getList()->result();

    $this->load->view('templates/home_header', $data);
    $this->load->view('home/index', $data);
    $this->load->view('templates/home_footer', $data);
  }


  public function wisata()
  {
    $data['title'] = "Wisata Surakarta";
    $data['wisata'] = $this->m_data->getList()->result();

    $this->load->view('templates/home_header', $data);
    $this->load->view('home/wisata', $data);
    $this->load->view('templates/home_header', $data);
  }

  public function kontak()
  {
    $data['title'] = "kontak Kami";
    $data['kontak'] = $this->m_data->getList()->result();

    $this->load->view('templates/home_header', $data);
    $this->load->view('home/kontak', $data);
    $this->load->view('templates/home_footer', $data);
  }


  public function kirimPesan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = "Kirim Pesan";

    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $pesan = $this->input->post('pesan');


    $data = [
      'nama' => $nama,
      'email' => $email,
      'pesan' => $pesan,
      'date_created' => time()
    ];

    $this->db->insert('pesan', $data);

    $data['title'] = "Kirim Pesan Berhasil";
    $this->load->view('templates/home_header', $data);
    $this->load->view('home/sukseskirimpesan', $data);
    $this->load->view('templates/home_header', $data);
  }


  public function suksesKirimPesan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = "Kirim Pesan Berhasil";

    var_dump($data);
    die;
    $this->load->view('templates/home_header', $data);
    $this->load->view('home/sukseskirimpesan', $data);
    $this->load->view('templates/home_header', $data);
  }
}
