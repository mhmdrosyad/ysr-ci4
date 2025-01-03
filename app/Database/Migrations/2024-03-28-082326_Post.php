<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'            => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'title'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'slug'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'content'       => [
                'type'              => 'TEXT'
            ],
            'image_url'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => TRUE
            ],
            'author'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'null'              => TRUE
            ]
            ,
            'meta_desc'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => TRUE
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['publish', 'pending', 'draft'],
                'default'    => 'pending',
            ],
            'created_at' => [
                'type'       => 'date',
                'default'    => date('Y-m-d')
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
