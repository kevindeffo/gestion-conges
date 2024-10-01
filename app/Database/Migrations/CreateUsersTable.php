<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nom'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'prenom'     => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'statut'     => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'telephone'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'poste'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'role'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'mot_de_passe' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'deleted_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}