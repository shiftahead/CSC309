<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	 {
	  parent::__construct();
	  $this->load->model('signup_model');
	 }
	public function index()
	{
		//$this->load->view('welcome_page');

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('pwdconf', 'Password confirmation', 'required|matches[pwd]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_message('matches','Please enter the same password.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('welcome_page');
		}
		else
		{
			$this->signup_model->add_user();
			redirect('profile','refresh');
		}
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>