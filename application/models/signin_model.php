<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signin_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('pwd'));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    // 'fname' => $row->fname,
                    // 'lname' => $row->lname,
                    'username' => $row->username,
                    'email' => $row->email,
                    'validated' => true
                    );
            $this->session->set_userdata('logged_in', $data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>