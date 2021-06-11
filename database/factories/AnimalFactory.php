<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'race' => $this->faker->sentence(2, true),
            'color' => $this->faker->colorName(),
            'age' => $this->faker->randomDigit(),
        ];
    }
    /*
     $table->id();
            $table->string('name');
            $table->string('race');
            $table->string('color')->nullable();
            $table->integer('age')->nullable();
            $table->char('friendliness')->nullable();
            $table->char('size')->nullable();
            $table->char('sex')->nullable();
            $table->text('details')->nullable();
            $table->string('status')->default('Found');
            $table->string('last_latitude')->nullable();
            $table->string('last_longitude')->nullable();
            $table->integer('owner_id')->unsigned();
            $table->timestamps();
    */
}
