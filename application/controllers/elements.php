<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Elements extends CI_Controller {


	public function index()
	{
		$data = array(
			'title' => 'The Elements',
			'heading' => 'The Elements',
			'copy' => 'Blah blah blah'
		);
	
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('foundation/elements_index');
		$this->load->view('foundation/footer');
	}
	
	public function fire()
	{
		$this->load->view('foundation/head');
		$this->load->view('foundation/header');		
		$this->load->view('elements/fire');
		$this->load->view('foundation/footer');
	}
	
	public function earth()
	{
		$this->load->view('foundation/head');
		$this->load->view('foundation/header');
		$this->load->view('elements/earth');
		$this->load->view('foundation/footer');
	}
	
	public function water()
	{
		$this->load->view('foundation/head');
		$this->load->view('foundation/header');
		$this->load->view('elements/water');
		$this->load->view('foundation/footer');
	}	
	
	public function air()
	{
		$this->load->view('foundation/head');
		$this->load->view('foundation/header');
		$this->load->view('elements/air');
		$this->load->view('foundation/footer');
	}	
}

/* End of file elements.php */
/* Location: ./application/controllers/elements.php */