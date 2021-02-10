<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Documentacion extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_doc' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true, 
			],
			'foto'	=>	[
				'type'		=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false,
			],
			'nomyape'	=>	[
				'type'		=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false,
			],
			'firma'	=>	[
				'type'		=> 'VARCHAR',
				'constraint'	=> '254',
				'null'			=> false,
			],
			
		
			

			
		]);
		$this->forge->addKey('id_doc', true);
		$this->forge->createTable('documentacion');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('documentacion');
	}
}
