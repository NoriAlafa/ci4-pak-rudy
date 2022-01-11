<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmployeSeeder extends Seeder
{
    public function run()
    {
        //setting data untuk faker
        $faker = \Faker\Factory::create('id_ID');

        //buat 10 data
        for($i = 0; $i<17; $i++){
            $data = [
                //generate nama
                'nama'  =>$faker->name,
                //generate alamat
                'alamat'=>$faker->address,
                //generate gender
                'gender'=>$faker->randomElement(['L','P']),
                //generate gaji
                'gaji' => $faker->randomElement([100000,200000,80000])
            ];
            $this->db->table('employes')->insert($data);
        }
    }
}
