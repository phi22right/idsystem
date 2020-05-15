<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_Sample extends CI_Controller {

	function index()
	{
		$this->load->view('print_view');
	}
}
