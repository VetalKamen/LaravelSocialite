<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booksCount = (int)$this->command
            ->ask('How many books would you like?',70);
        $authors = App\Author::all();

        factory(App\Book::class, $booksCount)->make()->each(
            function ($book) use ($authors) {
                $book->author_id = $authors->random()->id;
                $book->save();
            }
        );
    }
}
