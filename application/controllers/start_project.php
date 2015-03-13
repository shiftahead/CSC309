<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Start_project extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 public function index() {
 	$session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['email'] = $session_data['email'];
 	$this->load->view('start_project_page', $data);
 }
}