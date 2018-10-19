<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Email extends CI_Controller {
    
        public function index()
        {
            $this->load->view('header');
            $this->load->view('content/email.php');        
            $this->load->view('footer');
        }
    
    }
    
    /* End of file Email.php */
    