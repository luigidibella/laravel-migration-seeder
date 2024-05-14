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
                "departure_station" => 'Milano',
                "arrival_station" => 'Firenze',
                "departure_time" => '14:05',
                "arrival_time" => '16:20',
                "train_code" => '0000002',
                "carriages_count" => '8',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Napoli',
                "arrival_station" => 'Torino',
                "departure_time" => '10:00',
                "arrival_time" => '16:50',
                "train_code" => '0000003',
                "carriages_count" => '10',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Venezia',
                "arrival_station" => 'Bologna',
                "departure_time" => '18:30',
                "arrival_time" => '20:15',
                "train_code" => '0000004',
                "carriages_count" => '6',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Firenze',
                "arrival_station" => 'Roma',
                "departure_time" => '07:45',
                "arrival_time" => '09:20',
                "train_code" => '0000005',
                "carriages_count" => '7',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Torino',
                "arrival_station" => 'Genova',
                "departure_time" => '16:10',
                "arrival_time" => '17:50',
                "train_code" => '0000006',
                "carriages_count" => '4',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Bari',
                "arrival_station" => 'Napoli',
                "departure_time" => '12:30',
                "arrival_time" => '15:00',
                "train_code" => '0000007',
                "carriages_count" => '5',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Bologna',
                "arrival_station" => 'Milano',
                "departure_time" => '08:20',
                "arrival_time" => '10:00',
                "train_code" => '0000008',
                "carriages_count" => '8',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Pisa',
                "arrival_station" => 'Firenze',
                "departure_time" => '13:00',
                "arrival_time" => '14:15',
                "train_code" => '0000009',
                "carriages_count" => '3',
            ],
            [
                "company" => 'Trenitalia',
                "company_image" => 'https://www.trenitalia.com/content/dam/tcom/asset/icon/header-logo/header-mobile/logo-trenitalia.png',
                "departure_station" => 'Verona',
                "arrival_station" => 'Venezia',
                "departure_time" => '09:45',
                "arrival_time" => '11:20',
                "train_code" => '0000010',
                "carriages_count" => '4',
            ]
        ];

        foreach($data as $item){
            $new_train = new Train();
            $new_train->company = $item['company'];
            $new_train->company_image = $item['company_image'];
            $new_train->departure_station = $item['departure_station'];
            $new_train->arrival_station = $item['arrival_station'];
            $new_train->departure_time = $item['departure_time'];
            $new_train->arrival_time = $item['arrival_time'];
            $new_train->train_code = $this->generateTrainCode($item['train_code']);
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

    private function generateTrainCode($string){

        $train_code = Str::slug($string, '-');
        $original_train_code = $train_code;

        $exist = Train::where('train_code', $train_code)->first();
        $c = 1;

        while($exist){
            $train_code = $original_train_code . '-' . $c;
            $exist = Train::where('train_code', $train_code)->first();
            $c++;
        }

        return $train_code;

    }
}
