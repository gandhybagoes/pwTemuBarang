<?php
class Modelmu extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function select($where, $table)
        {
                $query = $this->db->select('*')
                         ->from($table)
                         ->where($where)
                         ->get();
                return $query->row_array();
        }

        public function selectAll($table)
        {
                $query = $this->db->select('*')
                         ->from($table)
                         ->get();
                return $query->result_array();
        }

        public function selectStatus()
        {
            $query = $this->db->select('barang.id_barang, barang.nama_barang, barang.ket_barang, barang.jenis_barang, barang.lokasi_barang, barang.foto_barang, barang.confirmA, barang.confirmB, status.code_status')
                    ->from('barang')
                    ->join('status', 'barang.id_status = status.id_status', 'inner')
                    ->get();
            return $query->result_array();
        }

        public function insert_entry($table, $content)
        {
                return $this->db->insert($table, $content);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

        function updatedata($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}