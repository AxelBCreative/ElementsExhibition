<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$connect = mysql_connect("localhost","phuck_marketing","HXI7ITGWWP");
		$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'homepage'";
		$result = mysql_query($sql);
		$row = mysql_fetch_object($result);
		
		$data = array(
		'title' => $row->title,
		'meta_description' => $row->meta,
		'heading' => $row->heading,
		'inviteimage' => 'assets/images/foundation/got_your_invite.jpg',
		'copy' => $row->body
		);
	
		$this->load->view('foundation/head', $data);
		//$this->load->view('foundation/header');
		$this->load->view('foundation/home');
		$this->load->view('foundation/footer');
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */