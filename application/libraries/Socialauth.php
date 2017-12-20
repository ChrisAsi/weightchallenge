<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.implode(DIRECTORY_SEPARATOR, ['third_party', 'hybridauth', 'ver_3.0.0-beta-4', 'autoload.php']));

class SocialAuth extends Hybridauth\Hybridauth
{
    public function __construct()
    {
   		$CI =& get_instance();
   		$CI->load->config("hybridauth");
   		parent::__construct($CI->config->item("hybridauth"));
    }
    
    public function __destruct()
    {
    	parent::disconnectAllAdapters();
    }
}