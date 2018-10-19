<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kategori extends CI_Controller {
    
        public function index()
        {
            $this->load->view('header');
            $this->load->view('content/kategori');
            $this->load->view('footer');
        }
    
    }
    
    /* End of file Kategori.php */
    