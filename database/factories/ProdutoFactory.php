<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categoria;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome'=> $nome,
            'descricao' => $this->faker->paragraph(),
            'preco'=> $this->faker->randomNumber(2),
            'slug'=> Str::slug($nome),
            'imagem'=>$this->faker->imageUrl(400,400),
            'id_user' => User::exists() ? User::pluck('id')->random() : User::factory()->create()->id,
            'id_categoria' => Categoria::exists() ? Categoria::pluck('id')->random() : Categoria::factory()->create()->id,

        ];
    }
}
