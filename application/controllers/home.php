<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$title = ucwords(str_replace('_', ' ',$this->router->fetch_method()));
		$this->head['doctype'] = doctype('html4-trans');
		$this->head['title'] = "BloomBoxPhoto | " . $title;
		$this->head['css'] = array(
			"/static/css/style.css",
		);
		$this->head['js'] = array(
			"/static/js/jquery-1.7.2.min.js",
			"/static/js/script.js"
		);
	}
	
	public function index() {
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/index');
		$this->load->view('templates/base_footer');
	}
}
