<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Aanmelden';
		$partials = array('header' => 'header', 'content' => 'login', 'footer' => 'footer');
		$this->template->load('master', $partials, $data);
	}
	public function aanmelden()
	{
		$this->load->model('user_model');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if($this->authex->login($email, $password)){
			$data['melding'] = 'U bent nu aangemeld';
			$data['title'] = 'Home';
			$partials = array('header' => 'header', 'content' => 'home', 'footer' => 'footer');
			$this->template->load('master', $partials, $data);
		}else{
			$data['title'] = 'Aanmelden';
			$this->session->set_userdata( 'melding', 'Combinatie email en wachtwoord foutief.' );
			$partials = array('header' => 'header', 'content' => 'login', 'footer' => 'footer');
			$this->template->load('master', $partials, $data);
					
		}
	}
	public function afmelden(){
		$this->authex->logout();
		redirect('home');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */