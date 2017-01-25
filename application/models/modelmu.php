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

        function ambilpass($where){
            $query = $this->db->select('profile.id_profile, profile.nama_user, profile.username_user, profile.notelp_user, profile.foto_user, profile.id_user, login.password_user, login.type_user, login.nama_user as nmuser, login.id_user')
                ->from('profile')
                ->join('login', 'profile.id_user = login.id_user', 'inner')
                ->where($where)
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

    function updatedatalog($dimana,$datalog,$table){
        $this->db->where($dimana);
        $this->db->update($table,$datalog);
    }

    function hitungid()
    {
        $query = $this->db->query('SELECT COUNT(id_barang) FROM barang');
        //return $query;
    }

}