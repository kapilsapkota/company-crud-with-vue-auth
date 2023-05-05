<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Company::class;

    public function definition(): array
    {
        $faker = new \Faker\Factory();
//        $logo = $faker->image(storage_path('app/public'), 200, 200, null, false);
//
        return [
            'name' => $faker->company,
            'email' => $faker->unique()->safeEmail,
            'logo' => basename($logo),
            'website' => $faker->url,
        ];
    }
}
