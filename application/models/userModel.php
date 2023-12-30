<?php

    class userModel extends CI_model{

        function create($formArray){
            $this->db->insert('users', $formArray);
        }

    }

?>