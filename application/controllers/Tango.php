<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $source = '../data/logo.png';

        header("Content-type: image/png");
        header('Content-Disposition: inline');
        readfile($source);
	}

}
