<?php

class Users extends Controller
{
    public function index()
    {
        $data['title'] = 'Data User';
        $data['users'] = $this->model('Users_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('users/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data Users';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('users/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function formubah($id)
    {
        $data['title'] = 'Ubah Data Users';
        $data['ubahdata'] = $this->model('Users_model')->ubah($id);

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('users/ubah_data', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Users_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Users');
            exit;
        }
    }

    public function prosesubah()
    {
        if ($this->model('Users_model')->prosesubah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Users');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Users_model')->hapus($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapuskan', 'success');
            header('Location: '.BASEURL.'Users');
            exit;
        }
    }

    
}
