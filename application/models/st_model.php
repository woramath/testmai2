<?php
class st_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        function st_list()
        {
                $query = $this->db->get('list_st');
                return $query->result();
        }

        function list_subject()
        {
                $query_sub = $this->db->get('subjects');
                return $query_sub->result();
        }
		function list_north()
        {		$id = 2;
				$sql_pd = "SELECT * FROM packege ";
				$sql_pd .= "WHERE c_id= $id ";
				return  $this->db->query($sql_pd)->result_array();
        }
		function list_sout()
        {		$id = 1;
				$sql_pd = "SELECT * FROM packege ";
				$sql_pd .= "WHERE c_id= $id ";
				return  $this->db->query($sql_pd)->result_array();
        }
		function list_esan()
        {		$id = 3;
				$sql_pd = "SELECT * FROM packege ";
				$sql_pd .= "WHERE c_id= $id ";
				return  $this->db->query($sql_pd)->result_array();
        }
		function get_packege($packege_id)
    {
        return $this->db->get_where('packege',array('packege_id'=>$packege_id))->row_array();
    }
	function update_packege($packege_id,$params)
    {
        $this->db->where('packege_id',$packege_id);
        $response = $this->db->update('packege',$params);
        if($response)
        {
            return "packege updated successfully";
        }
        else
        {
            return "Error occuring while updating packege";
        }
    }
}