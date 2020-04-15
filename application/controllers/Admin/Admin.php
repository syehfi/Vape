<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('Template/navbar_admin');
        $this->load->view('Admin/index');
        
    }

}

/* End of file admin.php */


?>