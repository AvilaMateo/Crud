<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articulos extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'Articulo'       => [
				'type'       => 'VARCHAR',
				'constraint' => '250',
			],
			'Cantidad'       => [
				'type'       => 'INT',
				'constraint' => 5,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('Articulos');
	}

	public function down()
	{
		$this->forge->dropTable('Articulos');
	}
}
