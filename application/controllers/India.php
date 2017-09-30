<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $source = '../data/ahhhh.png';
        header("Content-type: image/png");
        header('Content-Disposition: inline');
        readfile($source);
	}

}
