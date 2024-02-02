<?php

    class userModel extends CI_model{

        function create($formArray){
            $this->db->insert('users', $formArray);
        }
        public function getViewUser() {
            // Fetch data from the database or any other source
            $query = $this->db->get('users');
            return $query->result();
        }



    }

?>