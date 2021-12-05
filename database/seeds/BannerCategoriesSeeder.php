<?php

use Illuminate\Database\Seeder;
use App\Models\BannerCategory;

class BannerCategoriesSeeder extends Seeder
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
                    'en' => 'CONGRATULATION',
                    'zh' => '祝賀'
                ],
                'slug' => \Illuminate\Support\Str::slug('congratulation'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'THANK YOU NOTE',
                    'zh' => '謝謝你的注意'
                ],
                'slug' => \Illuminate\Support\Str::slug('thank you note'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'SELLING',
                    'zh' => '銷售'
                ],
                'slug' => \Illuminate\Support\Str::slug('selling'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'BUSINESS SERVICE AD',
                    'zh' => '商業服務'
                ],
                'slug' => \Illuminate\Support\Str::slug('business service ad'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'REVIEW',
                    'zh' => '評論'
                ],
                'slug' => \Illuminate\Support\Str::slug('review'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'OTHER',
                    'zh' => '其他'
                ],
                'slug' => \Illuminate\Support\Str::slug('other'),
                'is_published' => true,
            ],
        ];

        foreach($categories as $category){
            $data = [
                'is_published' => $category['is_published']
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $data[$localeKey] = [
                    'title' => \Illuminate\Support\Arr::get($category['title'], $localeKey, app('laravellocalization')->getDefaultLocale())
                ];
            }
            BannerCategory::updateOrCreate([
                'slug' => $category['slug']
            ], $data);
        }
    }
}
