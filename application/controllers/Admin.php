<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
    is_logged_in();
  }

  public function wisata()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['wisata'] = $this->db->get('wisata')->result_array();
    $data['kategori'] = ['Pendakian', 'Curug', 'Pemandian', 'Candi', 'Taman'];

    $data['title'] = "Manage Wisata";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/atur-wisata', $data);
    $this->load->view('templates/footer');
  }

  public function addWisata()
  {
    $data['title'] = "add Wisata";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $nama = $this->input->post('nama');
    $kategori = $this->input->post('kategori');
    $tiket = $this->input->post('tiket');
    $lokasi = $this->input->post('lokasi');
    $waktu = $this->input->post('waktu');
    $keterangan = $this->input->post('keterangan');

    // cek gambar
    $upload_image = $_FILES['image'];

    if ($upload_image) {

      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['upload_path'] = './assets/list_item/';

      $this->load->library('upload', $config);

      $this->upload->do_upload('image');
      $new_image = $this->upload->data('file_name');
    }

    $data = [
      'nama_wisata' => $nama,
      'kategori' => $kategori,
      'lokasi' => $lokasi,
      'keterangan' => $keterangan,
      'waktu' => $waktu,
      'tiket' => $tiket,
      'image' => $new_image,
    ];

    $this->db->insert('wisata', $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Sukses Menambah Wisata </div>');

    redirect('admin/wisata');
  }

  public function updateWisata()
  {
    $data['title'] = "Update Wisata";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $nama = $this->input->post('nama');
    $kategori = $this->input->post('kategori');
    $tiket = $this->input->post('tiket');
    $lokasi = $this->input->post('lokasi');
    $waktu = $this->input->post('waktu');
    $keterangan = $this->input->post('keterangan');
    $id = $this->input->post('id');

    //jika ada gambar yang akan diupload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image == true) {

      $config['upload_path'] = './assets/list_item/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '3000';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $gambar_lama = $data['wisata']['image'];
        if ($gambar_lama != 'default.jpg') {
          unlink(FCPATH . 'assets/list_item/' . $gambar_lama);
        }
        $gambar_baru = $this->upload->data('file_name');
        $this->db->set('image', $gambar_baru);
      }
    } else {
    }


    $this->db->set('nama_wisata', $nama);
    $this->db->set('kategori', $kategori);
    $this->db->set('tiket', $tiket);
    $this->db->set('keterangan', $keterangan);
    $this->db->set('waktu', $waktu);
    $this->db->set('lokasi', $lokasi);
    $this->db->where('id', $id);
    $this->db->update('wisata');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Sukses Update Wisata </div>');

    redirect('admin/wisata');
  }
  
  public function deleteWisata()
  {
    $id =  $this->uri->segment(3);
    $this->db->where('id', $id);
    $this->db->delete('wisata');

    $this->session->set_flashdata('pesan', '<div
    class="alert alert-success alert-message" role="alert">Wisata Berhasil Di Hapus.</div>');
    redirect('admin/wisata');
  }