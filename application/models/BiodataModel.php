<?php

class BiodataModel extends CI_Model
{
    // Mengambil semua data di table biodata
    public function getBiodata()
    {
        return $this->db->get('biodata')->result();
    }
}
