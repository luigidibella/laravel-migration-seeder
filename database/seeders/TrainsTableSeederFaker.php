<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->company_image = $faker->imageUrl(640, 480, 'trains', true);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time('H:i');
            $new_train->arrival_time = $faker->time('H:i');
            $new_train->train_code = $this->generateTrainCode($faker->randomNumber(7, true));
            $new_train->carriages_count = $faker->randomDigitNotNull();

            /* dump($new_train); */
            $new_train->save();
        }
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
