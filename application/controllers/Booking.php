<?php
class Booking extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		// zoals je misschien weet zorgt de model voor het ophalen van database zooi
		$this->load->model('bookingModel');
		
		// hopelijk weet je wat views doen.
		$this->load->view('head.php');
		$this->load->view('header');
		$this->load->view('booking');
	}
}
