<?php

class Model_portofolio extends CI_Model{
    function ambil_data($tabel){
        return $this->db->get($tabel);
    }

    function input_data($data,$tabel){
        $this->db->insert($tabel,$data);
    }

    function ambil_id($where,$tabel){
        return $this->db->get_where($tabel,$where);
    }

    function update_data($where,$data,$tabel){
        $this->db->where($where);
        $this->db->update($tabel,$data);
    }

    function hapus_data($where,$tabel){
        $this->db->where($where);
        $this->db->delete($tabel);
    }

    function sort_data($tabel,$keyword){
        return $this->db->select('*')->from($tabel)
            ->where('tag',$keyword)
        ->get();

    }
}
