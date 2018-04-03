<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class loginmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function knt($login, $pass)
    {
        $query = $this->db->get_where('kullanici', array('login' => $login, 'password' => md5($pass)));
        return ($query->num_rows() == 1) ? TRUE : FALSE;
    }
    public function get_bilgi($login)
    {
        $row = $this->db->get_where('kullanici', array('login' => $login))->row();
        $data = array(
            'ad' => $row->ad,
            'soyad' => $row->soyad,
            'yetki' => $row->yetki,
            'resim' => $row->resim,
            'durum' => $row->durum
        );
        //return $row->isim;
        return $data;
    }






/*

    public function profilupdate($sicil=null,$isim=null,$sifre=null,$resim=null)
    {
        if($resim=="")
        {
            $data = array(
                'isim'=>$isim,
                'sifre'=>md5($sifre)
            );
        }
        else
        {
            $data = array(
                'isim'=>$isim,
                'resim'=>$resim,
                'sifre'=>md5($sifre)
            );
        }


        $this->db->where('sicil',$sicil);
        return $this->db->update('kullanici',$data);

    }

    public function kullaniciekle($sicil=null,$isim=null,$sifre=null,$durum=null,$yetki=null,$resim=null)
    {
        if($resim=="")
        {
            $data = array(
                'sicil' => $sicil,
                'isim' => $isim,
                'sifre' => md5($sifre),
                'durum' => $durum,
                'yetki' => $yetki,
                'saveuser' => $this->session->userdata('sicil'),
                'savedate' => date('Y-m-d H:i:s')
            );
        }
        else
        {
            $data = array(
                'sicil' => $sicil,
                'isim' => $isim,
                'sifre' => md5($sifre),
                'resim' => $resim,
                'durum' => $durum,
                'yetki' => $yetki,
                'saveuser' => $this->session->userdata('sicil'),
                'savedate' => date('Y-m-d H:i:s')
            );
        }
        return $this->db->insert('kullanici', $data);
    }

    public function varmi($tablo,$alan,$icerik)
    {
        $query = $this->db->get_where($tablo, array($alan => $icerik));
        return ($query->num_rows == 1) ? TRUE : FALSE;
    }


*/

}
