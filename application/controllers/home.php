<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$partials = array('header' => 'header', 'content' => 'home', 'footer' => 'footer');
        $this->template->load('master', $partials, $data);
	}
}