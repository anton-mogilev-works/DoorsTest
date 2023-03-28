<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('testadmin12345')
        ]);

        // Заполняем цвета покраски
        DB::table('dyeings')->insert([
            'name' => 'Красный',
            'value' => '#8B0000',
            'price' => 50,
        ]);

        DB::table('dyeings')->insert([
            'name' => 'Синий',
            'value' => '#00008B',
            'price' => 60,
        ]);

        DB::table('dyeings')->insert([
            'name' => 'Зелёный',
            'value' => '#006400',
            'price' => 70,
        ]);

        DB::table('dyeings')->insert([
            'name' => 'Жёлтый',
            'value' => '#FFD700',
            'price' => 80,
        ]);

        // Заполняем цвета плёнки
        DB::table('skins')->insert([
            'name' => 'Красный',
            'value' => '#8B0000',
            'price' => 20,
        ]);

        DB::table('skins')->insert([
            'name' => 'Синий',
            'value' => '#00008B',
            'price' => 30,
        ]);

        DB::table('skins')->insert([
            'name' => 'Зелёный',
            'value' => '#006400',
            'price' => 40,
        ]);

        DB::table('skins')->insert([
            'name' => 'Жёлтый',
            'value' => '#FFD700',
            'price' => 50,
        ]);

        // Заполняем цвета ручек
        DB::table('knobs')->insert([
            'name' => 'Красный',
            'value' => '#8B0000',
            'price' => 40,
        ]);

        DB::table('knobs')->insert([
            'name' => 'Синий',
            'value' => '#00008B',
            'price' => 40,
        ]);

        DB::table('knobs')->insert([
            'name' => 'Зелёный',
            'value' => '#006400',
            'price' => 40,
        ]);

        DB::table('knobs')->insert([
            'name' => 'Жёлтый',
            'value' => '#FFD700',
            'price' => 50,
        ]);

        // Заполняем аксессуары
        DB::table('accessories')->insert([
            'name' => 'Свет',
            'price' => 50,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Геркон',
            'price' => 100
        ]);

        // Заполняем размерности ширины
        DB::table('width_dimensions')->insert([
            'value' => '700'
        ]);

        DB::table('width_dimensions')->insert([
            'value' => '750'
        ]);

        DB::table('width_dimensions')->insert([
            'value' => '800'
        ]);

        DB::table('width_dimensions')->insert([
            'value' => '850'
        ]);

        DB::table('width_dimensions')->insert([
            'value' => '900'
        ]);

        DB::table('width_dimensions')->insert([
            'value' => '950'
        ]);

        // Заполняем размерности высоты
        DB::table('height_dimensions')->insert([
            'value' => '1800'
        ]);

        DB::table('height_dimensions')->insert([
            'value' => '1900'
        ]);

        DB::table('height_dimensions')->insert([
            'value' => '2000'
        ]);

        DB::table('height_dimensions')->insert([
            'value' => '2100'
        ]);

        DB::table('height_dimensions')->insert([
            'value' => '2200'
        ]);

        DB::table('height_dimensions')->insert([
            'value' => '2300'
        ]);

        // Заполняем размерности высоты
        DB::table('opening_sides')->insert([
            'name' => 'Слева',
            'value' => 0
        ]);

        DB::table('opening_sides')->insert([
            'name' => 'Справа',
            'value' => 1
        ]);
    }
}