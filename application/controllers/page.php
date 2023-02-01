<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'BeritaCoding',
		];

		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['meta'] = [
			'title' => 'About BeritaCoding',
		];
		// fungsi untuk me-load view about.php
		$this->load->view('about', $data);
	}

	public function coutact()
	{
		$data['meta'] = [
			'title' => 'Coutact Us',
		];
		
		if($this->input->method() === 'post'){
			print_r($this->input->post());
		}

		$this->load->view('coutact', $data);
	}
}
