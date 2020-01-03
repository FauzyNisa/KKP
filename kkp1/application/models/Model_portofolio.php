<?php

Class Model_portofolio extends Ci_Model{
    
    function ambil_data($tabel){
        return $this->db->get($tabel);
    }

    function input_data($data,$tabel){
        $this->db->insert($tabel,$data);
    }

}