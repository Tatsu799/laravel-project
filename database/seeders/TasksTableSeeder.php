<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::beginTransaction();

    DB::table('tasks')->insert([
      'user_id' => 1,
      'task' => '卵を買う',
    ]);
    DB::table('tasks')->insert([
      'user_id' => 2,
      'task' => 'トレペを買う',
    ]);
    DB::table('tasks')->insert([
      'user_id' => 1,
      'task' => '家賃振込する',
    ]);
    DB::table('tasks')->insert([
      'user_id' => 2,
      'task' => '定期券を買う',
    ]);
    DB::table('tasks')->insert([
      'user_id' => 1,
      'task' => '住民票を取りに行く',
    ]);

    DB::commit();
  }
}
