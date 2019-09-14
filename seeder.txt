<?php

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author1 = User::create([
            'name' => 'John Cooper',
            'email' => 'john@cooper.com',
            'password' => Hash::make('12345678'),
        ]);

        $author2 = User::create([
            'name' => 'Samuel Jackson',
            'email' => 'sam@jack.com',
            'password' => Hash::make('12345678'),
        ]);


        $category1 = Category::create([
            'name' => 'News',
        ]);

        $category2 = Category::create([
            'name' => 'Marketing',
        ]);

        $category3 = Category::create([
            'name' => 'Design',
        ]);
        $category4 = Category::create([
            'name' => 'Partnership',
        ]);


        $post1 = $author1->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Worthy all math at of they these a to beings think and she in he I to off poetic not these little of big and one eminent should, sides behave.',
            'content' => 'At harmonics; Quite to understood.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
        ]);

        $post2 = $author1->posts()->create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'Worthy all math at of they these a to beings think and she in he I to off poetic not these little of big and one eminent should, sides behave.',
            'content' => 'At harmonics; Quite to understood.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg',
        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'Worthy all math at of they these a to beings think and she in he I to off poetic not these little of big and one eminent should, sides behave.',
            'content' => 'At harmonics; Quite to understood.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',
        ]);

        $post4 = $author2->posts()->create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'Worthy all math at of they these a to beings think and she in he I to off poetic not these little of big and one eminent should, sides behave.',
            'content' => 'At harmonics; Quite to understood.',
            'category_id' => $category4->id,
            'image' => 'posts/4.jpg',
        ]);

        $tag1 = Tag::create([
            'name' => 'Job',
        ]);

        $tag2 = Tag::create([
            'name' => 'Customers',
        ]);

        $tag3 = Tag::create([
            'name' => 'Record',
        ]);

        $tag4 = Tag::create([
            'name' => 'Offer',
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag3->id, $tag4->id]);
        $post3->tags()->attach([$tag4->id, $tag1->id]);
        $post4->tags()->attach([$tag3->id, $tag2->id]);

    }
}
