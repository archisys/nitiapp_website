<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'contacts_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'first_name'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'last_name'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email'          => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'contact_number' => [
                'type'       => 'INT',
                'constraint' => '50',
            ],
            'solution'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'message'        => [
                'type' => 'TEXT',
            ],
            'created_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}
