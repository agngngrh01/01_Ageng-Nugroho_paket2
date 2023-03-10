<?php

class M_generate extends CI_Model{
    public function getPengaduanByTgl($tglAwal, $tglAkhir){
        // $query = "SELECT tbl_pengaduan.id_pengaduan, tbl_pengaduan.nik, tbl_pengaduan.isi_laporan, tbl_pengaduan.status, tbl_masyarakat.nama FROM tbl_pengaduan, tbl_masyarakat
        // WHERE tbl_pengaduan.nik = tbl_masyarakat.nik AND tbl_pengaduan.tgl_pengaduan BETWEEN '".$tglAwal."' AND '".$tglAkhir."' ORDER BY tbl_pengaduan.tgl_pengaduan ASC";
        
        $query = $this->db->select('*')
                ->from('tbl_tanggapan')
                ->join('tbl_pengaduan', 'tbl_pengaduan.id_pengaduan = tbl_tanggapan.id_pengaduan')
                ->join('tbl_masyarakat', 'tbl_masyarakat.nik = tbl_pengaduan.nik')
                ->get();
        return $query->result(); 
    }

    public function getMasyarakatAll(){
        return $this->db->get('tbl_masyarakat')->result();
    }
     public function getTanggapanAll()
    {
        $query = "SELECT tbl_masyarakat.nama as nama_masyarakat, tbl_admin.nama as nama_admin, isi_laporan, tanggapan, tgl_pengaduan  FROM tbl_tanggapan 
        JOIN tbl_admin ON tbl_admin.id_admin = tbl_tanggapan.id_admin 
        JOIN tbl_pengaduan ON tbl_pengaduan.id_pengaduan = tbl_tanggapan.id_pengaduan
        JOIN tbl_masyarakat ON tbl_pengaduan.nik = tbl_masyarakat.nik";
        return $this->db->query($query)->result();
        $id = md5($this->input->post('id'));
        $this->db->set('status',$this->input->post('status'));
        $this->db->where('md5(id_pengaduan)',$id);
        $this->db->update('tbl_tanggapan');
    }
    


    public function getPetugasAll(){
        return $this->db->get_where('tbl_admin',['level' => 2])->result();
    }
}