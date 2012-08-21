<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		
		/*** change this value in config when you switch from dev to prod and vice versa ***/
		if(DEV_SITE) {
			if (!$this->ion_auth->logged_in()) {
				redirect('/auth/login');
			}
		}
	}
	
	public function contact_us() 
	{
		$this->load->library('send_email');
		
		$this->form_validation->set_rules('contact[name]', 'Name', 'required');
		$this->form_validation->set_rules('contact[email]', 'Email', 'required');
		$this->form_validation->set_rules('contact[message]', 'Message', 'required');

		$from = $this->input->post('contact');

		if ($this->form_validation->run() == true)
		{
			if($this->send_email->contact_us($from)) {
				redirect('/?msg=Your email has been sent', 'refresh');
			}
			else {
				redirect('/?msg=Your email was not sent', 'refresh');
			}
		}
	}
}
