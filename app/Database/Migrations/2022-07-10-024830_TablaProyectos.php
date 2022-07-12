<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaProyectos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_proyecto'          => [
                'type'             => 'INT',
                'constraint'       => 5,
                'unsigned'         => true,
                'auto_increment'   => true,
            ],
            'nombre'               => [
                'type'             => 'VARCHAR',
                'constraint'       => '255',
            ],
            'descripcion'          =>[
                'type'             =>'VARCHAR',
                'constraint'       => '255',
            ],
            'materiales'           =>[
                'type'             => 'VARCHAR',
                'constraint'       => '255',
            ],
        ]);
        $this->forge->addKey('id_proyecto', true);
        $this->forge->createTable('tabla_proyectos');
    }

    public function down()
    {
        $this->forge->dropTable('tabla_proyectos');
    }
}
