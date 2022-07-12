<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaProducto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nombre'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'Código'       => [
                    'type'           => 'INT',
                    'constraint'     => 255,
            ],
            'descripcion'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'cantidad'       => [
                    'type'           => 'INT',
                    'constraint'     => 5,
            ],
    ]);
    $this->forge->addKey('id_producto', true);
    $this->forge->createTable('tabla_productos');
    }

    public function down()
    {
        $this->forge->dropTable('tabla_productos');
    }
}
