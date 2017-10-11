<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		//$this->load->view('coba1');
		$this->load->view('pilin');

	}

	function login_js(){
		$this->load->view('loginjs');
	}

	function login_emp(){
		$this->load->view('loginemp');
	}

	function signupemp(){
		$this->load->view('emp_registrasi');
	}
	function signupjs(){
		$this->load->view('js_signup');
	}

	function epro(){
		$this->load->view('emp_profile');
	}
	function jprofile(){
		$this->load->view('js_profile');
	}
	function send(){
		$this->load->view('data');
	}

	function pilih(){
		$this->load->view('choose');
	}

	function rp(){
		$this->load->view('riwayat');
	}

	function upload(){
		$this->load->view('berkas');
	}


	
}
