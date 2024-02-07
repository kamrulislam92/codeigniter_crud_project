<?php

    class userModel extends CI_model{

        function create($formArray){
            $this->db->insert('users', $formArray);
        }
        public function getViewUser() {

            $query = $this->db->get('users');
            return $query->result();
        }

        public function get_user_by_id($id) {
            $this->db->where('id', $id);
            $query = $this->db->get('users');
        
            if ($query->num_rows() > 0) {
                return $query->row_array();
            } else {
                return array();
            }
        }
        public function update_user($id, $data) {
            $this->db->where('id', $id);
            $this->db->update('users', $data);
        }
        public function delete_user($id) {
            $this->db->where('id', $id);
            $this->db->delete('users');
        }
    }

?>