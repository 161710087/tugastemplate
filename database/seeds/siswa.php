<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sis = [['nis'=>'123','nama'=>'ahmad','tempat_lahir'=>'Bandung tengah','tanggal_lahir'=>'1998-08-27','alamat'=>'Jl 12','cita_cita'=>'apa ya','hobi'=>'moe','photo'=>'3.jpg'],
        ['nis'=>'765','nama'=>'Ronaldo','tempat_lahir'=>'teu apal','tanggal_lahir'=>'1977-04-02','alamat'=>'teu hayang apal','cita_cita'=>'Pesepak Bola','hobi'=>'Main Bola meren','photo'=>'5.jpg']
    ];
        DB::table('siswas')->insert($sis);
        
    }
}
