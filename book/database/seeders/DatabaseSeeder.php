<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Author::truncate();
        Book::truncate();
        Genre::truncate();


       $genre1 = Genre::create(['name'=>'Fiction','description'=>'Fiction is any creative work, chiefly any narrative work, portraying individuals, events, or places']);
       $genre2 = Genre::create(['name'=>'Narrative','description'=>'Story or tale is any account of a series of related events or experiences']);
       $genre3 = Genre::create(['name'=>'Mystery','description'=>'the nature of an event, usually a murder or other crime, remains mysterious until the end of the story']);

       $author1 = Author::create(['first_name'=>'Jacques','last_name'=>'Furtelle']);
       $author2 = Author::create(['first_name'=>'Franz','last_name'=>'Kafka']);
       $author3 = Author::create(['first_name'=>'Mary','last_name'=>'Shelley']);

       $book1 = Book::create([
           'title'=> 'Frankenstein',
           'genre_id'=> $genre1->id,
           'author_id'=> $author3->id,
           'year_of_release'=> 1818
       ]);

       $book2 = Book::create([
        'title'=> 'Methamorphosis',
        'genre_id'=> $genre2->id,
        'author_id'=> $author2->id,
        'year_of_release'=> 1915
    ]);
       
    $book1 = Book::create([
        'title'=> 'The Problem of Cell 13',
        'genre_id'=> $genre3->id,
        'author_id'=> $author1->id,
        'year_of_release'=> 1905
    ]);
    }
}
