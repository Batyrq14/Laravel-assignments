<?php

namespace Tests\Unit;

use App\Models\Author;
use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{
    public function test_full_name_returns_concatenation_of_name_and_surname(): void
    {
        $author = new Author(['name' => 'Abai', 'surname' => 'Qunanbaiuly']);

        $this->assertEquals('Abai Qunanbaiuly', $author->fullName());
    }

    public function test_full_name_with_different_values(): void
    {
        $author = new Author(['name' => 'Mukhtar', 'surname' => 'Auezov']);

        $this->assertEquals('Mukhtar Auezov', $author->fullName());
    }
}
