<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $this->assertTrue(true);
    //     $this->get('/')->assertSee('The Bootstrap Blog') 
    // }

    //use DatabaseTransactions;
    public function testBasicTest()
    {
        //Given I have two records in the datrabase that are posts,
        //and each one is posted a month apart.
        $first = factory(Post::class)->create();

		$second = factory(Post::class)->create([
        	'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        //When I fetch the archives
        $posts = Post::archives();

        //Then the response should be in the proper format.
        // $posts = Post::archives();
        $this->assertCount(2, $posts);

        // $this->assertEquals([
        //         [
        //             "year" => $first->created_at->format('Y'),
        //             "month" => $first->created_at->format('F'),
        //             "published" => 1
        //         ],
                
        //         [
        //             "year" => $second->created_at->format('Y'),
        //             "month" => $second->created_at->format('F'),
        //             "published" => 1
        //         ],
        //     ], $posts);
        
    }
}
