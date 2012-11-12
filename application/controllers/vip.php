<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vip extends CI_Controller {

	public function index()
	{
		$data = array(
		'title' => 'VIP Invite - The Elements Exhibition | Earth, Water, Fire, Air - Hassad Museum of Science, London',
		'meta_description' => 'Get your VIP invite to the Elements Exhibition at the Hassad Museum of Science',
		'heading' => '<h1>The Elements Exhibition is <strong>Invite Only</strong></h1>',
		);
	
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('foundation/vip');
		$this->load->view('foundation/footer');
	}
	
}

/* End of file vip.php */
/* Location: ./application/controllers/vip.php */