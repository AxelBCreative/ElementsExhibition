<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Elements extends CI_Controller {


	public function index()
	{
		$data = array(
			'title' => 'The Elements | Earth, Water, Fire, Air - Hassad Museum of Science, London',
			'meta_description' => 'Explore one of the four elements - Earth, Water, Fire or Air',
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
		$connect = mysql_connect("localhost","phuck_marketing","HXI7ITGWWP");
		$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'earth'";
		$result = mysql_query($sql);
		$row = mysql_fetch_object($result);
		
		$data = array(
			'title' => $row->title ,
			'meta_description' => $row->meta,			
			'heading' => $row->heading,
			'element' => $row->element,
			'introparagraph' => 'Our home and origin.',
			'shorturl' => $row->shorturl,
			'tweet' => 'Learn%20about%20the%20element%20earth%20at%20the%20@ElementExhibit',
			'image_one' => $row->image_one,
			'image_one_title' => $row->image_one_title,
			'image_two' => $row->image_two,			
			'image_two_title' => $row->image_two_title,			
			'image_three' => $row->image_three,			
			'image_three_title' => $row->image_three_title,
		);
			
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('elements/earth');
		$this->load->view('foundation/footer');
	}
	
	public function water()
	{
		$connect = mysql_connect("localhost","phuck_marketing","HXI7ITGWWP");
		$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'water'";
		$result = mysql_query($sql);
		$row = mysql_fetch_object($result);
		
		$data = array(
			'title' => $row->title ,
			'meta_description' => $row->meta,			
			'heading' => $row->heading,
			'element' => $row->element,
			'introparagraph' => 'The driving force in nature.',
			'shorturl' => $row->shorturl,
			'tweet' => 'Learn%20about%20the%20element%20water%20at%20the%20@ElementExhibit',			
			'image_one' => $row->image_one,
			'image_one_title' => $row->image_one_title,
			'image_two' => $row->image_two,			
			'image_two_title' => $row->image_two_title,			
			'image_three' => $row->image_three,			
			'image_three_title' => $row->image_three_title,
		);
		
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('elements/water');
		$this->load->view('foundation/footer');
	}	
	
	public function fire()
	{
		$connect = mysql_connect("localhost","phuck_marketing","HXI7ITGWWP");
		$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'fire'";
		$result = mysql_query($sql);
		$row = mysql_fetch_object($result);
		
		$data = array(
			'title' => $row->title ,
			'meta_description' => $row->meta,			
			'heading' => $row->heading,
			'element' => $row->element,
			'introparagraph' => 'Keeping us warm; keeping us fed.',
			'shorturl' => $row->shorturl,
			'tweet' => 'Learn%20about%20the%20element%20fire%20at%20the%20@ElementExhibit',			
			'image_one' => $row->image_one,
			'image_one_title' => $row->image_one_title,
			'image_two' => $row->image_two,			
			'image_two_title' => $row->image_two_title,			
			'image_three' => $row->image_three,			
			'image_three_title' => $row->image_three_title,			
		);
		
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');		
		$this->load->view('elements/fire');
		$this->load->view('foundation/footer');
	}
	
	public function air()
	{
		$connect = mysql_connect("localhost","phuck_marketing","HXI7ITGWWP");
		$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'air'";
		$result = mysql_query($sql);
		$row = mysql_fetch_object($result);
		
		$data = array(
			'title' => $row->title ,
			'meta_description' => $row->meta,			
			'heading' => $row->heading,
			'element' => $row->element,
			'introparagraph' => 'Fragile flow or ferocious force?',
			'shorturl' => $row->shorturl,
			'tweet' => 'Learn%20about%20the%20element%20air%20at%20the%20@ElementExhibit',			
			'image_one' => $row->image_one,
			'image_one_title' => $row->image_one_title,
			'image_two' => $row->image_two,			
			'image_two_title' => $row->image_two_title,			
			'image_three' => $row->image_three,			
			'image_three_title' => $row->image_three_title,			
		);
		
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('elements/air');
		$this->load->view('foundation/footer');
	}	
}

/* End of file elements.php */
/* Location: ./application/controllers/elements.php */