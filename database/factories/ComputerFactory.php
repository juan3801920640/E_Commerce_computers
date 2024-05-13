<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Computer::class;

    public function definition(): array
    {
        return [];
    }

    public function variosProductos(){
        return [[
            'brand' => 'Azus zenbook',
            'ram' => 12,
            'hard_disk' => 500,
            'number_cores' => 8,
            'processor' => 'Ryzen 5',
            'operative_system' => 'Windows 11',
            'date_creation' => fake()->date(),
            'graphic_memory?' => false,
            'cc_graphic_memory' => null,
            'image' => 'images/computer-767781_1920.jpg',
            'categorie_id' => 1,
            'description' => 'El potente y compacto Zenbook 14 OLED es increíblemente liviano y delgado, con un nuevo diseño elegante, moderno y atemporal. La pantalla OLED NanoEdge ofrece unas imágenes perfectas, con precisión de color validada por PANTONE® y una gama de color DCI-P3 al 100%.',
            'price' => 3999900
        ],
        [
            'brand' => 'Portátil HP',
            'ram' => 2,
            'hard_disk' => 512,
            'number_cores' => 4,
            'processor' => 'Intel Core i5',
            'operative_system' => 'Windows 11',
            'date_creation' => fake()->date(),
            'graphic_memory?' => false,
            'cc_graphic_memory' => null,
            'image' => 'images/product1.jpg',
            'categorie_id' => 1,
            'description' => 'Diseñada para tu productividad y entretenimiento desde cualquier lugar, la nueva HP Laptop 14 combina el poder de Intel y batería de larga duración en un diseño delgado y portable con pantalla de micro borde.',
            'price' => 1499000
        ],
        [
            'brand' => 'Portátil Gamer Lenovo LOQ',
            'ram' => 8,
            'hard_disk' => 256,
            'number_cores' => 8,
            'processor' => 'Intel Core i5',
            'operative_system' => 'Windows 11',
            'date_creation' => fake()->date(),
            'graphic_memory?' => true,
            'cc_graphic_memory' => 2,
            'image' => 'images/product2.jpg',
            'categorie_id' => 1,
            'description' => 'La arquitectura híbrida más reciente de Intel® combinada con prestaciones líderes en el sector ofrecen la experiencia de juego definitiva.',
            'price' => 2999000
        ],
        [
            'brand' => 'DELL INSPIRON 15',
            'ram' => 24,
            'hard_disk' => 512,
            'number_cores' => 8,
            'processor' => 'Intel Core i9',
            'operative_system' => 'Linux',
            'date_creation' => fake()->date(),
            'graphic_memory?' => false,
            'cc_graphic_memory' => null,
            'image' => 'images/product3.jpg',
            'categorie_id' => 1,
            'description' => 'Nuestra portátil 2-en-1 300e de 2da generación incluye tecnología Pencil Touch opcional (sólo disponible en algunos modelos), lo que significa que puedes usar un lápiz del número 2 para interactuar directamente con la pantalla multitáctil de 10 puntos.',
            'price' => 6999000
        ]];
    }

   


}
