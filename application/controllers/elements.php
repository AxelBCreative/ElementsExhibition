<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Elements extends CI_Controller {


	public function index()
	{
		$data = array(
			'title' => 'The Elements | Earth, Water, Fire, Air - Hassad Museum of Science, London',
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
		$data = array(
			'title' => 'Air - The Elements Exhibition |  Earth, Water, Fire, Air - Hassad Museum of Science, London' ,
			'heading' => 'This is <strong>Air!</strong>',
			'element' => 'Air',
			'introparagraph' => 'We have made use of air for centuries - from sailing ships to powering wind turbines.',
			'howweuse' => 'We use air',
			'image_one' => '../assets/images/pics/wind-turbine.jpg',
			'image_one_title' => 'We use wind to power turbines',
			'image_two' => '../assets/images/pics/hot-air-balloons.jpg',			
			'image_two_title' => 'We use hot air to fly balloons',			
			'image_three' => '../assets/images/pics/sailing.jpg',			
			'image_three_title' => 'We use wind to power sailing boats',			
		);
		
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('elements/air');
		$this->load->view('foundation/footer');
	}	
}

/* End of file elements.php */
/* Location: ./application/controllers/elements.php */