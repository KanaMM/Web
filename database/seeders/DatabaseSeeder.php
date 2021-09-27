<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert(array(
            array(
                'title' => 'Черновик',
            ),
            array(
                'title' => 'Ожидает рассмотрения',
            ),
            array(
                'title' => 'В работе',
            ),
            array(
                'title' => 'Отклонена',
            ),
            array(
                'title' => 'На доработку',
            ),
            array(
                'title' => 'Исполнена',
            ),
        ));
    }
}
