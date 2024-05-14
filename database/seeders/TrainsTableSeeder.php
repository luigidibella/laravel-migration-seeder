<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Roma',
                "arrival_station" => 'Boiano',
                "departure_time" => '17:38',
                "arrival_time" => '20:30',
                "train_code" => '0000001',
                "carriages_count" => '1',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Roma',
                "arrival_station" => 'Boiano',
                "departure_time" => '17:38',
                "arrival_time" => '20:30',
                "train_code" => '0000002',
                "carriages_count" => '1',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Roma',
                "arrival_station" => 'Boiano',
                "departure_time" => '17:38',
                "arrival_time" => '20:30',
                "train_code" => '0000003',
                "carriages_count" => '1',
            ],
        ];

        foreach($data as $item){
            $new_train = new Train();
            $new_train->company = $item['company'];
            $new_train->company_image = $item['company_image'];
            $new_train->departure_station = $item['departure_station'];
            $new_train->arrival_station = $item['arrival_station'];
            $new_train->departure_time = $item['departure_time'];
            $new_train->arrival_time = $item['arrival_time'];
            $new_train->train_code = $item['train_code'];
            $new_train->carriages_count = $item['carriages_count'];
            $new_train->save();
        }

        //dump('Jiji Gudoghi');

        //$new_train = new Train();
        //$new_train->company = 'Trenitalia';
        //$new_train->company_image = 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png';
        //$new_train->departure_station = 'Roma';
        //$new_train->arrival_station = 'Boiano';
        //$new_train->departure_time = '17:38';
        //$new_train->arrival_time = '20:30';
        //$new_train->train_code = '0000000';
        //$new_train->carriages_count = 1;
        //$new_train->save();

        //dump($new_train);
    }
}
