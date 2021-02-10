<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prestamos extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_solicitud' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true, 
			],
			'nomyape'	=>	[
				'type'		=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false,
			],
			'fechanac'		=>[
				'type'		=> 'DATETIME',
				'null'		=> false,
			],
			'fuente_ingresos'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false
			],
			'banco'					=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false
			],
			'email'				=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false

			],
			'telefono'				=>[
				'type'			=> 'INT',
				'null'			=> false
				
			],
			'monto'				=>[
				'type'			=> 'INT',
				'null'			=> false
				
			],
			'cuota'				=>[
				'type'			=> 'INT',
				'null'			=> false
				
			],
			'terminos'			=>[
				'type'			=> 'BOOLEAN',
				'default'		=> 1,
				'null'			=> false
			],
			
		]);
		$this->forge->addKey('id_solicitud', true);
		$this->forge->createTable('prestamos');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('prestamos');	
	}
}
