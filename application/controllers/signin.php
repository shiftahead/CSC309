<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signin extends CI_controller {

	public function index()
	{
		//$this->load->view('welcome_page');

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('pwd', 'Password', 'required|callback_check_database');

		if ($this->form_validation->run() == FALSE)
		{
			//$data['msg'] = $msg;
			$this->load->view('sign_in_page');
		}
		else
		{
			redirect('profile','refresh');
		}
	}

	public function check_database() {
		$this->load->model('signin_model');
        // Validate the user can login
        $result = $this->signin_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->form_validation->set_message('check_database', '<font color="red">Invalid username or password</font>');
            return False;
        }else{
            // If user did validate, 
            // Send them to members area
            return True;            
    	}
    }
}
?>