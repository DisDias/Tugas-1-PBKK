<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        /*    User::create([
                'name' => 'Dias Kurniasari',
                'email' => 'diaskurniasari2@gmail.com',
                'password' => bcrypt('12345')
            ]);

            User::create([
                'name' => 'Dyandra Paramitha',
                'email' => 'dydyandra@gmail.com',
                'password' => bcrypt('12345')
            ]);
        */
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();
        /*
        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>',
            'excerpt' => 'Lorem ipsum Pertama.'
        ]);
        
        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-kedua',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>',
            'excerpt' => 'Lorem ipsum Kedua.'
        ]);
        
        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 3,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>',
            'excerpt' => 'Lorem ipsum Ketiga.'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>',
            'excerpt' => 'Lorem ipsum Keempat.'
        ]);
        */
    }
}
