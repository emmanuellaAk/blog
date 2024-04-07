<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id'=>$family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'In my personal life, I prioritize activities that bring me joy and fulfillment. ',
            'body' => 'In my personal life, I prioritize activities that bring me joy and fulfillment. Whether its spending quality time with loved ones, pursuing my hobbies, or engaging in self-care practices, I believe in nurturing my well-being holistically. I find solace in reading books that broaden my perspective, exploring nature through hiking and camping trips, and expressing myself creatively through painting and writing. Moreover, maintaining a healthy work-life balance is crucial to me, as it allows me to recharge and approach each day with renewed energy and enthusiasm. Overall, my personal endeavors contribute significantly to my overall happiness and sense of fulfillment.',
         ]);
        
        Post::create([
            'user_id' => $user->id,
            'category_id'=>$work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'In my personal life, I prioritize activities that bring me joy and fulfillment.',
            'body'=> 'Within the professional realm, I am dedicated to delivering high-quality results and contributing positively to my team and organization. As a diligent and proactive team member, I thrive in environments that foster collaboration, innovation, and continuous learning. With a strong work ethic and a passion for excellence, I tackle challenges head-on and seek opportunities for growth and development. Whether its meeting project deadlines, brainstorming creative solutions, or supporting colleagues in achieving their goals, I approach each task with determination and a positive attitude. Additionally, I value clear communication and effective teamwork, recognizing their importance in driving success and achieving collective objectives.'
         ]);

           Post::create([
            'user_id' => $user->id,
            'category_id'=>$personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'In my personal life, I prioritize activities that bring me joy and fulfillment.',
            'body'=>'At home, I strive to create a warm and welcoming environment where I can unwind, connect with my family, and recharge after a busy day. I believe in the importance of maintaining a tidy and organized living space, as it contributes to a sense of calm and tranquility. Whether its cooking nutritious meals together, enjoying movie nights with loved ones, or simply sharing stories around the dinner table, I cherish these moments of togetherness and bonding. Furthermore, I prioritize self-care rituals such as meditation, yoga, and relaxation techniques to promote inner peace and well-being. Ultimately, my home serves as a sanctuary where I can find comfort, love, and support amidst lifes challenges'
         ]);
    }
}
