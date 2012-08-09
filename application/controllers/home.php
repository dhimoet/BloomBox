<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

		function __construct() {
			
			parent::__construct();
			
			if(DEV_SITE) {
				if (!$this->ion_auth->logged_in()) {
					redirect('/auth/login');
				}
			}
		}
		
        public function index() {

                $this->load->view('home/home');
        }
}