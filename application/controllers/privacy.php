<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacy extends CI_Controller {

	public function index()
	{
	
		$data = array(
		'title' => 'Privacy Policy | The Elements Exhibition',
		'meta_description' => 'Privacy Policy for the Elements Exhibition'
		);
	
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('foundation/privacy');
		$this->load->view('foundation/footer');
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */