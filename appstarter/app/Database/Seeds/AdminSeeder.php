<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for($i = 0; $i<17; $i++){
            $data = [
                //generate nama
                'username'    =>$faker->email,
                'password'    =>'123456'
            ];
            $this->db->table('admin')->insert($data);
        }
    }
}
