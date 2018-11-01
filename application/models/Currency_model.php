<?php
	class Currency_model extends CI_Model {

		public $usd_sale;
		public $usd_buy;
		public $eur_sale;
		public $eur_buy;
		public $created_at;

		public function get_currencies(){
			$query = $this->db->get('currencies');
			return $query->result_array();
		}

		public function insert_currencies($currencies){
			$this->usd_sale = $currencies['usd']['sale'];
			$this->usd_buy = $currencies['usd']['buy'];
			$this->eur_sale = $currencies['eur']['sale'];
			$this->eur_buy = $currencies['eur']['buy'];

			$this->db->insert('currencies', $this);
		}
	}

?>
