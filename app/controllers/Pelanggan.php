<?php

class Pelanggan extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Pelanggan';
        $data['pelanggan'] = $this->model('Pelanggan_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data Pelanggan';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggan/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function formubah($id)
    {
        $data['title'] = 'Ubah Data Pelanggan';
        $data['ubahdata'] = $this->model('Pelanggan_model')->ubah($id);

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('pelanggan/ubah_data', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pelanggan_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Pelanggan');
            exit;
        }
    }

    public function prosesubah()
    {
        if ($this->model('Pelanggan_model')->prosesubah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Pelanggan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Pelanggan_model')->hapus($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapuskan', 'success');
            header('Location: '.BASEURL.'Pelanggan');
            exit;
        }
    }

    
}
