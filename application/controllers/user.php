<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	
	public function index()
	{
		$this->load->model('user_model'); 
		$data['query'] = $this->user_model->list_user();
		$this->load->view('user_show',$data);
	}
	public function add()
	{
		$this->load->model('user_model'); 
		$data['query'] = $this->user_model->list_user();
		echo "hi <br>" ;
		echo "ชื่อผู้ใช้ :" . $u =  $this->input->get('u1');
		echo "รหัสผ่าน :" . $p = $this->input->get('p1');

		$data = array(
        'username' => $u,
        'password' => $p);

		$this->db->insert('users', $data);
	}

	public function home()
	{
		$this->load->model('user_model'); 
		$data['query'] = $this->user_model->list_user();
		$this->load->view('firs',$data); 
		
	}
	public function login ()
	{
		
		$this->load->view('c/login');
				
	}
	public function vv()
	{
		$query = $this->db->query("select * from users where username ='".$_POST['user']." ' AND password = ". $_POST['pass']."" );
		$result = $query->result();
		if($query->num_rows() > 0){
			$this->load->model('user_model'); 
			$data['query'] = $this->user_model->list_user();			
			$this->load->view('c/home',$data);
		}else{
			$this->load->view('c/login');
		}
	}
	public function a ()
	{
		
		$this->load->view('c/about');
		
		
	}
	public function h ()
	{
		$this->load->view('c/home');	
	}
	public function addd ()
	{
		$this->load->model('st_model'); 
		$data['query'] = $this->st_model->st_list();
		if($this->input->post("bt")!=null){
			$ar=array(
				"st_id"=>$this->input->post("stid"),
				"st_name"=>$this->input->post("name"),
				"st_lastname"=>$this->input->post("lname"),
				"st_grade"=>$this->input->post("grade")
				);
			$this->db->insert('list_st', $ar);
			
			
		}
		$this->load->view('b/add_n');	
	}

	public function add_su ()
	{
		$this->load->model('st_model'); 
		$data['query'] = $this->st_model->list_subject();
		if($this->input->post("bt")!=null){
			$ar=array(
				"sub_id"=>$this->input->post("subid"),
				"sub_name"=>$this->input->post("sub"),
				"sub_teacher"=>$this->input->post("sub_t"),
				"sub_room"=>$this->input->post("room")
				);
			$this->db->insert('subjects', $ar);
			
			
		}
		$this->load->view('b/add_sub');	
	}

	public function con ()
	{
		$this->load->view('c/contack');	
	}
	public function addp ()
	{
		$this->load->view('add_pagket');
		
	}
	public function admin ()
	{
		$query = $this->db->query("select * from users where username ='".$_POST['user']." ' AND password = ". $_POST['pass']."" );
		$result = $query->result();
		if($query->num_rows() > 0){
			$this->load->view('admin');
		}else{
			echo "no";
		}		
		
	}
	public function long ()
	{
		$this->load->view('pagkege/krabi');
		
		
	}
	
}
