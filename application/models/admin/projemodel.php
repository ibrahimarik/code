<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Projemodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    public function projeekle($enlem=null,$boylam=null,$proje=null,$projesahip=null,$baslangic=null,$bitis=null,$durum=null,$tarih=null,$nakdi=null,$fiziki=null,$resim=null,$tanitim=null)
    {
        $sql = "call projeekle(?,?,?,?,?,?,?,?,?,?,?,?)";
        $execute = $this->db->query($sql, array($enlem,$boylam,$proje,$projesahip,$baslangic,$bitis,$durum,$tarih,$nakdi,$fiziki,$resim,$tanitim));
        return $execute;
    }

    public function guncelle($id=null,$enlem=null,$boylam=null,$proje=null,$projesahip=null,$baslangic=null,$bitis=null,$durum=null,$tarih=null,$nakdi=null,$fiziki=null,$resim=null,$tanitim=null)
    {
        $sql = "call projeguncelle(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $execute = $this->db->query($sql, array($id,$enlem,$boylam,$proje,$projesahip,$baslangic,$bitis,$durum,$tarih,$nakdi,$fiziki,$resim,$tanitim));
        return $execute;
    }

    public function proje($id=null)
    {
        $sql = "call proje(?)";
        $execute = $this->db->query($sql, array($id));
        return $execute->result();

    }
    public function sil($id=null)
    {
        $sql = "call projesil(?)";
        $execute = $this->db->query($sql, array($id));
        return $execute->result();
    }

    public function durum()
    {
        $query = $this->db->query("SELECT * FROM durum;");
        return $query->result_array();

    }




    public function hudut($id=null)
    {
        $sql = "call hudut(?)";
        $execute = $this->db->query($sql, array($id));
        return $execute->result();

    }








    public function varmi($tablo,$alan,$alan1,$icerik)
    {
        $query = $this->db->get_where($tablo, array('katid' => $alan1,$alan => $icerik));
        return ($query->num_rows == 1) ? TRUE : FALSE;
    }


    public function kategoriekle($tablo=null,$katid,$kategori=null,$aciklama=null)
    {
        $data = array(
            'katid' => $katid,
            'kategori' => $kategori,
            'aciklama' => $aciklama,
            'saveuser' => $this->session->userdata('sicil'),
            'savedate' => date('Y-m-d H:i:s')
        );
        return $this->db->insert($tablo, $data);
    }

    public function haberekle($ustkat=null,$kat=null,$seo=null,$baslik=null,$ozet=null,$icerik=null,$resim=null)
    {
        if($resim=="")
        {
            $data = array(
                'ustkatid' => $ustkat,
                'katid' => $kat,
                'seo' => $seo,
                'baslik' => $baslik,
                'ozet' => $ozet,
                'icerik' => $icerik,
                'saveuser' => $this->session->userdata('sicil'),
                'savedate' => date('Y-m-d H:i:s')
            );
        }
        else
        {
            $data = array(
                'ustkatid' => $ustkat,
                'katid' => $kat,
                'seo' => $seo,
                'baslik' => $baslik,
                'ozet' => $ozet,
                'icerik' => $icerik,
                'resim' => $resim,
                'saveuser' => $this->session->userdata('sicil'),
                'savedate' => date('Y-m-d H:i:s')
            );
        }



        return $this->db->insert('haberler', $data);
    }


    public function bilgial($kategori)
    {
        $row = $this->db->get_where('kategori', array('id' => $kategori))->row();
        /*
        $data = array(
            'kategori' => $row->kategori
        );
        return $data;
        */
        return $row->id;
    }


    public function haberguncelle($guncid=null,$ustkatid=null,$katid=null,$seo=null,$baslik=null,$ozet=null,$icerik=null,$resim=null)
    {

        if($resim=="" or $resim == null)
        {
            $data = array(
                'ustkatid' => $ustkatid,
                'katid' => $katid,
                'seo' => $seo,
                'baslik' => $baslik,
                'ozet' => $ozet,
                'icerik' => $icerik,
                'edituser' => $this->session->userdata('sicil'),
                'editdate' => date('Y-m-d H:i:s')
            );
        }
        else
        {
            $data = array(
                'ustkatid' => $ustkatid,
                'katid' => $katid,
                'seo' => $seo,
                'baslik' => $baslik,
                'ozet' => $ozet,
                'icerik' => $icerik,
                'resim' => $resim,
                'edituser' => $this->session->userdata('sicil'),
                'editdate' => date('Y-m-d H:i:s')
            );
        }

        $this->db->where('id', $guncid);
        return $this->db->update('haberler', $data);


    }

}