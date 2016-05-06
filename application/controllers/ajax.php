<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->input->is_ajax_request())
		{
			exit('XHR only');
		}
	}
	public function send_contact()
	{
		$send_to = 'hello@jlamartistry.com';
		$subject_line = 'Message from ' . $this->input->post('name') . '';

		$contact_name = $this->input->post('name');
		$contact_phone = $this->input->post('phone');
		$contact_email = $this->input->post('email');
		$contact_interested = $this->input->post('interested');
		$contact_message = $this->input->post('message');
		$config['mailtype'] = 'html';
		$this->load->library('email', $config);
		$this->email->to($send_to);
		$this->email->from($contact_email);
		$this->email->subject($subject_line);

		$message  = <<<MSG
Name: $contact_name<br/>
Email: $contact_email<br/>
Phone: $contact_phone<br/>
Interested: $contact_interested<br/><br/>
Message: $contact_message
MSG;

		$this->email->message($message);
		$data = array();
		$data['result'] = true;
		$data['response'] = 'Thanks for your message, ' . $this->input->post('name') . '. I will get back to you soon!';
		if (!$this->email->send())
		{
		    $data['result'] = false;
		    $data['response'] = 'There was an error sending your message. Please try again.';
		}
		echo json_encode($data);
	}
}
