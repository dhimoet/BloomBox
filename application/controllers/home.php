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
		$title = ucwords(str_replace('_', ' ',$this->router->fetch_class()));
		$this->head['title'] = "BloomBoxPhoto | " . $title;
	}
	
	public function index() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/index');
		$this->load->view('backbone/backbone_js');
		$this->load->view('templates/base_footer');
	}
	
	public function version1() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/version1');
		$this->load->view('templates/base_footer');
	}
	
	public function version2() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/version2');
		$this->load->view('templates/base_footer');
	}

	public function version3()
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/version3');
		$this->load->view('templates/base_footer');
	}
	
	public function blog()
	{
		redirect('http://blog.bloomboxphoto.com/', 'refresh');
	}
	
	public function welcome() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/index');
		$this->load->view('templates/base_footer');
	}
	
	public function about() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/about');
		$this->load->view('templates/base_footer');
	}
	
	public function team() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/team');
		$this->load->view('templates/base_footer');
	}
	
	public function contact() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/contact');
		$this->load->view('templates/base_footer');
	}
}
