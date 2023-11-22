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
        // Game::factory(4)->create();

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
            // ** est <strong> en markdown et on peut voir que ça marche sur la page du jeu
            'content' => 'The dragonflights of **Azeroth** have returned, called upon to defend their ancestral home, the Dragon Isles. Surging with elemental magic and the life energies of Azeroth, the Isles are awakening once more, and it\'s up to you to explore their primordial wonder and discover long-forgotten secrets. Master the art of Dragonriding, with a new form of aerial movement, venture into the ancient prison of the Primal Incarnates before their malevolent power can be unleashed against the Dragon Aspects in the new raid. Fight to reclaim Neltharus, stronghold of the black dragonflight, explore previously unknown chambers of Uldaman, defend the Life Pools of the red dragonflight, and more! In new dungeons!',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co67z6.png',
            'state' => true,
            'company' => 'Blizzard Entertainment',
            'genres' => ['MMO', 'RPG'],
            'released_at' => '2022-11-28',
        ]);

        Game::factory()->create([
            'name' => 'Cyberpunk 2077: Phantom Liberty',
            'slug' => Str::of('Cyberpunk 2077: Phantom Liberty')->slug(),
            'content' => 'Phantom Liberty is a spy-thriller expansion for the open-world action-adventure RPG Cyberpunk 2077. When the orbital shuttle of the President of the New United States of America is shot down over the deadliest district of Night City, there’s only one person who can save her — you. Become V, a cyberpunk for hire, and dive deep into a tangled web of espionage and political intrigue, unraveling a story that connects the highest echelons of power with the brutal world of black-market mercenaries. Infiltrate Dogtown, a city-within-a-city run by a trigger-happy militia and ruled by a leader with an iron fist. With the help of NUSA sleeper agent Solomon Reed (Idris Elba) and the support of Johnny Silverhand (Keanu Reeves), unravel a web of shattered loyalties and use your every skill to survive in a fractured world of desperate hustlers, shadowy netrunners, and ruthless mercenaries. Built with the power of next-gen hardware in mind, Phantom Liberty offers brand-new gameplay mechanics, nail-biting courier jobs, gigs, and missions — and a thrilling main quest where freedom and loyalty always come at a price.',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co7566.png',
            'state' => true,
            'company' => 'CD Projekt RED',
            'genres' => ['Aventure', 'FPS', 'RPG'],
            'released_at' => '2023-09-26',
        ]);

        Game::factory()->create([
            'name' => 'The Witcher 3',
            'slug' => Str::of('The Witcher 3')->slug(),
            'content' => 'RPG and sequel to The Witcher 2 (2011), The Witcher 3 follows witcher Geralt of Rivia as he seeks out his former lover and his young subject while intermingling with the political workings of the wartorn Northern Kingdoms. Geralt has to fight monsters and deal with people of all sorts in order to solve complex problems and settle contentious disputes, each ranging from the personal to the world-changing.',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.png',
            'state' => true,
            'company' => 'CD Projekt RED',
            'genres' => ['Aventure', 'RPG'],
            'released_at' => '2015-05-19',
        ]);

        Game::factory()->create([
            'name' => 'Marvel\'s Spider-Man 2',
            'slug' => Str::of('Marvel\'s Spider-Man 2')->slug(),
            'content' => 'Marvel\'s Spider-Man 2 is the next game in the critically acclaimed Marvel\'s Spider-Man franchise. Developed by Insomniac Games in collaboration with PlayStation and Marvel Games. Swing, jump and utilize the new Web Wings to travel across Marvel’s New York, quickly switching between Peter Parker and Miles Morales to experience different stories and epic new powers, as the iconic villain Venom threatens to destroy their lives, their city and the ones they love. Quickly swap between both Spider-Men as you explore an expanded Marvel’s New York. Fight against a variety of new and iconic villains, including an original take on the monstrous Venom, the ruthless Kraven the Hunter, the volatile Lizard and many more.',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co79vq.png',
            'state' => true,
            'company' => 'Insomniac Games',
            'genres' => ['Aventure', 'Beat \'em up'],
            'released_at' => '2023-10-20',
        ]);

        Game::factory()->create([
            'name' => 'Red Dead Redemption 2',
            'slug' => Str::of('Red Dead Redemption 2')->slug(),
            'content' => 'Red Dead Redemption 2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age.',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co1q1f.png',
            'state' => true,
            'company' => 'Rockstar Games',
            'genres' => ['Aventure', 'FPS', 'RPG'],
            'released_at' => '2018-10-26',
        ]);
    }
}
