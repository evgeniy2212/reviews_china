<?php

use Illuminate\Database\Seeder;
use App\Models\UserCongratulationCategory;

class UserCongratulationCategorySeeder extends Seeder
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
            [
                'title' => [
                    'en' => 'Engagements',
                    'zh' => '訂婚'
                ],
                'name' => [
                    'en' => 'Engagements',
                    'zh' => '訂婚'
                ],
                'slug' => \Illuminate\Support\Str::slug('Engagements'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Graduation',
                    'zh' => '畢業'
                ],
                'name' => [
                    'en' => 'Graduation',
                    'zh' => '畢業'
                ],
                'slug' => \Illuminate\Support\Str::slug('Graduation'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy anniversary',
                    'zh' => '週年快樂'
                ],
                'name' => [
                    'en' => 'Happy anniversary',
                    'zh' => '週年快樂'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy anniversary'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy birthday',
                    'zh' => '生日快樂'
                ],
                'name' => [
                    'en' => 'Happy birthday',
                    'zh' => '生日快樂'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy birthday'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New born',
                    'zh' => '新生兒'
                ],
                'name' => [
                    'en' => 'New born',
                    'zh' => '新生兒'
                ],
                'slug' => \Illuminate\Support\Str::slug('New born'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New home',
                    'zh' => '新家'
                ],
                'name' => [
                    'en' => 'New home',
                    'zh' => '新家'
                ],
                'slug' => \Illuminate\Support\Str::slug('New home'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Promotion',
                    'zh' => '晉升'
                ],
                'name' => [
                    'en' => 'Promotion',
                    'zh' => '晉升'
                ],
                'slug' => \Illuminate\Support\Str::slug('Promotion'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Starting a new business',
                    'zh' => '開始新的事業'
                ],
                'name' => [
                    'en' => 'Starting a new business',
                    'zh' => '開始新的事業'
                ],
                'slug' => \Illuminate\Support\Str::slug('Starting a new business'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Wedding',
                    'zh' => '婚禮'
                ],
                'name' => [
                    'en' => 'Wedding',
                    'zh' => '婚禮'
                ],
                'slug' => \Illuminate\Support\Str::slug('Wedding'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Other',
                    'zh' => '其它'
                ],
                'name' => [
                    'en' => '',
                    'zh' => ''
                ],
                'slug' => \Illuminate\Support\Str::slug('Other'),
                'is_published' => true,
            ],
        ];

        foreach($categories as $category){
            $userCongratData = [];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $userCongratData[$localeKey] = [
                    'title' => $category['title'][$localeKey],
                    'name' => $category['name'][$localeKey],
                ];
            }
            UserCongratulationCategory::updateOrCreate(
                [
                    'slug' => $category['slug'],
                    'is_published' => $category['is_published'],
                ],
                $userCongratData
            );
        }
    }
}
