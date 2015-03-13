<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Account extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
 	if($this->session->userdata('logged_in'))
   {
   	 $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['email'] = $session_data['email'];
     $this->load->view('account_page',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('welcome', 'refresh');
   }
 }
}