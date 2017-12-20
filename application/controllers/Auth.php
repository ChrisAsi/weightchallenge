<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login($provider)
	{
		$this->load->library("socialauth");
		if($this->socialauth->isConnectedWith($provider))
		{
			echo("Already Connected!") exit();
		}
		
		$this->socialauth->getAdapter($provider);
		$this->socialauth->facebook->authenticate();
		if($this->socialauth->facebook->isConnected())
		{
			echo('<pre>'); print_r($this->socialauth->facebook->getUserProfile()); echo('</pre>');
		}
	}
}
