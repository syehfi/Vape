<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
        
        
        public function index()
        {
            $this->load->helper('url');
            $this->load->view('Template/navbar');
            $this->load->view('Home/index');
        }
    
    }
    
    /* End of file Home.php */
    
?>