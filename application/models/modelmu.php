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


         public function selectAllUser()
        {
            $query = $this->db->select('profile.id_profile, profile.nama_user, profile.username_user, profile.kelas_user, profile.noabsen_user, profile.notelp_user, profile.foto_user, profile.id_user, login.password_user, login.type_user, login.nama_user as nmuser, login.id_user')
                    ->from('profile')
                    ->join('login', 'profile.id_user = login.id_user', 'inner')
                    ->get();
            return $query->result_array();
        }

        public function selectUser(){
            $query = $this->db->select('login.password_user, login.type_user, profile.username_user, profile.nama_user, profile.notelp_user, profile.foto_user, profile.kelas_user, profile.noabsen_user')
                    ->from('profile')
                    ->join('login', 'profile.id_user = login.id_user', 'inner')
                    ->get();
                return $query->result_array();
        
                } //selectUser untuk select User dan Profile


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

    function updatedata($table,$data, $where){
        $this->db->update($table,$data, $where);
    }


    function updatedatalog($dimana,$datalog,$table){
        $this->db->where($dimana);
        $this->db->update($table,$datalog);
    }

    function deletebrg($id) {
    $query = $this->db->where('id_barang', $id)
                      ->delete('barang');
    return $query;
    }

    function deleteusr($id) {
    $query = "DELETE usr FROM user usr JOIN profile prf ON usr.id_user = prf.id_user WHERE usr.id_user = ? ";             
    return  $this->db->query($query, array($id));
    }


    function hitungid($idjns)
    {
        $query = $this->db->query("SELECT * FROM barang WHERE id_barang LIKE '%$idjns%'");
       /* $query = $this->db->select('*')
                          ->from('barang')
                          ->like('id_barang '.$idjns."%")
                          ->get();*/
        return $query->num_rows();
    }

    function hitungidlogin()
    {
        //$query = $this->db->query("SELECT * FROM login");
       $query = $this->db->select('*')
                          ->from('login')
                          //->like('id_barang '.$idjns."%")
                          ->get();
        return $query->num_rows();
    }

    function hitungidprofile()
    {
        //$query = $this->db->query("SELECT * FROM login");
       $query = $this->db->select('*')
                          ->from('profile')
                          //->like('id_barang '.$idjns."%")
                          ->get();
        return $query->num_rows();
    }


    function inputbarang($data, $table){
        $this->db->insert($table, $data);
    }


    function showChatList($where) {
        $query = $this->db->select('profile.nama_user, chatlist.id_chatlist, chatlist.name_chatlist, chatlist.date_chatlist')
                 ->from('chatlist')
                 ->join('profile','chatlist.id_recipient = profile.id_user','inner')
                 ->where($where)
                 ->get();
        return $query->result_array();
    }

    function showChatRoom($where) {
        $query = $this->db->select('*')
                          ->from('chat')
                          ->where($where)
                          ->get();
        return $query->result_array();

    }

    // function kembaliBarang($id){
    //     $query = $this->db->select('*')
    //                       ->from('')
    // }

    function inputuser($data, $table){
        $this->db->insert($table, $data);
    }

}