<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_email extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Email');
	}
	
	public function contact_us(Array $from)
	{
		$to = array(
			'name' => 'Contact Us',
			'email' => 'contactus@bloomboxphoto.com',
		);
		
		$email['subject'] = 'A visitor has just sent an email';
		
		return $this->send_email($to, $from, $email);
	}
	
	public function send_email(Array $to, Array $from, Array $email) 
	{
		$email['body'] = "<div><strong>Name:</strong></div>\n";
		$email['body'].= "<div>{$from['name']}</div>\n";
		$email['body'].= "<div><strong>Email:</strong></div>\n";
		$email['body'].= "<div>{$from['email']}</div>\n";
		$email['body'].= "<div><strong>Phone:</strong></div>\n";
		$email['body'].= "<div>{$from['phone']}</div>\n";
		$email['body'].= "<div><strong>Website:</strong></div>\n";
		$email['body'].= "<div>{$from['website']}</div>\n";
		$email['body'].= "<div><strong>Message:</strong></div>\n";
		$email['body'].= "<div>{$from['message']}</div>\n";

		$this->email->from($from['email'], $from['name']);
		$this->email->to($to['email'], $to['name']); 
		$this->email->subject($email['subject']);
		$this->email->message($email['body']);	

		if($this->email->send()) {
			return true;
		}
		else {
			return false;
		}
	}
}
