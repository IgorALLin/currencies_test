<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Migration_Create_currencies_table extends CI_Migration {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up(){
		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 9,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'usd_sale' => array(
				'type' => 'decimal (10,4)'
			),
			'usd_buy' => array(
				'type' => 'decimal (10,4)'
			),
			'eur_sale' => array(
				'type' => 'decimal (10,4)'
			),
			'eur_buy' => array(
				'type' => 'decimal (10,4)'
			),
			'created_at' => array(
				'type' => 'timestamp'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('Currencies', TRUE);
	}

	public function down(){
		$this->dbforge->drop_table('users', TRUE);
	}
}
