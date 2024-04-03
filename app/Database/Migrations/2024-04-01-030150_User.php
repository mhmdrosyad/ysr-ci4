<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'        => [
                'type'      => 'INT',
                'constraint'=> 11,
                'unsigned'  => TRUE,
                'auto_increment'=> TRUE
            ],
            'username'     => [
                'type'      => 'VARCHAR',
                'constraint'=> '50'
            ],
            'name'     => [
                'type'      => 'VARCHAR',
                'constraint'=> '100'
            ],
            'password'     => [
                'type'     => 'VARCHAR',
                'constraint'=> '255'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTabel('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
