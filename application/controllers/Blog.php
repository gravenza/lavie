<?php
class Blog extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('blog');
	}
	
	public function detail(){
		$this->load->view('blog-detail');
	}
}