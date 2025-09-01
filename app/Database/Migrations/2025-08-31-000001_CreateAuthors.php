<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'title'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'year'      => ['type' => 'INT'],
            'author_id' => ['type' => 'INT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('author_id', 'authors', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
