<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i<4; $i++){
            $data = [
                'division'=>$faker->randomElement(['admin','employe']),
                'is_aktif'=>$faker->randomElement(['yes','no'])
            ];
            $this->db->table('divisions')->insert($data);
            
        }

    }
}
