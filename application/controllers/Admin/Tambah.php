<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('Template/navbar_admin');
        $this->load->view('Admin/tambah_produk');
    }

}

/* End of file Tambah.php */


?>