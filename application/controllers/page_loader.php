<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page_loader extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$data2['page_to_load'] = 'index';
        $this->load->view('template', $data2);
	}
	public function loan_ending(){
		$data2['page_to_load'] = 'loan_ending';
        $this->load->view('template', $data2);
	}
	public function loan_services_form(){
		$data2['page_to_load'] = 'loan_services_form';
        $this->load->view('template', $data2);
	}
	public function loan_services_full_form(){
		$data2['page_to_load'] = 'loan_services_full_form';
        $this->load->view('template', $data2);
	}
	public function loan_services_points(){
		$data2['page_to_load'] = 'loan_services_points';
        $this->load->view('template', $data2);
	}
	public function loan_services_score_sheet(){
		$data2['page_to_load'] = 'loan_services_score_sheet';
        $this->load->view('template', $data2);
	}
	public function renting_services(){
		$data2['page_to_load'] = 'renting_services';
        $this->load->view('template', $data2);
	}
	public function renting_services_form(){
		$data2['page_to_load'] = 'renting_services_form';
        $this->load->view('template', $data2);
	}
	public function renting_services_form2(){
		$data2['page_to_load'] = 'renting_services_form2';
        $this->load->view('template', $data2);
	}
	public function renting_services_form3(){
		$data2['page_to_load'] = 'renting_services_form3';
        $this->load->view('template', $data2);
	}
	public function renting_services_full_form(){
		$data2['page_to_load'] = 'renting_services_full_form';
        $this->load->view('template', $data2);
	}
	public function renting_services_table(){
		$data2['page_to_load'] = 'renting_services_table';
        $this->load->view('template', $data2);
	}
}