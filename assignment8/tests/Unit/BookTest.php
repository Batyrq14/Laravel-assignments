<?php

namespace Tests\Unit;

use App\Models\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function test_short_title_can_be_set_and_retrieved(): void
    {
        $book = new Book(['short_title' => 'QSZ']);

        $this->assertEquals('QSZ', $book->short_title);
    }

    public function test_short_title_stores_different_values_correctly(): void
    {
        $book = new Book(['short_title' => 'AZh']);

        $this->assertEquals('AZh', $book->short_title);
    }
}
