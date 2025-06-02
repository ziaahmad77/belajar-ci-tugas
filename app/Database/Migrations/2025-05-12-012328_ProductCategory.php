<?php 
 
namespace App\Database\Migrations; 
 
use CodeIgniter\Database\Migration; 
 
class CreateProductCategoryTable extends Migration 
{ 
    public function up() 
    { 
        $this->forge->addField([ 
            'id' => [ 
                'type'           => 'INT', 
                'constraint'     => 5, 
                'unsigned'       => true, 
                'auto_increment' => true, 
            ], 
            'name' => [ 
                'type'       => 'VARCHAR', 
                'constraint' => '250', 
            ], 
            'slug' => [ 
                'type'       => 'VARCHAR', 
                'constraint' => '250', 
                'unique'     => true, 
            ], 
            'description' => [ 
                'type'       => 'TEXT', 
                'null'       => true, 
            ], 
            'is_active' => [ 
                'type'       => 'TINYINT', 
                'constraint' => 1, 
                'default'    => 1, 
            ], 
            'created_at' => [ 
                'type' => 'DATETIME', 
                'null' => true, 
            ], 
            'updated_at' => [ 
                'type' => 'DATETIME', 
                'null' => true, 
            ], 
            'deleted_at' => [ 
                'type' => 'DATETIME', 
                'null' => true, 
            ], 
        ]); 
        $this->forge->addKey('id', true); 
        $this->forge->createTable('product_category'); 
    } 
 
    public function down() 
    { 
        $this->forge->dropTable('product_category'); 
    } 
} 
 
 
