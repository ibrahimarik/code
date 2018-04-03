<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guvenlik extends Public_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('loginmodel');
    }
    public function index()
    {
        $this->girisKontrol();
        redirect(base_url('login'));
    }
    public function girisKontrol ()
    {
        $girisYaptimi = $this->session->userdata('login_admin');
        if ($girisYaptimi == true) {
            redirect('yonetim/portal');
        }
    }

    public function giris()
    {
        $this->girisKontrol();

        if ($this->input->post() == false) {
            $this->load->view('login');
        } else {
            $knt = $this->loginmodel->knt($this->input->post('login'), $this->input->post('pass'));
            if ($knt) {
                $login = $this->input->post('login');
                $bilgi = $this->loginmodel->get_bilgi($login);
                $data = array(
                    'login' => $login,
                    'ad'    => $bilgi['ad'],
                    'soyad' => $bilgi['soyad'],
                    'resim' => $bilgi['resim'],
                    'durum' => $bilgi['durum'],
                    'yetki' => $bilgi['yetki'],
                    'login_admin' => TRUE
                );
                $this->session->set_userdata($data);
                redirect('yonetim/portal');
            } else {
                redirect('guvenlik/giris');
            }
        }
    }

    public function cikis()
    {
        $this->session->unset_userdata('login_admin');
        redirect(base_url('guvenlik/giris'));
    }


}

/* End of file guvenlik.php */
/* Location: ./application/controllers/guvenlik.php */