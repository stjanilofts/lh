<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;


function getImages($count = 0) {
    $images = [];

    $dir = scandir(public_path('img'));

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
}


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

        function imgs() {
            $_images = [];
            for($i = 1; $i <= 12; $i++) {
                $_images[] = [
                    'name' => $i.'.jpg',
                    'title' => $i.'.jpg',
                ];
            }
            shuffle($_images);
            return $_images;
        }


        $faker = Faker\Factory::create();

        function makePage($page = []) {
            $page['slug'] = isset($page['slug']) ? $page['slug'] : str_slug($page['title']);
            $page['images'] = isset($page['images']) ? $page['images'] : imgs();
            return factory(\App\Page::class)->create($page);
        }


        $skurdlaekningar = makePage([
            'title' => 'Skurðlækningar',
            'content' => 
            '
<p>Ýmislegt um skurðlækningar.</p>
            ',
        ]);

        $adgerdir = makePage([
            'title' => 'Aðgerðir',
            'content' => 
            '
<p>Ýmislegt um aðgerðir.</p>
            ',
        ]);

        $ymislegt = makePage([
            'title' => 'Ýmislegt',
            'content' => 
            '
<p>Ýmislegt.</p>
            ',
        ]);

        makePage([
            'title' => 'Æðaskurðlækningar',
            'parent_id' => $skurdlaekningar->id,
            'content' => 
            '
<p>Æðaskurðlækningar eru sérgrein  sem greinir og meðhöndlar sjúkdóma í slagæða og bláæðakerfi.</p>
<p>Í Læknahúsinu starfa þrír sérfræðingar í æðaskurðlækningum.</p>
<ul>
    <li>Guðmundur Daníelsson</li>
    <li>Helgi Sigurðsson</li>
    <li>Karl Logason</li>
</ul>
            ',
        ]);

        $barna = makePage([
            'title' => 'Barnaskurðlækningar',
            'parent_id' => $skurdlaekningar->id,
            'content' => 
            '
<p>Í Læknahúsinu starfar einn sérfræðingur í barnaskurðlækningum.</p>
            ',
        ]);

        makePage([
            'title' => 'Test 1',
            'parent_id' => $barna->id,
            'content' => 
            '
            Test 1
            ',
        ]);

        makePage([
            'title' => 'Test 2',
            'parent_id' => $barna->id,
            'content' => 
            '
            Test 2
            ',
        ]);


        makePage([
            'title' => 'Almennar skurðlækningar',
            'parent_id' => $skurdlaekningar->id,
            'content' => 
            '
<p>Í Læknahúsinu eru starfandi þrír sérfræðingar í almennum skurðlækningum.</p>
            ',
        ]);

        makePage([
            'title' => 'Þvagfæraskurðlækningar',
            'parent_id' => $skurdlaekningar->id,
            'content' => 
            '
<p>Þvagfæraskurðlæknar greina og meðhöndla sjúkdóma í þvagfærum kvenna og karla og kynfærum karla.</p>
            ',
        ]);

        makePage([
            'title' => 'Lýtalækningar',
            'parent_id' => $ymislegt->id,
            'content' => 
            '
<p>Í Læknahúsinu starfa fjórir sérfræðingar í lýta og fegrunarlækningum.</p>
            ',
        ]);

        makePage([
            'title' => 'Blóðtökur',
            'parent_id' => $ymislegt->id,
            'content' => 
            '
<p>Efni vantar</p>
            ',
        ]);

        makePage([
            'title' => 'Augnaðgerðir',
            'parent_id' => $adgerdir->id,
            'content' => 
            '
<p>Efni vantar</p>
            ',
        ]);

        makePage([
            'title' => 'Panta tíma',
            'content' => 
            '
<p>Efni vantar</p>
            ',
        ]);

        makePage([
            'title' => 'Kviðslit',
            'parent_id' => $ymislegt->id,
            'content' => 
            '
<p>Efni vantar</p>
            ',
        ]);

        makePage([
            'title' => 'Handaaðgerðir',
            'parent_id' => $adgerdir->id,
            'content' => 
            '
<p>Efni vantar</p>
            ',
        ]);

        Model::reguard();
    }
}