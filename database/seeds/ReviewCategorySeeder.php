<?php

use Illuminate\Database\Seeder;
use \App\Models\ReviewCategory;
use Illuminate\Support\Arr;

class ReviewCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'title' => [
                    'en' => 'Person',
                    'zh' => '人',
                ],
                'slug' => \Illuminate\Support\Str::slug('person'),
                'is_published' => true,
                'enable_low_rating' => false
            ],
            [
                'title' => [
                    'en' => 'Company',
                    'zh' => '公司',
                ],
                'slug' => \Illuminate\Support\Str::slug('company'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Goods',
                    'zh' => '商品',
                ],
                'slug' => \Illuminate\Support\Str::slug('goods'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Vacations',
                    'zh' => '假期',
                ],
                'slug' => \Illuminate\Support\Str::slug('vocations'),
                'is_published' => true,
            ],
        ];

        foreach($categories as $category){
            $data = [
                'is_published' => $category['is_published'],
                'enable_low_rating' => Arr::get($category, 'enable_low_rating', true),
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $data[$localeKey] = [
                    'title' => Arr::get($category['title'], $localeKey, app('laravellocalization')->getDefaultLocale())
                ];
            }
            ReviewCategory::updateOrCreate(
                [
                    'slug' => $category['slug'],
                ],
                $data
            );
        }
    }
}
