<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	public function __construct ()
	{
		parent::__construct();
	}
}

class Public_Controller extends MY_Controller
{
	public function __construct ()
	{
		parent::__construct();
	}
}
class Frontend_Controller extends MY_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->loginKontrol();
    }
    public function loginKontrol()
    {
        if ($this->session->userdata('login_user') == null) {
            redirect('guvenlik/giris');
        }
    }
}
class Backend_Controller extends MY_Controller
{
	public function __construct ()
	{
		parent::__construct();
		$this->loginKontrol();
	}
	public function loginKontrol()
	{
		if ($this->session->userdata('login_admin') == null) {
			redirect('guvenlik/giris');
		}
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */