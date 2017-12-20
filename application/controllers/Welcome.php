<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->library("socialauth");
		echo('<pre>'); print_r($this->socialauth->getConnectedAdapters()); echo('</pre>');
		//$this->load->view("page", array("body" => $this->load->view('welcome_message', null, true)));
	}
}
