<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	   public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        
	}
	public function index()
	{
		$posts=$this->crud_model->get_entries();
		$years=$this->crud_model->getYears();

		$this->load->view('welcome_message',['posts'=>$posts,'years'=>$years]);
		
	}
	public function posts($year){
		
		$posts=$this->crud_model->getYear($year);
		$years=$this->crud_model->getYears();
	
		$this->load->view('post',['posts'=>$posts,'years'=>$years,'year'=>$year]);
	}
}
