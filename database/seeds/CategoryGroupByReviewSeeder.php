<?php

use Illuminate\Database\Seeder;

use App\Models\CategoryByReview;
use App\Models\GroupByReview;
use App\Models\ReviewCategory;

class CategoryGroupByReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Convenience products' => [
                'title' => [
                    'en' => 'Convenience products',
                    'zh' => '便利品'
                ],
                'categories' => [
                    'Alcohol' => [
                        'en' => 'Alcohol',
                        'zh' => '含酒精飲品'
                    ],
                    'Cigarettes' => [
                        'en' => 'Cigarettes',
                        'zh' => '香煙'
                    ],
                    'Fruit' => [
                        'en' => 'Fruit',
                        'zh' => '水果'
                    ],
                    'Most food items' => [
                        'en' => 'Most food items',
                        'zh' => '大多數食品'
                    ],
                    'Snack foods and candy bars' => [
                        'en' => 'Snack foods and candy bars',
                        'zh' => '零食和糖果'
                    ],
                    'Soft drinks' => [
                        'en' => 'Soft drinks',
                        'zh' => '不含酒精飲料'
                    ],
                    'Vegetables' => [
                        'en' => 'Vegetables',
                        'zh' => '蔬菜'
                    ],
                    'Other' => [
                        'en' => 'Other',
                        'zh' => '其它'
                    ]
                ]
            ],
            'Shopping products' => [
                'title' => [
                    'en' => 'Shopping products',
                    'zh' => '選購品'
                ],
                'categories' => [
                    'Cameras' => [
                        'en' => 'Cameras',
                        'zh' => '相機'
                    ],
                    'Camping equipment' => [
                        'en' => 'Camping equipment',
                        'zh' => '洗衣機和洗碗機'
                    ],
                    'Clothing' => [
                        'en' => 'Clothing',
                        'zh' => '垃圾'
                    ],
                    'Electric Car' => [
                        'en' => 'Electric Car',
                        'zh' => '電動車'
                    ],
                    'Electronics' => [
                        'en' => 'Electronics',
                        'zh' => '電子產品'
                    ],
                    'Furniture' => [
                        'en' => 'Furniture',
                        'zh' => '家具'
                    ],
                    'Golf equipment' => [
                        'en' => 'Golf equipment',
                        'zh' => '高爾夫設備'
                    ],
                    'Jewelry' => [
                        'en' => 'Jewelry',
                        'zh' => '珠寶'
                    ],
                    'Kitchen equipment' => [
                        'en' => 'Kitchen equipment',
                        'zh' => '廚房設施'
                    ],
                    'Luggage' => [
                        'en' => 'Luggage',
                        'zh' => '行李'
                    ],
                    'Mobile phones' => [
                        'en' => 'Mobile phones',
                        'zh' => '移動電話'
                    ],
                    'Perfumes and cosmetics' => [
                        'en' => 'Perfumes and cosmetics',
                        'zh' => '香水和化妝品'
                    ],
                    'Plants' => [
                        'en' => 'Plants',
                        'zh' => ' 植物'
                    ],
                    'Sporting equipment' => [
                        'en' => 'Sporting equipment',
                        'zh' => '運動設施'
                    ],
                    'Tools' => [
                        'en' => 'Tools',
                        'zh' => '工具'
                    ],
                    'Toys' => [
                        'en' => 'Toys',
                        'zh' => '玩具'
                    ],
                    'Washing machines and dishwashers' => [
                        'en' => 'Washing machines and dishwashers',
                        'zh' => '洗衣機和洗碗機'
                    ],
                    'Other' => [
                        'en' => 'Other',
                        'zh' => '其它'
                    ]
                ],
            ],
            'Specialty products' => [
                'title' => [
                    'en' => 'Specialty products',
                    'zh' => '特色產品'
                ],
                'categories' => [
                    'Book' => [
                        'en' => 'Book',
                        'zh' => '書籍'
                    ],
                    'Cleaning & Detergents products' => [
                        'en' => 'Cleaning & Detergents products',
                        'zh' => '洗滌用品'
                    ],
                    'Flowers' => [
                        'en' => 'Flowers',
                        'zh' => '花卉'
                    ],
                    'Medicines and vitamins' => [
                        'en' => 'Medicines and vitamins',
                        'zh' => '藥物和維生素'
                    ],
                    'Newspapers and magazines' => [
                        'en' => 'Newspapers and magazines',
                        'zh' => '報刊雜誌'
                    ],
                    'Pet food' => [
                        'en' => 'Pet food',
                        'zh' => '寵物食品'
                    ],
                    'Solar Panel & Wind System' => [
                        'en' => 'Solar Panel & Wind System',
                        'zh' => '太陽能電池板和風力系統'
                    ],
                    'Toothpaste, soap, and shampoo' => [
                        'en' => 'Toothpaste, soap, and shampoo',
                        'zh' => '牙膏、肥皂和洗髮水'
                    ],
                    'TV Chanel' => [
                        'en' => 'TV Chanel',
                        'zh' => '電視頻道'
                    ],
                    'Virtual Game' => [
                        'en' => 'Virtual Game',
                        'zh' => '虛擬遊戲'
                    ],
                    'Other' => [
                        'en' => 'Other',
                        'zh' => '其它'
                    ]
                ],
            ],
            'City' => [
                'title' => [
                    'en' => 'City',
                    'zh' => '城市'
                ],
            ],
            'Cruise' => [
                'title' => [
                    'en' => 'Cruise',
                    'zh' => '巡航'
                ],
            ],
            'Resort' => [
                'title' => [
                    'en' => 'Resort',
                    'zh' => '採取'
                ],
            ],
            'Hotel' => [
                'title' => [
                    'en' => 'Hotel',
                    'zh' => '酒店'
                ],
            ],
            'National parks' => [
                'title' => [
                    'en' => 'National parks',
                    'zh' => '國家公園'
                ],
            ],
            'State parks' => [
                'title' => [
                    'en' => 'State parks',
                    'zh' => '州立公園'
                ],
            ],
            'Beaches' => [
                'title' => [
                    'en' => 'Beaches',
                    'zh' => '海灘'
                ],
            ],
            'Other' => [
                'title' => [
                    'en' => 'Other',
                    'zh' => '其它'
                ],
            ],
        ];

        $reviewCategory = ReviewCategory::whereSlug('goods')->first();
        foreach($categories as $categoryName => $categoryData){
            $isNotRegionEmpty = \Illuminate\Support\Arr::has($categoryData, 'categories');
            $reviewCategoryId = $isNotRegionEmpty ? $reviewCategory->id : null;

            $data = [
                'review_category_id' => $reviewCategoryId
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $data[$localeKey] = [
                    'name' => \Illuminate\Support\Arr::get($categoryData['title'], $localeKey, app('laravellocalization')->getDefaultLocale())
                ];
            }
            $category = CategoryByReview::create($data);
            if($isNotRegionEmpty){
                $groups = $categoryData['categories'];
                foreach($groups as $group){
                    $groupData = [
                        'category_id' => $category->id,
                    ];
                    foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                        $groupData[$localeKey] = [
                            'name' => \Illuminate\Support\Arr::get($group, $localeKey, app('laravellocalization')->getDefaultLocale())
                        ];
                    }
                    GroupByReview::create($groupData);
                }
            }
        }
    }
}
