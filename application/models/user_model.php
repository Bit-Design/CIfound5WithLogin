<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		return $query->row();
	}

	function getUser($email, $password) {
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('user');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return null;
		}
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */