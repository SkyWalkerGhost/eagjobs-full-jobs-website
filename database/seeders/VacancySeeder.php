<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vacancy;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class VacancySeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i <= 20; $i++) {

            $typeArr        = Arr::shuffle(['Standard', 'VIP', 'GOLD', 'PRIME']);

            $placementDate  = match($typeArr[0]){
                                Vacancy::STANDARD_VACANCY   => Carbon::now()->addMonths(1),
                                Vacancy::VIP_VACANCY        => Carbon::now()->addWeeks(2),
                                Vacancy::GOLD_VACANCY       => Carbon::now()->addDays(10),
                                Vacancy::PRIME_VACANCY      => Carbon::now()->addDays(3),
                                default                     => Carbon::now()->addMonths(1),
                            };

            $faker = \Faker\Factory::create();

            Vacancy::create([
                'order_id' => Str::substr(Str::upper(md5(Str::random(50))), 0, 20),
                'name' => $faker->text(),
                'education' => 'დამამთავრებელი კურსის სტუდენტი',
                'salary' => $faker->randomElement([500, 700, 800, 1200, 1500, 2000]),
                'work_schedule' => $faker->randomElement(['ნახევარი განაკვეთი', 'სრული განაკვეთი']),
                'job_description' => $faker->paragraph(),
                'qualification_requirements' => $faker->paragraph(),
                'vacancy_type' => 'Standard',
                'amount_price'  => 5,
                'category_id' => $faker->numberBetween(1, 40),
                'experience_id' => $faker->numberBetween(1, 5),
                'language_id' => $faker->numberBetween(1, 5),
                'location_id' => $faker->numberBetween(1, 40),
                'company_id' => 1,
                'job_status' => Vacancy::PENDING_STATUS,
                'end_time' => $placementDate,
            ]);
        }
    }
}
