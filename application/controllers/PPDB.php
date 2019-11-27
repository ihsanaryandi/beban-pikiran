<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('ppdb/index');
		$this->load->view('templates/footer');
	}

	public function pendaftar()
	{

		$this->load->view('templates/header');
		$this->load->view('ppdb/pendaftar');
		$this->load->view('templates/footer');

	}

	public function coming_soon()
	{

		$this->load->view('ppdb/coming_soon');

	}

}
