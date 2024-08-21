<?php

namespace Database\Factories;

use App\Models\testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\testimonial>
 */
class testimonialFactory extends Factory
{
    protected $model = testimonial::class;
    
    private function generateRandomImage($path)
    {
        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));

        return fake()->randomElement($files);
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'job_title'=> fake()->word(),
             'testimonial'=> fake()->paragraph(),
              'img' => $this->generateRandomImage(public_path('assets/img/job/')),
        ];
    }
}
