<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup_model extends CI_Model {
	public function __construct() {
  		parent::__construct();
	}

	public function add_user() {
  		$data=array(
		    'username'=>$this->input->post('username'),
		    'email'=>$this->input->post('email'),
		    'password'=>$this->input->post('pwd'),
		    'identity'=>$this->input->post('identity')
  		);
  		$this->session->set_userdata('logged_in', $data);
 		$this->db->insert('users',$data);
 }
}