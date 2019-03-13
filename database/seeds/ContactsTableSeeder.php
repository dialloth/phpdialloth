<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
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
     *
     * @return void
     */

    public function run()
    {
    	for( $i =0; $i < 12; $i++){
            $year = rand(2009, 2016);
            $month = rand(1, 12);
            $day = rand(1, 28);
            $date = Carbon::create($year,$month ,$day);

        DB::table('contacts')->insert([
            'contact_name' => 'Alseny'.Str::random(10),
            'contact_email' => Str::random(10).'@free.com',
            'contact_message' => Str::random(50),
            'contact_date' => $date ,
            
        

            //'password' => bcrypt('secret'),
        ]);
    }

    }
}
