<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		
		/*** change this value in config when you switch from dev to prod and vice versa ***/
		if(DEV_SITE) {
			if (!$this->ion_auth->logged_in()) {
				redirect('/auth/login');
			}
		}
		
		/*** contruct html page ***/
		$title = ucwords(str_replace('_', ' ',$this->router->fetch_class()));
		$this->head['title'] = "BloomBoxPhoto | " . $title;
	}
	
	public function index() {
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('team/index');
		$this->load->view('templates/base_footer');
	}
}
