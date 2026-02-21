<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ── Author 1 ───────────────────────────────────────────────────────
        $author1 = Author::create([
            'name'  => 'George Orwell',
            'email' => 'george.orwell@example.com',
        ]);

        Book::create([
            'title'       => '1984',
            'description' => 'A dystopian novel set in a totalitarian society ruled by Big Brother, exploring themes of surveillance, censorship, and loss of individual freedom.',
            'author_id'   => $author1->id,
        ]);

        Book::create([
            'title'       => 'Animal Farm',
            'description' => 'A political allegory using farm animals to satirize the events leading up to the Russian Revolution and the early Soviet Union era.',
            'author_id'   => $author1->id,
        ]);

        Book::create([
            'title'       => 'Homage to Catalonia',
            'description' => 'A personal account of Orwell\'s experiences fighting in the Spanish Civil War, reflecting on class, politics, and the nature of war.',
            'author_id'   => $author1->id,
        ]);

        // ── Author 2 ───────────────────────────────────────────────────────
        $author2 = Author::create([
            'name'  => 'J.K. Rowling',
            'email' => 'jk.rowling@example.com',
        ]);

        Book::create([
            'title'       => 'Harry Potter and the Philosopher\'s Stone',
            'description' => 'A young boy discovers on his 11th birthday that he is a wizard and begins his education at Hogwarts School of Witchcraft and Wizardry.',
            'author_id'   => $author2->id,
        ]);

        Book::create([
            'title'       => 'Harry Potter and the Chamber of Secrets',
            'description' => 'Harry returns to Hogwarts for his second year and investigates a series of attacks on students, uncovering a dark secret hidden within the school.',
            'author_id'   => $author2->id,
        ]);

        Book::create([
            'title'       => 'Harry Potter and the Prisoner of Azkaban',
            'description' => 'Harry learns that a dangerous prisoner has escaped from Azkaban, and the mystery of his connection to Harry\'s past begins to unravel.',
            'author_id'   => $author2->id,
        ]);

        // ── Author 3 ───────────────────────────────────────────────────────
        $author3 = Author::create([
            'name'  => 'Frank Herbert',
            'email' => 'frank.herbert@example.com',
        ]);

        Book::create([
            'title'       => 'Dune',
            'description' => 'Set in the far future on the desert planet Arrakis, this epic follows Paul Atreides as he navigates political intrigue, religion, and ecology.',
            'author_id'   => $author3->id,
        ]);

        Book::create([
            'title'       => 'Dune Messiah',
            'description' => 'The sequel to Dune follows Paul Atreides years after his rise to power, as conspiracies form among those who seek to overthrow him.',
            'author_id'   => $author3->id,
        ]);
    }
}
