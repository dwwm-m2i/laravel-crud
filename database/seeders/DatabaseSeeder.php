<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Game::factory(8)->create();

        Game::factory()->create([
            'name' => 'Elden Ring',
            'slug' => Str::of('Elden Ring')->slug(),
            'content' => 'Elden Ring is a fantasy, action and open world game with RPG elements such as stats, weapons and spells. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co4jni.png',
            'state' => true,
            'company' => 'FromSoftware',
            'genres' => ['Aventure', 'RPG'],
            'released_at' => '2022-02-25',
        ]);

        Game::factory()->create([
            'name' => 'World of Warcraft: Dragonflight',
            'slug' => Str::of('World of Warcraft: Dragonflight')->slug(),
            'content' => 'The dragonflights of Azeroth have returned, called upon to defend their ancestral home, the Dragon Isles. Surging with elemental magic and the life energies of Azeroth, the Isles are awakening once more, and it\'s up to you to explore their primordial wonder and discover long-forgotten secrets. Master the art of Dragonriding, with a new form of aerial movement, venture into the ancient prison of the Primal Incarnates before their malevolent power can be unleashed against the Dragon Aspects in the new raid. Fight to reclaim Neltharus, stronghold of the black dragonflight, explore previously unknown chambers of Uldaman, defend the Life Pools of the red dragonflight, and more! In new dungeons!',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co67z6.png',
            'state' => true,
            'company' => 'Blizzard Entertainment',
            'genres' => ['MMO', 'RPG'],
            'released_at' => '2022-11-28',
        ]);
    }
}
