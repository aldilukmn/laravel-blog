<?php

namespace App\Models;


class Blog
{
    private static
        $blogs = [
            [
                'title' => 'Title kesatu',
                'slug' => 'title-kesatu',
                'author' => 'Aldi Lukman',
                'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veritatis nulla accusantium reiciendis labore vero voluptas, incidunt perspiciatis impedit enim. Voluptatum alias ipsam molestias labore unde magni mollitia obcaecati odio?'
            ],
            [
                'title' => 'Title kedua',
                'slug' => 'title-kedua',
                'author' => 'Reza Arwana',
                'subtitle' => 'Lorem ipsum dolor sit amet consctus sincing elit.',
                'body' => 'Lorem ipsum dolor sit amet consctus sincing elit. Minima aliquid odio accusantium deleniti fuga quam beatae illum! Eligendi aut voluptas id delectus sint molestias, provident commodi pariatur! Voluptate quaerat quasi molestias laudantium nesciunt dolore asperiores nam esse, a corrupti nostrum omnis magnam necessitatibus eaque et, reiciendis distinctio! Atque, suscipit reprehenderit.'
            ],
            [
                'title' => 'Title Ketiga',
                'slug' => 'title-ketiga',
                'author' => 'Andini Putri',
                'subtitle' => 'optio ratione eum ullam t perspiciatis laborum rerum',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odio repellendus optio ratione eum ullam tempore perspiciatis laborum rerum accusantium totam laudantium quisquam, quasi saepe minima atque inventore asperiores obcaecati eos doloribus? Consequatur fuga accusamus magnam quae dolor porro ex! Sunt laborum sit, enim asperiores qui vero consectetur quis? Quo aliquam beatae, voluptatum, quasi accusantium numquam nam a ducimus aut, ipsam corrupti minus placeat error dicta repellendus vero quas dignissimos?'
            ],
            [
                'title' => 'Title ke Keempat',
                'slug' => 'title-keempat',
                'author' => 'Andy Kurniawan',
                'subtitle' => 'quisquam, quasi saepeiores obcaecati eos doloribus?',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquid odio accusantium deleniti fuga quam beatae m ullam tempore perspiciatis laborum rerum accusantium totam laudantium quisquam, quasi saepe minima atque inventore asperiores obcaecati eos doloribus? Consequatur fuga accusamus magnam quae dolor porro ex illum! Eligendi aut voluptas id delectus sint molestias, provident commodi pariatur! Voluptate quaerat quasi molestias laudantium nesciunt dolore asperiores nam esse, a corrupti nostrum omnis magnam necessitatibus eaque et, reiciendis distinctio! Atque, suscipit reprehenderit.'
            ]
        ];

    public static function all()
    {
        return collect(self::$blogs);
    }

    public static function find($slug)
    {
        $blogs = static::all();
        return $blogs->firstWhere('slug', $slug);
    }
}
