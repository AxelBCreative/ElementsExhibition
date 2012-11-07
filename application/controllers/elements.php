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
	
	
	public function earth()
	{
		$data = array(
			'title' => 'Earth - The Elements Exhibition |  Earth, Water, Fire, Air - Hassad Museum of Science, London' ,
			'heading' => 'This is <strong>Earth!</strong>',
			'element' => 'Earth',
			'introparagraph' => 'Earth - our home and origin.',
			'shorturl' => 'http://xzib.it/earth',
			'tweet' => 'Learn%20about%20the%20element%20earth%20at%20the%20@ElementExhibit',
			'image_one' => '../assets/images/pics/crop.jpg',
			'image_one_title' => 'This crop will provide food for a community',
			'image_two' => '../assets/images/pics/miners.jpg',			
			'image_two_title' => 'These miners risked life and limb for precious minerals',			
			'image_three' => '../assets/images/pics/earthquake.jpg',			
			'image_three_title' => 'The awesome power of tectonic plates unleashed',
		);
			
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('elements/earth');
		$this->load->view('foundation/footer');
	}
	
	public function water()
	{
		$data = array(
			'title' => 'Water - The Elements Exhibition |  Earth, Water, Fire, Air - Hassad Museum of Science, London' ,
			'heading' => 'This is <strong>Water!</strong>',
			'element' => 'Water',
			'introparagraph' => '"Water is the driving force in nature", said da Vinci.',
			'shorturl' => 'http://xzib.it/water',
			'tweet' => 'Learn%20about%20the%20element%20water%20at%20the%20@ElementExhibit',			
			'image_one' => '../assets/images/pics/hydro-dam.jpg',
			'image_one_title' => 'This hydroelectric power station provides electricity to thousands of people in Kyrgyz cities',
			'image_two' => '../assets/images/pics/surfing.jpg',			
			'image_two_title' => 'Surf\'s up!',			
			'image_three' => '../assets/images/pics/irrigation.jpg',			
			'image_three_title' => 'An irrigation ditch, providing water for crops',
		);
		
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('elements/water');
		$this->load->view('foundation/footer');
	}	
	
	public function fire()
	{
		$data = array(
			'title' => 'Fire - The Elements Exhibition |  Earth, Water, Fire, Air - Hassad Museum of Science, London' ,
			'heading' => 'This is <strong>Fire!</strong>',
			'element' => 'Fire',
			'introparagraph' => 'Fire has been used by humans for millennia - from keeping us warm to keeping us fed.',
			'shorturl' => 'http://xzib.it/fire',
			'tweet' => 'Learn%20about%20the%20element%20fire%20at%20the%20@ElementExhibit',			
			'image_one' => '../assets/images/pics/cooking.jpg',
			'image_one_title' => 'We cook to help digestion - and create tasty meals!',
			'image_two' => '../assets/images/pics/fire-breather.jpg',			
			'image_two_title' => 'A fire breather shows off his tricks',			
			'image_three' => '../assets/images/pics/fireworks.jpg',			
			'image_three_title' => 'Spectacular fireworks displays',			
		);
		
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');		
		$this->load->view('elements/fire');
		$this->load->view('foundation/footer');
	}
	
	public function air()
	{
		$data = array(
			'title' => 'Air - The Elements Exhibition |  Earth, Water, Fire, Air - Hassad Museum of Science, London' ,
			'heading' => 'This is <strong>Air!</strong>',
			'element' => 'Air',
			'introparagraph' => 'We have made use of air for centuries - from sailing ships to powering wind turbines.',
			'shorturl' => 'http://xzib.it/air',
			'tweet' => 'Learn%20about%20the%20element%20air%20at%20the%20@ElementExhibit',			
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