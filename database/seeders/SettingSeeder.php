<?php

namespace Database\Seeders;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Setting([
            'terms_and_conditions' => 'Syarat

            Lomba dapat diikuti oleh mahasiswa dan umum
            Peserta (individu atau kelompok) berdomisili di wilayah Yogyakarta dan sekitarnya
            Merupakan karya asli (original) dan tidak mengandung unsur SARA, kekerasan dan pornografi',

            'logo' => 'default-logo.jpg'
        ]);

        $settings->save();
    }
}
