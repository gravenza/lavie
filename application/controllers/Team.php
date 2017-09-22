<?php 
class Team extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('portfolio');
	}
	
	public function detail(){
		$this->load->view('team-detail');
	}
}