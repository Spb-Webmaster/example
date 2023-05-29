<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Заголовок 1',
                'content' => 'Концентрированный состав сыворотки способствует глубокому увлажнению кожи, выравнивает цвет лица придает эластичность и сияние.',
                'img' => 'https://www.lcosmetic.ru/components/com_jshopping/files/img_products/thumb_36853.jpg'
            ],
            [
                'title' => 'Заголовок 2',
                'content' => 'Концентрированный состав сыворотки способствует глубокому увлажнению кожи, выравнивает цвет лица придает эластичность и сияние.',
                'img' => 'https://www.lcosmetic.ru/components/com_jshopping/files/img_products/thumb_36857.jpg'
            ]
        ];

        foreach ($posts as $post) {
            $p = new Post();
            $p->title = $post['title'];
            $p->content = $post['content'];
            $p->img = $post['img'];
            $p->save();
        }
    }



}
