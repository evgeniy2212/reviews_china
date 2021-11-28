<?php

use Illuminate\Database\Seeder;

class UserImportantDateTypeSeeder extends Seeder
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
                    'en' => 'New year',
                    'zh' => '元旦'
                ],
                'name' => [
                    'en' => 'New year',
                    'zh' => '元旦'
                ],
                'slug' => \Illuminate\Support\Str::slug('New year'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Spring Festival',
                    'zh' => '春节'
                ],
                'name' => [
                    'en' => 'Spring Festival',
                    'zh' => '春节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Spring Festival'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Qingming Festival',
                    'zh' => '清明节'
                ],
                'name' => [
                    'en' => 'Qingming Festival',
                    'zh' => '清明节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Qingming Festival'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Labor Day',
                    'zh' => '劳动节'
                ],
                'name' => [
                    'en' => 'Labor Day',
                    'zh' => '劳动节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Labor Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Dragon Boat Festival',
                    'zh' => '端午节'
                ],
                'name' => [
                    'en' => 'Dragon Boat Festival',
                    'zh' => '端午节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Dragon Boat Festival'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'National Day',
                    'zh' => '国庆节'
                ],
                'name' => [
                    'en' => 'National Day',
                    'zh' => '国庆节'
                ],
                'slug' => \Illuminate\Support\Str::slug('National Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Womens Day',
                    'zh' => '妇女节'
                ],
                'name' => [
                    'en' => 'Womens Day',
                    'zh' => '妇女节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Womens Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Chinese Youth Day',
                    'zh' => '青年节'
                ],
                'name' => [
                    'en' => 'Chinese Youth Day',
                    'zh' => '青年节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Chinese Youth Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Childrens Day',
                    'zh' => '儿童节'
                ],
                'name' => [
                    'en' => 'Childrens Day',
                    'zh' => '儿童节'
                ],
                'slug' => \Illuminate\Support\Str::slug('Childrens Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Anniversary of the founding of the Chinese Peoples Liberation Army',
                    'zh' => '中国人民解放军建军纪念日'
                ],
                'name' => [
                    'en' => 'Anniversary of the founding of the Chinese Peoples Liberation Army',
                    'zh' => '中国人民解放军建军纪念日'
                ],
                'slug' => \Illuminate\Support\Str::slug('Anniversary of the founding of the Chinese Peoples Liberation Army'),
                'is_published' => true,
            ],
        ];

        foreach(\App\Models\UserImportantDateType::all() as $importantType){
            $importantType->delete();
        }

        foreach($categories as $category){
            $userCongratData = [
                'is_published' => true,
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $userCongratData[$localeKey] = [
                    'title' => $category['title'][$localeKey],
                    'name' => $category['name'][$localeKey],
                ];
            }
            \App\Models\UserImportantDateType::updateOrCreate(
                [
                    'slug' => $category['slug']
                ], $userCongratData);
        }
    }
}
