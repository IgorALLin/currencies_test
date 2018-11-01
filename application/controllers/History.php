<?php
class History extends CI_Controller {
	public function index(){
		$data['title'] = 'History';
		$data['subview'] = 'history';

		$data['currencies'] = $this->currency_model->get_currencies();

		$this->load->view('layouts/layout', $data);
	}
}
