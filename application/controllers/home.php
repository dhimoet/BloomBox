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
		$this->head['id'] = $this->router->fetch_method();
	}
	
	public function index() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/index');
		$this->load->view('backbone/backbone_js');
		$this->load->view('templates/base_footer');
	}
	
	public function welcome()
	{
		redirect('/home/#/welcome', 'refresh');
	}
	
	public function blog()
	{
		redirect('http://blog.bloomboxphoto.com/', 'refresh');
	}
	
	public function about()
	{
		redirect('/home/#/about', 'refresh');
	}
	
	public function team()
	{
		redirect('/home/#/team', 'refresh');
	}
	
	public function contact()
	{
		redirect('/home/#/contact', 'refresh');
	}
	
	public function version1() 
	{
		$this->load->view('templates/base_header', $this->head);
		$this->load->view('home/version1');
		$this->load->view('backbone/backbone_js');
		$this->load->view('templates/base_footer');
	}
}
