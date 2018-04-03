<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function hata()
    {
        $this->load->view('errors/404');
    }
}
