<?php
class user_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        function list_user()
        {
                $query = $this->db->get('users');
                return $query->result();
        }
		function list_packege()
        {
                $query1 = $this->db->get('packege');
                return $query1->result();
        }
}