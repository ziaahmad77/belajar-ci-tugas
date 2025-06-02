<?php 
 
namespace App\Database\Seeds; 
 
use CodeIgniter\Database\Seeder; 
use CodeIgniter\I18n\Time; 
 
class ProductCategorySeeder extends Seeder 
{ 
    public function run() 
    { 
        // Kosongkan tabel sebelum diisi ulang 
        $this->db->table('product_category')->truncate(); 
 
        $data = [ 
            [ 
                'name'        => 'Elektronik', 
                'slug'        => 'elektronik', 
                'description' => 'Peralatan elektronik seperti TV, HP, dan komputer', 
                'is_active'   => 1, 
                'created_at'  => Time::now(), 
                'updated_at'  => Time::now(), 
            ], 
            [ 
                'name'        => 'Olahraga', 
                'slug'        => 'olahraga', 
                'description' => 'Perlengkapan olahraga dan kebugaran', 
                'is_active'   => 1, 
                'created_at'  => Time::now(), 
                'updated_at'  => Time::now(), 
            ], 
            [ 
                'name'        => 'Mainan Anak', 
                'slug'        => 'mainan-anak', 
                'description' => 'Mainan edukatif dan hiburan untuk anak-anak', 
                'is_active'   => 1, 
                'created_at'  => Time::now(), 
                'updated_at'  => Time::now(), 
            ], 
            [ 
                'name'        => 'Otomotif', 
                'slug'        => 'otomotif', 
                'description' => 'Sparepart dan aksesoris kendaraan bermotor', 
                'is_active'   => 1, 
                'created_at'  => Time::now(), 
                'updated_at'  => Time::now(), 
            ], 
            [ 
                'name'        => 'Dekorasi Rumah', 
                'slug'        => 'dekorasi-rumah', 
                'description' => 'Produk dekoratif untuk rumah dan interior', 
                'is_active'   => 1, 
                'created_at'  => Time::now(), 
                'updated_at'  => Time::now(), 
            ], 
        ]; 
 
        // Masukkan data ke tabel 
        $this->db->table('product_category')->insertBatch($data); 
    } 
} 
 
