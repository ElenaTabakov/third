<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
        [
            'name'=>'Получение письма'
        ],
        [
            'name'=>'Отправка письма'
        ],
        [
            'name'=>'Получение посылки'
        ],
        [
            'name'=>'Отправка посылки'
        ]

        ]);
    }
}
