<?php

namespace Database\Factories;

use App\Models\ProdukGame;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ProdukGame::class;

    public function definition()
    {
        return [
            'nama_produk' => $this->faker->name(),
            'pengembang' => $this->faker->name(),
            'harga' => $this->faker->numberBetween(1000,200000),
            'deskripsi' => $this->faker->text(),
            'image' => $this->faker->name('alamat Image')
        ];
    }
}
