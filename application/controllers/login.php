<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
	public function index()
	{
        $this->girisKontrol();
		$this->load->view('login');
	}

    public function girisKontrol ()
    {
        $girisYaptimi = $this->session->userdata('login_admin');
        if ($girisYaptimi == true) {
            redirect('yonetim/portal');
        }
    }
}
