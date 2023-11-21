<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Marques extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_marque' => [
                'type' => 'INTEGER',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            // Ajoutez d'autres champs si nécessaire
        ]);

        $this->forge->addKey('id_marque', true); // Définir la clé primaire

        $this->forge->createTable('marques');
    }

    public function down()
    {
        $this->forge->dropTable('marques');
    }
}
