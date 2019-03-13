<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	/*

    	$table->increments('id');
            $table->string('post_author');
            $table->date('post_date');
            $table->string('post_content');
            $table->string('post_title');
            $table->string('post_status');
            $table->string('post_name');
            $table->string('post_type');
            $table->string('post_category');
            ...................................
             $year = rand(2009, 2016);
            $month = rand(1, 12);
            $day = rand(1, 28);

            $date = Carbon::create($year,$month ,$day);

            */
       for( $i =0; $i < 12; $i++){
            $year = rand(2009, 2016);
            $month = rand(1, 12);
            $day = rand(1, 28);

            $date = Carbon::create($year,$month ,$day);
        DB::table('posts')->insert([
            'post_author' => Str::random(10),
            'post_name' => Str::random(10),
            'post_content' => Str::random(50),
            'post_status' => Str::random(10),
            'post_type' => Str::random(10),
            'post_category' => Str::random(10),
            'post_date' => $date ,
            'post_title' => Str::random(10),
        

            //'password' => bcrypt('secret'),
        ]);

    }
    }
}
