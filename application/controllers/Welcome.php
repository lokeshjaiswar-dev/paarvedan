<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function lokesh(){
		$this->load->view('nandani');
	}

	public function about(){
		$this->load->view('about-us');
	}
	
	public function corporate(){
		$this->load->view('corporate-employee-management');
	}

	public function ngo(){
		$this->load->view('ngo');
	}

	public function mahila(){
		$this->load->view('mahila-bachat-gat');
	}

	public function empowerment(){
		$this->load->view('esg-women-empowerment');
	}

	public function startup(){
		$this->load->view('startup');
	}

	public function events(){
		$this->load->view('events');
	}

	public function volunteer(){
		$this->load->view('volunteer');
	}

	public function government(){
		$this->load->view('goverment');
	}

	public function global(){
		$this->load->view('global-impact');
	}

	public function csr(){
		$this->load->view('csr-resources');
	}

	public function hni(){
		$this->load->view('hni');
	}

	public function survey(){
		$this->load->view('survey-reports');
	}

	public function membership(){
		$this->load->view('membership');
	}	

	public function login(){
		$this->load->view('login');
	}	

	public function donate(){
		$this->load->view('donate');
	}

	public function contact(){
		$this->load->view('contact');
	}

	public function blog(){
		$this->load->view('blog&news');
	}

	public function webinar(){
		$this->load->view('webinar');
	}

	public function privacy(){
		$this->load->view('privacy-policy');
	}

	public function term(){
		$this->load->view('term-condition');
	}

	public function faq(){
		$this->load->view('faqs');
	}

	public function verify(){
		$this->load->view('verify-certificate');
	}
	
	public function refund(){
		$this->load->view('refund');
	}
	
}
