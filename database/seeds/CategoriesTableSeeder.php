<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now();

        DB::table('categories')->insert([
        'category' => '洋服',
        'created_at'=>$now,
        'updated_at'=>$now,
        ]);
        DB::table('categories')->insert([
        'category' => 'アクセサリー',
        'created_at'=>$now,
        'updated_at'=>$now,
        ]);
        DB::table('categories')->insert([
        'category' => '雑貨',
        'created_at'=>$now,
        'updated_at'=>$now,
        ]); 
        DB::table('categories')->insert([
        'category' => '食べ物',
        'created_at'=>$now,
        'updated_at'=>$now,
        ]); 
        DB::table('categories')->insert([
        'category' => 'プレゼント',
        'created_at'=>$now,
        'updated_at'=>$now,
        ]); 
        DB::table('categories')->insert([
        'category' => 'その他',
        'created_at'=>$now,
        'updated_at'=>$now,
        ]);
    }
    
}
