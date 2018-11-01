<?php
class Home extends CI_Controller {
	public function index(){
		$this->output->cache(10);

		//get currencies from private_bank API
		$currencies = file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
		$currencies = json_decode($currencies);
		
		//get only usd and eur
		foreach($currencies as $value){
			if($value->ccy == 'USD'){
				$data['usd']['buy'] = $value->buy;
				$data['usd']['sale'] = $value->sale;
			}
			if($value->ccy == 'EUR'){
				$data['eur']['buy'] = $value->buy;
				$data['eur']['sale'] = $value->sale;
			}
		}
		$data['currencies'] = $this->currency_model->insert_currencies($data);

		$data['title'] = 'Currencies';
		$data['subview'] = 'home';

		$this->load->view('layouts/layout', $data);
	}
}
