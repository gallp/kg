<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePersonTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
        "id" => [
            "type"          => "INT",
            "null"          => false,
            "auto_increment" => true
        ],
        "Name" => [
            "type"          => "VARCHAR",
            "constraint"    => 128,
            "null"          => false            
        ],
        "comment" =>[
            "type"          => "TEXT",
            "null"          => true,
        ]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("person");
    }

    public function down()
    {
        $this->forge->dropTable("person");
    }
}
