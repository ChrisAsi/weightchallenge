<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config["hybridauth"] = [
	'callback' => '',
    'providers' => [
        'Facebook' => [
        	'enabled' => true,
        	'keys' => [
        		'id'  => '',
        		'secret' => ''
        	]
        ]
    ]
];