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


  public function index()
  {
    $data['title'] = "Dashboard ";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['wisata'] = $this->m_data->getWisata()->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }


  // kontak admin
  public function kontak()
  {
    $data['title'] = "Kontak";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['wisata'] = $this->m_data->getWisata()->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/kontak', $data);
    $this->load->view('templates/footer');
  }


  public function Detail()
  {
    $data['title'] = "Detail Wisata";
    $id =  $this->uri->segment(3);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['wisata'] = $this->m_data->selectWisata($id)->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/detail', $data);
    $this->load->view('templates/footer');
  }


  public function Profile()
  {
    $data['title'] = "Profile";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $id = $data['user']['id'];
    $data['total_cart'] = $this->m_data->getTotalCart($id)->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/profile', $data);
    $this->load->view('templates/footer');
  }


  public function settingProfile()
  {
    $data['title'] = "Edit Profile";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/edit_profil', $data);
    $this->load->view('templates/footer');
  }


  public function editProfile()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    $alamat = $this->input->post('alamat');


    // cek gambar
    $upload_image = $_FILES['image']['name'];


    if ($upload_image == true) {

      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['upload_path'] = './assets/images/profile/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $old_image = $data['user']['image'];
        if ($old_image != 'default.jpg') {
          unlink(FCPATH . 'assets/images/profile/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        $this->db->set('image', $new_image);
      }
    } else {
    }
    // var_dump($upload_image);
    // die;
    $this->db->set('name', $name);
    $this->db->set('alamat', $alamat);
    $this->db->where('id', $id);
    $this->db->update('user');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Has Edit</div>
      ');
    redirect('admin/settingProfile');
  }


  // tambah wisaata
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


  // edit wisata
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

  public function kategori()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['wisata'] = $this->db->get('wisata')->result_array();

    $data['kategori'] = ['Pendakian', 'Curug', 'Pemandian', 'Candi', 'Taman'];

    $data['title'] = "Kategori Wisata";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/kategori', $data);
    $this->load->view('templates/footer');
  }

  public function fillWisata()
  {
    $key =  $this->uri->segment(3);

    $data['title'] = "Wisata " . $key;
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['wisata'] = $this->m_data->fillWisata($key)->result();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
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


  public function pesan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pesan'] = $this->db->get('pesan')->result_array();
    $data['title'] = "Manage Pesan";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/pesan', $data);
    $this->load->view('templates/footer');
  }

  public function detailPesan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = "Detail Pesan ";
    $this->session->set_flashdata(null);
    $id =  $this->uri->segment(3);
    $data['detail'] = $this->m_data->getDetailPesan($id)->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/detailpesan', $data);
    $this->load->view('templates/footer');
  }

  public function deletePesan()
  {
    $id =  $this->uri->segment(3);
    $this->db->where('id', $id);
    $this->db->delete('pesan');
    $this->session->set_flashdata('pesan', '<div
    class="alert alert-success alert-message" role="alert">Pesan Berhasil Di Hapus.</div>');
    redirect('admin/pesan');
  }
}
