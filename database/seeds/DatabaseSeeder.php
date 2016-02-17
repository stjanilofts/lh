<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;


/*function getImages($count = 0) {
    $images = [];

    $dir = scandir(public_path('prods'));

    $repository = [];

    $number = 0;

    foreach($dir as $k => $v) {
        if($v != '.' && $v != '..') {
            if($number >= 0) $number++;
            $arr = explode('.', $v);
            $extension = end($arr);
            $name = $arr[0];

            if(is_numeric($name)) {
                $repository[] = $v;
            }
        }
    }

    if($count == 0) {
        $count = $number;
    }

    for($i = 1; $i <= $count; $i++) {
        $repoCount = count($repository);

        $rand = (mt_rand(1, $repoCount) - 1);

        $filename = $repository[$rand];

        $file = public_path('tmp/'.$filename);

        $images[] = [
            'name' => $filename,
            'title' => $filename
        ];
    }

    return $images;
}*/


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Notendur
        \App\User::create([
            'name' => 'Netvistun',
            'email' => 'vinna@netvistun.is',
            'password' => bcrypt(env('NETVISTUN')),
            'remember_token' => str_random(10),
        ]);


        
        
        /*function imgs() {
            $_images = [];
            for($i = 1; $i <= 16; $i++) {
                $_images[] = [
                    'name' => 'm'.$i.'.jpg',
                    'title' => 'm'.$i.'.jpg',
                ];
            }
            shuffle($_images);
            return $_images;
        }*/



        $faker = Faker\Factory::create();

        function makePage($page = []) {
            //dd(imgs());
            $page['slug'] = isset($page['slug']) ? $page['slug'] : str_slug($page['title']);
            /*$page['images'] = isset($page['images']) ? $page['images'] : imgs();
            $imgs = imgs();
            $banner = $imgs[mt_rand(0, (count($imgs) - 1))];
            $page['banner'] = $banner['name'];*/

            return factory(\App\Page::class)->create($page);
        }


        Model::reguard();
    }
}