<?php

use Illuminate\Database\Seeder;

class SampahTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sampah')->delete();
        
        \DB::table('sampah')->insert(array (
            0 => 
            array (
                'id' => 5,
                'nama' => 'Pestisida',
                'kategori' => 'Beracun',
                'created_at' => '2020-07-18 12:00:21',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'nama' => 'Kertas',
                'kategori' => 'Organik',
                'created_at' => '2020-07-18 12:31:31',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'nama' => 'Kertas',
                'kategori' => 'Organik',
                'created_at' => '2020-07-18 12:32:23',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'nama' => 'Kertas',
                'kategori' => 'Anorganik',
                'created_at' => '2020-07-18 12:37:09',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}