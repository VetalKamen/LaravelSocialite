<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorsCount = max((int)$this->command
            ->ask('How many users would you like?',20),1);
        factory(App\Author::class, $authorsCount)->create();
    }
}
