<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$this->load->model('home_data');
		$data = array(
		'title' => 'The Elements Exhibition | Earth, Water, Fire, Air - Hassad Museum of Science, London',
		'meta_description' => 'The Hassad Museum of Science is famous for its world-renowned exhibitions, and now we invite you to explore the elements exhibition.',
		'heading' => '<h1 class="welcome highlight">Welcome to the <strong>Elements Exhibition</strong></h1>',
		'inviteimage' => 'assets/images/foundation/got_your_invite.png',
		'copy' => '<h4 class="intro">The Hassad Museum of Science is famous for its world-renowned exhibits, and now
						we invite you to explore the <strong class="highlight br"><em>Elements Exhibition.</em></strong></h4>
						<h4 class="intro">Inspired by <strong><em>Hellenic alchemy</em></strong> (that\'s Ancient Greek - you\'re
						already learning!), the exhibition aims to detail how far we\'ve come in the understanding of
						what makes up our world.</h4>'
		);
	
		$this->load->view('foundation/head', $data);
		$this->load->view('foundation/header');
		$this->load->view('foundation/home');
		$this->load->view('foundation/footer');
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */