<?php

Class Model_portofolio extends Ci_Model{
    
    function ambil_data($tabel){
        return $this->db->get($tabel);
    }

    function input_data($data,$tabel){
        $this->db->insert($tabel,$data);
    }

    function ubah_data($tabel,$where){
        return $this->db->get_where($tabel,$where);
    }

    function proses_ubah_data($where,$data,$tabel){
        $this->db->where($where);
        $this->db->update($tabel,$data);
    }

    function hapus_data($where,$tabel){
        $this->db->where($where);
        $this->db->delete($tabel);
    }

}